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
          ///$this->session->set_userdata('refered_from', $_SERVER['HTTP_REFERER']);
         // echo $this->session->userdata('refered_from');
          //print_r($_SERVER);
        $this->back->view('back/administrator' , $this->data);
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
     if (!$this->ion_auth->logged_in())
        {
            // redirect them to the login page
            $this->layout->view('auth/login', 'refresh');
        }else {
            // set the flash data error message if there is one
            $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

            //list the users
            $this->data['users'] = $this->ion_auth->users()->result();
            foreach ($this->data['users'] as $k => $user)
            {
                $this->data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
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
     $this->liste_domaines();
        }
 	
    
 	//$this->back->view('products/add-domain-name', array('liste'=>$result, 'apis'=>$apiresult));

     
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
         'bases_donnees'  => $this->input->post('bd'),
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


public function commande(){
  $lesCommandes = array();$i=0;$j=0;
  $cmd = $this->host_model->get_distinct('num_commande','commandes');
  
  foreach($cmd as $cm){
    $commande = $this->host_model->get_where('commandes', array('num_commande'=>$cm->num_commande));
    $lesCommandes[$i]['montant']=0;
    foreach($commande as $com){
      if($com->type_produit == 'domaine'){
        $produit = $this->host_model->get_where('commande_domaine', array('id'=>$com->id_commande));
        $user = $this->host_model->get_where('users', array('id'=>$com->client_id));
        $produit = current($produit);$user = current($user);

        $lesCommandes[$i]['num_commande']=$com->num_commande;
        $lesCommandes[$i]['user']= $user->first_name.' '.$user->last_name;
        if($produit->type=='transfert'){$lesCommandes[$i]['produits'][$j] = 'Transfert: '.$produit->domaine;}
        else{$lesCommandes[$i]['produits'][$j] = 'Domaine: '.$produit->domaine;}
        $lesCommandes[$i]['date']=date('d-M-y h:m:s', $com->date);
        $lesCommandes[$i]['montant']+=$com->montant;
        $lesCommandes[$i]['statut']=$com->statut;
      }else if ($com->type_produit == 'hebergement'){
        $produit = $this->host_model->get_where('commande_hebergement', array('id'=>$com->id_commande));
        $user = $this->host_model->get_where('users', array('id'=>$com->client_id));
        $produit = current($produit);$user = current($user);
        $heb = $this->host_model->get_where('produits_hebergements', array('id'=>$produit->id_produit));
        $dom = $this->host_model->get_where('commande_domaine', array('id'=>$produit->id_domaine));
        $heb = current($heb);$dom = current($dom);

        $lesCommandes[$i]['num_commande']=$com->num_commande;
        $lesCommandes[$i]['user']= $user->first_name.' '.$user->last_name;
        $lesCommandes[$i]['produits'][$j] = 'Hebergement: '.$heb->nom.' ('.$dom->domaine.')';
        $lesCommandes[$i]['date']=date('d-M-y h:m:s', $com->date);
        $lesCommandes[$i]['montant']+=$com->montant;
        $lesCommandes[$i]['statut']=$com->statut;
      }else {
        $produit = $this->host_model->get_where('commande_vps', array('id'=>$com->id_commande));
        $user = $this->host_model->get_where('users', array('id'=>$com->client_id));
        $produit = current($produit);$user = current($user);
        $heb = $this->host_model->get_where('produits_vps', array('id'=>$produit->id_produit));
        $dom = $this->host_model->get_where('commande_domaine', array('id'=>$produit->id_domaine));
        $heb = current($heb);$dom = current($dom);

        $lesCommandes[$i]['num_commande']=$com->num_commande;
        $lesCommandes[$i]['user']= $user->first_name.' '.$user->last_name;
        $lesCommandes[$i]['produits'][$j] = 'Vps: '.$heb->nom.' ('.$dom->domaine.')';
        $lesCommandes[$i]['date']=date('d-M-y h:m:s', $com->date);
        $lesCommandes[$i]['montant']+=$com->montant;
        $lesCommandes[$i]['statut']=$com->statut;
      }
      $j++;
    }
    $i++;
  }
  $this->back->view('products/commande', array('commandes'=>$lesCommandes));
}

 // add vps
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

 // update statut hébergement
   public function statut_host($id){
   $data = $this->host_model->getbyid('produits_hebergements', $id);
   $statut = $data->statut;
//   echo $statut;

   if ($statut == 1) {
     # code...
     $this->host_model->update_statut('produits_hebergements', $id, 0);
   }else{
     $this->host_model->update_statut('produits_hebergements', $id, 1);

   };
   $this->liste_hebergement();
   }
   // update statut combo
   public function statut_combo($id){
   $data = $this->host_model->getbyid('combos', $id);
   $statut = $data->statut;
//   echo $statut;

   if ($statut == 1) {
     # code...
     $this->host_model->update_statut('combos', $id, 0);
   }else{
     $this->host_model->update_statut('combos', $id, 1);

   };
   $this->liste_combo();
   }

   // update statut domaine
   public function statut_domaine($id){
   $data = $this->host_model->getbyid('produits_domaines', $id);
   $statut = $data->statut;
//   echo $statut;

   if ($statut == 1) {
     # code...
     $this->host_model->update_statut('produits_domaines', $id, 0);
   }else{
     $this->host_model->update_statut('produits_domaines', $id, 1);

   };
   $this->liste_domaines();
   }
 // update statut systeme d'exploitation
   public function statut_systeme($id){
   $data = $this->host_model->getbyid('systemes_exp', $id);
   $statut = $data->statut;
//   echo $statut;

   if ($statut == 1) {
     # code...
     $this->host_model->update_statut('systemes_exp', $id, 0);
   }else{
     $this->host_model->update_statut('systemes_exp', $id, 1);

   };
   $this->liste_exploitation();
   }

   // update statut vps
   public function statut_vps($id){
   $data = $this->host_model->getbyid('produits_vps', $id);
   $statut = $data->statut;
//   echo $statut;

   if ($statut == 1) {
     # code...
     $this->host_model->update_statut('produits_vps', $id, 0);
   }else{
     $this->host_model->update_statut('produits_vps', $id, 1);

   };
   $this->liste_vps();
   }
    // update statut vps
   public function statut_addon($id){
   $data = $this->host_model->getbyid('addons', $id);
   $statut = $data->statut;
//   echo $statut;

   if ($statut == 1) {
     # code...
     $this->host_model->update_statut('addons', $id, 0);
   }else{
     $this->host_model->update_statut('addons', $id, 1);

   };
   $this->liste_addon();
   }

      // Delete domaine
   public function delete_domaine($id){
   $result = $this->host_model->delete($id, 'produits_domaines');
   $statusMsg = $result?'Suppression éffectuée avec succès.':'Une erreur s\'est produite lors de la supression' ;
   $this->session->set_flashdata('deleteMessaage',$statusMsg);
   //var_dump($dat);
  // $statut = $data->statut;
//   echo $statut;

  
   $this->liste_domaines();
   }
        // Delete
   public function delete_host($id){
   $result = $this->host_model->delete($id, 'produits_hebergements');
   $statusMsg = $result?'Suppression éffectuée avec succès.':'Une erreur s\'est produite lors de la supression' ;
   $this->session->set_flashdata('deleteMessaage',$statusMsg);
   //var_dump($dat);
  // $statut = $data->statut;
//   echo $statut;

  
   $this->liste_hebergement();
   }
        // Delete vps
   public function delete_vps($id){
   $result = $this->host_model->delete($id, 'produits_vps');
   $statusMsg = $result?'Suppression éffectuée avec succès.':'Une erreur s\'est produite lors de la supression' ;
   $this->session->set_flashdata('deleteMessaage',$statusMsg);
   //var_dump($dat);
  // $statut = $data->statut;
//   echo $statut;

  
   $this->liste_vps();
   }
        // Delete  systeme
   public function delete_systeme($id){
   $result = $this->host_model->delete($id, 'systemes_exp');
   $statusMsg = $result?'Suppression éffectuée avec succès.':'Une erreur s\'est produite lors de la supression' ;
   $this->session->set_flashdata('deleteMessaage',$statusMsg);
   //var_dump($dat);
  // $statut = $data->statut;
//   echo $statut;

  
   $this->liste_exploitation();
   }

// Delete  addon
   public function delete_addon($id){
   $result = $this->host_model->delete($id, 'addons');
   $statusMsg = $result?'Suppression éffectuée avec succès.':'Une erreur s\'est produite lors de la supression' ;
   $this->session->set_flashdata('deleteMessaage',$statusMsg);
   //var_dump($dat);
  // $statut = $data->statut;
//   echo $statut;

  
   $this->liste_addon();
   }

 // single domaine
   public function single_domaine($id){
  //$id = $this->input->get('id');
        $data = $this->host_model->getbyid_ticket('produits_domaines',$id);
   //var_dump($result);
    $this->back->view('products/single-domaine', array('liste'=> $data));
   }

 // single host
   public function single_host($id){
  //$id = $this->input->get('id');
        $data = $this->host_model->getbyid_ticket('produits_hebergements',$id);
   //var_dump($result);
    $this->back->view('products/single-host', array('liste'=> $data));
   }
   // single vps
   public function single_vps($id){
  //$id = $this->input->get('id');
        $data = $this->host_model->getbyid_ticket('produits_vps',$id);
   //var_dump($result);
    $this->back->view('products/single-vps', array('liste'=> $data));
   }

     // single systeme
   public function single_systeme($id){
  //$id = $this->input->get('id');
        $data = $this->host_model->getbyid_ticket('systemes_exp',$id);
   //var_dump($result);
    $this->back->view('products/single-systeme', array('liste'=> $data));
   }

   // single addon
   public function single_addon($id){
  //$id = $this->input->get('id');
        $data = $this->host_model->getbyid_ticket('addons',$id);
   //var_dump($result);
    $this->back->view('products/single-addon', array('liste'=> $data));
    }
   // edit products

   public function edit_domaine($id){
   $data = $this->host_model->getbyid_ticket('produits_domaines', $id);
   $result = $this->host_model->get_all('frequences');
   $apiresult = $this->host_model->get_all('api_domaines');
  $this->back->view('products/add-domain-name', array('liste'=>$result, 'apis'=>$apiresult,'single' => $data));
 }
   // update domain name
 public function update_domain(){
  // recuperation des données
  $id = $this->input->post('id');
  $data = array(
         'extension'  => $this->input->post('extension'),
         'prix'       => $this->input->post('prix'),
         'prix_renouv'=> $this->input->post('prix_renouv'),
         'prix_xfer'  => $this->input->post('prix_transfert'),
         'frequence'  => $this->input->post('frequence'),
         'description'=> $this->input->post('desc'),
  );
  $query = $this->host_model->edit('produits_domaines', $data, $id);
      //var_dump($query);
     
     $result = $this->host_model->get_all('frequences');
     $apiresult = $this->host_model->get_all('api_domaines');
     $this->liste_domaines();
    
  //$this->back->view('products/add-domain-name', array('liste'=>$result, 'apis'=>$apiresult));

     
 }

 // combo view
public function combo(){
  if ($this->input->post('host') != NULL ) {
    $host = $this->input->post('host');
    $domain = $this->input->post('domaine');
    foreach ($domain as $dom ) {
      $data = array(
      'host'=> $host,
      'domaine'=> $dom,
      'created_at'=> date("Y-m-d H:i:s"),

      );
      $result = $this->host_model->set('combos', $data);
    }
    # code...
    $comboMessage = $result?'Ajout effectué avec succès':"une erreur est survenue lors de l'envoie";
   $this->session->set_flashdata('comboMessage',$comboMessage);

  }

  $combo = $this->host_model->get_all('combos');
  $host = $this->host_model->get_all('produits_hebergements');
  $domain = $this->host_model->get_all('produits_domaines');
  $this->back->view('products/combo', array('liste'=> $combo, 'host'=> $host,  'domain'=> $domain));

}
 public function liste_combo(){
$combo = $this->host_model->get_all('combos');
  $host = $this->host_model->get_all('produits_hebergements');
  $domain = $this->host_model->get_all('produits_domaines');
  $this->back->view('products/combo', array('liste'=> $combo, 'host'=> $host,  'domain'=> $domain));
 }
}
