<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class nom_de_domaine extends CI_Controller {
	public function __construct(){

		parent::__construct();
		$this->load->library(array('ion_auth', 'form_validation','layout','back'));
		$this->load->model(array('host_model'));
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
		$this->load->helper('cookie');
		
   	//$this->load->model('propriete_model');
    }
    
    public function index()
	{
		$result = $this->host_model->get_all('produits_domaines');
		$this->layout->view('nom-de-domaine', array('domaines'=>$result));
	}
	
	public function recherche() {
		$resultatRech = array(
			array('domaine'=>'domaine.xyz', 'statut'=>'free', 'prix'=>'11000', 'type'=>'main'),
		);
		$autresOpt = array(
			array('domaine'=>'domaine2.xyz', 'statut'=>'busy', 'prix'=>'12000', 'type'=>'option'),
			array('domaine'=>'domaine3.xyz', 'statut'=>'free', 'prix'=>'13000', 'type'=>'option'),
			array('domaine'=>'domaine4.xyz', 'statut'=>'busy', 'prix'=>'14000', 'type'=>'option'),
			array('domaine'=>'domaine5.xyz', 'statut'=>'free', 'prix'=>'15000', 'type'=>'option')
		);
		$result = $this->host_model->get_all('produits_domaines');
        	$this->layout->view('trouver-un-domaine', array('domaines'=>$result, 'recher'=>$resultatRech, 'options'=>$autresOpt, 'panier'=>$this->get_panier2()));
	}

	public function transfert() {
		$result = $this->host_model->get_all('produits_domaines');
        	$this->layout->view('transfert-noms-de-domaine', array('domaines'=>$result));
	}

	public function enregistrement() {
		$result = $this->host_model->get_all('produits_domaines');
        	$this->layout->view('enregistrer-noms-de-domaine', array('domaines'=>$result));
	}

	public function commande(){
		$heber = $this->host_model->count(array('type_produit'=>'hebergement'), 'panier');
		$heber +=  $this->host_model->count(array('type_produit'=>'vps'), 'panier');
		$dom = $this->host_model->count(array('type_produit'=>'domaine'), 'panier');
		if($dom > 0 && $heber < 1) {
			redirect(base_url().'nom_de_domaine/commande_domaine');
		} else if($heber > 0 && $dom < 1){
			redirect(base_url().'hebergement_web/commande_hebergement');
		}else {
			redirect(base_url().'nom_de_domaine/commande_domaine2');
		}
	}

	public function commande_domaine() {
		$packages = $this->host_model->get_all('produits_hebergements');
		$result = $this->host_model->get_all('produits_domaines');
        $this->layout->view('commande-domaine-hebergement', array('domaines'=>$result, 'panier'=>$this->get_panier2(), 'packages'=>$packages));
	}

	public function commande_domaine2() {
		if ($this->ion_auth->logged_in()){
			redirect(base_url().'hebergement_web/paiement');
		}
		$result = $this->host_model->get_all('produits_domaines');
        $this->layout->view('commande-domaine-compte', array('domaines'=>$result, 'panier'=>$this->get_panier2()));
	}

	public function ajouter_panier($domaine, $type, $duree, $prix) {
		$i=0;
		$cookieName = 'visiteur';
		//$commande = array('domaine'=>$domaine, 'type'=>$type, 'duree'=>$duree, 'prix'=>$prix);
		$cont = 1;
		$codeVis = null;
		if(!isset($_COOKIE[$cookieName])){
			while($cont==1){
				$codeVis = $this->generer_code_vis();
				$cont = $this->host_model->count(array("id_vis"=>$codeVis), 'panier');
			}
		}else{
			$codeVis = $_COOKIE[$cookieName];
		}
		
		$panier = array(
			"id_vis"=>$codeVis,
			"type_produit"=>'domaine',
			"id_produit"=>substr($domaine, strpos($domaine,'.')),
			"nom"=>$domaine,
			"prix"=>$prix,
			"autre"=>$type,
			"duree"=>$duree,
			"timestamp"=>time(),
		);
		$this->host_model->set('panier', $panier);
		setcookie($cookieName, $codeVis, time()+60*60*24, '/');
		return;
	}

	public function retirer_panier($domaine) {
		$this->host_model->supprimer(array('nom'=>$domaine), 'panier');
		return;
	}

	public function generer_code_vis() {
		return rand(827365, 998495939);
	}

	public function get_panier($dataid = null) {
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
		echo $head.$content.$foot;
		return;
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