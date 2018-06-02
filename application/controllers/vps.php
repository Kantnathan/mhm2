<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class vps extends CI_Controller {
	public function __construct(){

		parent::__construct();
		$this->load->library(array('ion_auth', 'form_validation','layout','back'));
		$this->load->model(array('host_model'));
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
		if (!$this->ion_auth->logged_in())
        {
            // redirect them to the login page
            $this->layout->view('auth/login', 'refresh');
        }

		
   	//$this->load->model('propriete_model');
    }
    
    public function index()
	{
        $result = $this->host_model->get_all('produits_domaines');
        $packages = $this->host_model->get_all('produits_hebergements');
        $vps = $this->host_model->get_all('produits_vps');
        $this->layout->view('vps', array('domaines'=>$result, 'packages'=>$packages), array('vpss'=>$vps));
    }

    public function ajouter_panier($pid){
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

		$pack = current($this->host_model->get_where('produits_vps', array('id'=>$pid)));
		$panier = array(
			"id_vis"=>$codeVis,
			"type_produit"=>'vps',
			"id_produit"=>$pid,
			"nom"=>$pack->nom,
			"prix"=>$pack->prix,
			"autre"=>'',
			"duree"=>'1',
			"timestamp"=>time(),
		);
		$this->host_model->set('panier', $panier);
        setcookie($cookieName, $codeVis, time()+60*60*24, '/');
        $dom = $this->host_model->count(array('type_produit'=>'domaine'), 'panier');
        if($dom < 1){
            redirect(base_url().'hebergement_web/commande_hebergement');
        }else{
            redirect(base_url().'hebergement_web/commande_domaine');
        }
    }

    public function retirer_panier($pid) {
		$this->host_model->supprimer(array('id_produit'=>$pid, 'type_produit'=>'vps'), 'panier');
		return;
	}

    public function generer_code_vis() {
		return rand(827365, 998495939);
	}
}

?>