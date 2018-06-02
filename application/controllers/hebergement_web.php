<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hebergement_web extends CI_Controller {
	public function __construct(){

		parent::__construct();
		$this->load->library(array('ion_auth', 'form_validation','layout','back'));
		$this->load->model(array('host_model'));
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
		

		
   	//$this->load->model('propriete_model');
    }
    
    public function index()
	{
	$result = $this->host_model->get_all('produits_domaines');
	$packages = $this->host_model->get_all('produits_hebergements');
        $this->layout->view('hebergement-linux', array('domaines'=>$result, 'packages'=>$packages));
	}
	
	public function commande_hebergement() {
		$result = $this->host_model->get_all('produits_domaines');
        $this->layout->view('commande-hebergement-domaine', array('domaines'=>$result, 'panier'=>$this->get_panier2()));
	}

	public function add_domaine($type=''){
		$cookieName = 'visiteur';
		$idVis = null;
		if(isset($_COOKIE[$cookieName])){
			$idVis = $_COOKIE[$cookieName];
		} else{
			redirect(base_url().'hebergement_web');
		}
		if($type==''){
			$domaine=$this->input->post('domaine');
			$panierItem = array(
				'id_vis'=>$idVis,
				'type_produit'=>'domaine',
				'id_produit'=>substr($domaine, strpos($domaine,'.')),
				'nom'=>$domaine,
				'prix'=>0,
				'duree'=>1,
				'timestamp'=>time()
			);
			$this->host_model->set('panier',$panierItem);
			redirect(base_url().'hebergement_web/commande_domaine');
		} else if($type=='transfert'){
			$domaine=$this->input->post('domaine');
			$tld=$this->input->post('tld');
			$authcode=$this->input->post('authcode');
			$exts = $this->host_model->get_where('produits_domaines', array('extension'=>$tld));
			$ext = current($exts);
			$panierItem = array(
				'id_vis'=>$idVis,
				'type_produit'=>'domaine',
				'id_produit'=>$tld,
				'nom'=>$domaine.$tld,
				'auth_code'=>$authcode,
				'prix'=>$ext->prix_xfer,
				'duree'=>1,
				'timestamp'=>time()
			);
			$this->host_model->set('panier',$panierItem);
			redirect(base_url().'hebergement_web/commande_domaine');
		} else {
			return;
		}
	}

	public function transfert() {
		$result = $this->host_model->get_all('produits_domaines');
        $this->layout->view('transfert-noms-de-domaine', array('domaines'=>$result));
	}

	public function enregistrement() {
		$result = $this->host_model->get_all('produits_domaines');
        $this->layout->view('enregistrer-noms-de-domaine', array('domaines'=>$result));
	}

	public function paiement(){
		if (!$this->ion_auth->logged_in()){
			redirect(base_url().'nom_de_domaine/commande_domaine2');
		}
		$cookieName = 'visiteur';
		$idVis = null; $i=1; $numCom='';
		if(isset($_COOKIE[$cookieName])){
			$idVis = $_COOKIE[$cookieName];
		} else{
			redirect(base_url().'nom_de_domaine');
		}
		$pans = $this->host_model->count(array('id_vis'=>$idVis), 'panier');
		if($pans<1){
			redirect(base_url().'nom_de_domaine');
		}
		$result = $this->host_model->get_all('produits_domaines');
		$panierd = $this->host_model->get_where('panier', array('type_produit'=>'domaine','id_vis'=>$idVis));
		
		while($i==1){
			$numCom=$this->genererNumeroComande();
			$i = $this->host_model->count(array("id_commande"=>$numCom), 'commandes');
		}
		$mntCom = 0;
		$domaines = array();
		foreach($panierd as $item){
			if($item->type_produit == 'domaine'){
				if($item->autre=='busy'){$item->autre='transfert';}else if($item->autre=='free'){$item->autre='reservation';}
				$comDomaine = array(
					'domaine'=>$item->nom,
					'extension'=>substr($item->nom, strpos($item->nom,'.')),
					'type'=>$item->autre,
					'duree'=>$item->duree,
					'montant'=>$item->prix,
					'auth_code'=>$item->auth_code,
					'ns1'=>$item->ns1,
					'ns2'=>$item->ns2,
					'ns3'=>$item->ns3,
					'ns4'=>$item->ns4,
					'client_id'=>$this->session->userdata('user_id'),
				);
				$check = $this->host_model->count($comDomaine, 'commande_domaine');
				if($check>0){ break;}
				$id = $this->host_model->set('commande_domaine', $comDomaine);
				$commande = array(
					'num_commande'=>$numCom,
					'type_produit'=>'domaine',
					'id_commande'=>$id,
					'date'=>time(),
					'statut'=>0,
					'montant'=>$item->prix,
					'client_id'=>$this->session->userdata('user_id'),
				);
				$this->host_model->set('commandes', $commande);
				$mntCom += $item->prix;
				$domaines[]=$id;
			}
		}
		$commanded = $this->host_model->get_where('commande_domaine', array('domaine'=>$panierd[0]->nom,'client_id'=>$this->session->userdata('user_id')));
		if(!isset($commanded[0])){
			redirect(base_url().'hebergement_web/commande_hebergement');
		}
		$panierh = $this->host_model->get_where('panier', array('id_vis'=>$idVis));
		foreach($panierh as $itemh){
			if($itemh->type_produit == 'hebergement'){
				$comHeb = array(
					'id_produit'=>$itemh->id_produit,
					'id_domaine'=>$commanded[0]->id,
					'duree'=>$itemh->duree,
					'client_id'=>$this->session->userdata('user_id'),
				);
				$check = $this->host_model->count($comHeb, 'commande_hebergement');
				if($check>0){ break;}
				$id = $this->host_model->set('commande_hebergement', $comHeb);
				$commande = array(
					'num_commande'=>$numCom,
					'type_produit'=>'hebergement',
					'id_commande'=>$id,
					'date'=>time(),
					'statut'=>0,
					'montant'=>$itemh->prix,
					'client_id'=>$this->session->userdata('user_id'),
				);
				$this->host_model->set('commandes', $commande);
				$mntCom += $itemh->prix;
			}else if ($itemh->type_produit == 'vps'){
				$comVps = array(
					'id_produit'=>$itemh->id_produit,
					'id_domaine'=>$domaines[0],
					'duree'=>$itemh->duree,
					'client_id'=>$this->session->userdata('user_id'),
				);
				$check = $this->host_model->count($comVps, 'commande_vps');
				if($check>0){ break;}
				$id = $this->host_model->set('commande_vps', $comVps);
				$commande = array(
					'num_commande'=>$numCom,
					'type_produit'=>'vps',
					'id_commande'=>$id,
					'date'=>time(),
					'statut'=>0,
					'montant'=>$itemh->prix,
					'client_id'=>$this->session->userdata('user_id'),
				);
				$this->host_model->set('commandes', $commande);
				$mntCom += $itemh->prix;
			}
		}
		$total = current($this->host_model->get_sum('prix', 'panier', array('id_vis'=>$idVis)));
        $this->layout->view('paiement', array('domaines'=>$result, 'panier'=>$this->get_panier2(),'total'=>$total->prix));
	}

	public function genererNumeroComande(){
		$num = '';
		$num .= date('y');
		$num .= date('m');
		$num .= date('d');
		$num .= rand(191,999809);
		return $num;
	}

	public function commande_domaine() {
		if ($this->ion_auth->logged_in()){
			redirect(base_url().'hebergement_web/paiement');
		}
		$result = $this->host_model->get_all('produits_domaines');
        $this->layout->view('commande-domaine-compte', array('domaines'=>$result, 'panier'=>$this->get_panier2()));
	}

	public function ajouter_panier($idPack) {
		$cookieName = 'visiteur';
		$codeVis = null;
		$cont = 1;
		if(!isset($_COOKIE[$cookieName])){
			while($cont==1){
				$codeVis = $this->generer_code_vis();
				$cont = $this->host_model->count(array("id_vis"=>$codeVis), 'panier');
			}
		}else{
			$codeVis = $_COOKIE[$cookieName];
		}

		$pack = current($this->host_model->get_where('produits_hebergements', array('id'=>$idPack)));
		$panier = array(
			"id_vis"=>$codeVis,
			"type_produit"=>'hebergement',
			"id_produit"=>$idPack,
			"nom"=>$pack->nom,
			"prix"=>$pack->prix,
			"autre"=>'',
			"duree"=>'1',
			"timestamp"=>time(),
		);
		$this->host_model->set('panier', $panier);
		setcookie($cookieName, $codeVis, time()+60*60*24, '/');
		$dom = $this->host_model->count(array('type_produit'=>'domaine'), 'panier');
		echo $dom;
	}

	public function retirer_panier($idPack) {
		$this->host_model->supprimer(array('id_produit'=>$idPack, 'type_produit'=>'hebergement'), 'panier');
		return;
	}

	public function generer_code_vis() {
		return rand(827365, 998495939);
	}

	public function get_panier2() {
		$i=0;
		$cookieName = 'visiteur';
		$idVis = null;
		if(isset($_COOKIE[$cookieName])){
			$idVis = $_COOKIE[$cookieName];
		}
		$comDomaines = $this->host_model->get_where('panier', array('id_vis'=>$idVis));

		$nombProd = 0;
		$prixTot = 0;
		$content = ' ';
		foreach($comDomaines as $domaine) {
			$nombProd++;
			$prixTot += $domaine->prix;
			$prix = $domaine->prix;
			$duree = $domaine->duree;
			$type = $domaine->autre;
			if($domaine->type_produit == 'domaine'){
				if($type=='busy'){$dom = 'Transfert: '.$domaine->nom;}
				else{$dom = 'Domaine: '.$domaine->nom;}
				$content .= '<tr>
								<td>'.$dom.'</td>
								<td>'.$prix.'<sup>F<sup></td>
								<td><i class="fa fa-trash-o" onclick="retirerDomaine2(\''.$domaine->nom.'\')"></i></td>
							</tr>';
			}else if($domaine->type_produit == 'hebergement'){
				
				$content .= '<tr>
								<td>Hébergement: '.$domaine->nom.'</td>
								<td>'.$prix.'<sup>F<sup></td>
								<td><i class="fa fa-trash-o" onclick="retirerHebergement(\''.$domaine->id_produit.'\')"></i></td>
							</tr>';
			}else{
				$content .= '<tr>
								<td>VPS: '.$domaine->nom.'</td>
								<td>'.$prix.'<sup>F<sup></td>
								<td><i class="fa fa-trash-o" onclick="retirerVps(\''.$domaine->id_produit.'\')"></i></td>
							</tr>';
			}
		}
		if($prixTot ==0){$add = 'disabled="disabled"';}else{$add='';}
		$head = '<h3 class="badge"><span style="font-size: 26px; color:#fff;">Ton Panier <small class="text-white">('.$nombProd.' Produits)</small></span></h3>
                        <table id="cart-up" class="responsive tablesaw-stack text-white" data-tablesaw-mode="stack"><input type="hidden" value="'.$nombProd.'" id="nombprod">
							<tbody>';
		$foot = '</tbody>
                        </table>
                        <h3 class="margin-top-30 text-white"><small class="text-white">TOTAL:</small><span style="font-size: 26px;" class="pull-right">'.$prixTot.' <sup>FCFA</sup></span></h3>
						<a href="'.base_url().'nom_de_domaine/commande" class="btn btn-success margin-top-20 minwi" '.$add.'>Je confirme la commande</a>';
		$return['html'] = $head.$content.$foot;
		$return['data'] = $comDomaines;
		return $return;
	}
}



?>