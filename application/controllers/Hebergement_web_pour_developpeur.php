<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hebergement_web_pour_developpeur extends CI_Controller {
	public function __construct(){

		parent::__construct();
		$this->load->library(array('ion_auth', 'form_validation','layout','back'));
		$this->load->model(array('host_model'));
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		
   	//$this->load->model('propriete_model');
	}

	/**
	 * contrilleur central
	
	 */
	public function index()
	{
        $result = $this->host_model->get_all('produits_domaines');
        $this->layout->view('home', array('domaines'=>$result));
    }
    
	public function admin()
	{
        if (!$this->ion_auth->logged_in())
        {
            // redirect them to the login page
            $this->layout->view('auth/login', 'refresh');
        }
        else if ($this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
        {
            // redirect them to the home page because they must be an administrator to view this
        $this->back->view('back/administrator');
            
        }
        else
        {
            // set the flash data error message if there is one
            $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

            //list the users
            $this->data['users'] = $this->ion_auth->users()->result();
            foreach ($this->data['users'] as $k => $user)
            {
                $this->data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }

            $this->layout->view('auth/index', $this->data);
        }
	}

	public function Offre_limite()
	{
		$this->layout->view('limited-offers');
	}
	 public function Element_de_connexion()
 {

     $this->load->library('layout');
 	$data  = array();
		$data['css'] = 'yess';
		$data['css'] = 'sss';
		 $this->layout->ajouter_css('yes');
     
     $this->layout->view('connected', $data);
 }
 function langue($language) {
        $language = ($language != "") ? $language : "english";
        $this->session->set_userdata($language);
        $this->load->view('langue');
 }

 // add domain name
 public function add_domain(){
 	// recuperation des données
 	$data = array(
         'extension'  => $this->input->post('extension'),
         'prix'       => $this->input->post('prix'),
         'prix_renouv'=> $this->input->post('prix_renouv'),
         'prix_xfer'  => $this->input->post('prix_transfert'),
         'frequence'  => $this->input->post('frequence'),
         'description'=> $this->input->post('desc'),
 	);
 	$query = $this->host_model->set('produits_domaines', $data);
     	//var_dump($query);
     
     $result = $this->host_model->get_all('frequences');
     $apiresult = $this->host_model->get_all('api_domaines');
    
 	$this->back->view('products/add-domain-name', array('liste'=>$result, 'apis'=>$apiresult));

     
 }
 public function add_domain_view(){
     $result = $this->host_model->get_all('frequences');
     $apiresult = $this->host_model->get_all('api_domaines');
 	$this->back->view('products/add-domain-name', array('liste'=>$result, 'apis'=>$apiresult));

 }

 public function add_domain_api(){
 	// recuperation des données
 	$data = array(
         'name'  => $this->input->post('nomapi'),
         'url'       => $this->input->post('urlapi'),
         'apikey1'=> $this->input->post('key1'),
         'apikey2'  => $this->input->post('key2'),
         'apikey3'  => $this->input->post('key3'),
 	);
 	$query = $this->host_model->set('api_domaines', $data);
     	//var_dump($query);
     
 	redirect('add_domain', 'refresh');

     
 }

 public function add_domain_api_view(){
 	//$result = $this->host_model->get_all('frequences');
 	$this->back->view('products/add-domain-api');

 }
  // add host name
 public function add_host(){
 	// recuperation des données
 	$data = array(
         'nom'  => $this->input->post('name'),
         'disque'       => $this->input->post('disque'),
         'site_web'=> $this->input->post('siteweb'),
         'prix'  => $this->input->post('prix'),
         'frequence'  => $this->input->post('frequence'),
         'adresses_email'=> $this->input->post('nb_email'),
         'bande_passante'  => $this->input->post('bp'),
         'sous_domaines'       => $this->input->post('nb_sous_domaine'),
         'stockage_email'=> $this->input->post('st_email'),
         'pieces_jointes'  => $this->input->post('pjointes'),
         'comptes_ftp'  => $this->input->post('ftp'),
         'bases-donnees'  => $this->input->post('bd'),
 	);
 	$query = $this->host_model->set('produits_hebergements', $data);
     	//var_dump($query);
     
 	$result = $this->host_model->get_all('frequences');
    
 	$this->back->view('products/add-host', array('liste'=>$result));

     
 }
 public function add_host_view(){
 	$result = $this->host_model->get_all('frequences');
 	$this->back->view('products/add-host', array('liste'=>$result));

 }

   // add vps name
 public function add_vps(){
 	// recuperation des données
 	$data = array(
         'nom'  => $this->input->post('name'),
         'disque'       => $this->input->post('disque'),
         'processeur'=> $this->input->post('processeur'),
         'prix'  => $this->input->post('prix'),
         'frequence'  => $this->input->post('frequence'),
         'ram'=> $this->input->post('ram'),
         'bande'  => $this->input->post('bp'),
         'visiteurs_simult'       => $this->input->post('visiteurs_simult'),
         'cores'=> $this->input->post('cores'),
         'use_case'  => $this->input->post('use_case'),
         'systeme_exploit'  => $this->input->post('systeme'),
 	);
 	$query = $this->host_model->set('produits_vps', $data);
     	//var_dump($query);
     
 	$result = $this->host_model->get_all('frequences');
 	$systeme = $this->host_model->get_all('systemes_exp');
    
 	$this->back->view('products/add-vps', array('liste'=>$result));
     
 }
 public function add_vps_view(){
 	$systeme = $this->host_model->get_all('systemes_exp');
 	$result = $this->host_model->get_all('frequences');
 	$this->back->view('products/add-vps', array('liste'=>$result,'sys'=>$systeme));

 }
    // add vps name
 public function add_systeme(){
 	// recuperation des données
 	$data = array(
         'os'   => $this->input->post('os'),
         'name' => $this->input->post('name'),
         
 	);
 	$query = $this->host_model->set('systemes_exp', $data);
     	//var_dump($query);
 	$this->back->view('products/add-systeme-exploitation');
     
 }
 public function add_systeme_view(){
 	$this->back->view('products/add-systeme-exploitation');

 }
     // add addon name
 public function add_addon(){
 	// recuperation des données
 	$data = array(
         'nom'           => $this->input->post('name'),
         'prix'          => $this->input->post('prix'),
         'description'   => $this->input->post('desc'),
         'frequence'     => $this->input->post('frequence'),
         'type'          => $this->input->post('type'),
         
 	);
 	$query = $this->host_model->set('addons', $data);
     	//var_dump($query);
 	$result = $this->host_model->get_all('frequences');
 	$type = $this->host_model->get_all('addon_type');
 	$this->back->view('products/add-addon', array('liste'=>$result,'type'=> $type));
     
 }
 public function add_addon_view(){
 	$result = $this->host_model->get_all('frequences');
 	$type = $this->host_model->get_all('addon_type');
 	$this->back->view('products/add-addon', array('liste'=>$result,'type'=> $type));

 }

 // liste des hebergements

 public function liste_hebergement(){

     $data = $this->host_model->get_all('produits_hebergements');
    // var_dump($data);
     $this->back->view('products/host-list', array('liste'=> $data));
 }

  // liste des domaine

 public function liste_domaines(){

     $data = $this->host_model->get_all('produits_domaines');
    // var_dump($data);
     $this->back->view('products/domain-list', array('liste'=> $data));
 }

  // liste des vps

 public function liste_vps(){

     $data = $this->host_model->get_all('produits_vps');
     //var_dump($data);
     $this->back->view('products/vps-list', array('liste'=> $data));
 }

 // liste des exploitation

 public function liste_exploitation(){

     $data = $this->host_model->get_all('systemes_exp');
     //var_dump($data);
     $this->back->view('products/systeme-exploitation-list', array('liste'=> $data));
 }
 // liste des addon

 public function liste_addon(){

     $data = $this->host_model->get_all('addons');
     //var_dump($data);
     $this->back->view('products/addon-list', array('liste'=> $data));
 }

}
