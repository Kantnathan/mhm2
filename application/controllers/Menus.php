<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menus extends CI_Controller {

	  public function __construct(){
   	parent::__construct();
   	$this->load->library( array('layout', 'back'));
	$this->load->library(array('ion_auth', 'form_validation'));
   	$this->load->model('host_model');
    if (!$this->ion_auth->logged_in())
        {
            // redirect them to the login page
           // $this->layout->view('auth/login', 'refresh');
          redirect('auth', 'refresh');
        }
   }

  
// menu
   public function menu_view(){
   	$data = $this->host_model->get_all('menus');
   	$this->back->view('menus/menu', array('liste'=> $data));
   }
   // liste des menus
   public function menus_list(){

   $data = $this->host_model->get_all('menus');
    $cat = $this->host_model->get_all('menus');

    $this->back->view('menus/menu-list', array('liste'=>$data));
   }

 // ajout d'un article 
   public function ajout_menu(){
   	$this->form_validation->set_rules('titre', '"Titre du menu"' ,'required');
  	$this->form_validation->set_rules('lien', '"Lien du menu"' ,'required');
   	$this->form_validation->set_rules('parent', '"Le menu parent"' ,'required');
   	$this->form_validation->set_rules('words', '"les mots clés"' ,'required');
   	$this->form_validation->set_rules('contenu', '"Le contenu de l\'article"', 'required');
   	if ($this->form_validation->run() === TRUE)
		{

			$data = array(
        'titre'     => $this->input->post('titre'),
				'nom'     => $this->input->post('nom'),
				'url'      => $this->input->post('lien'),
        'ordre'      => $this->input->post('ordre'),
				'statut'      => $this->input->post('statut'),
				'parent_id' => $this->input->post('parent'),
				'keywords' => $this->input->post('words'),
				'description' => $this->input->post('contenu'),
				'created_at'=>date("Y-m-d H:i:s"),
			);
       // var_dump($this->input->post('words'));

			$this->host_model->set('menus', $data);
     	$this->menus_list();

		}
		else{
     	$this->menu_view();
   

		}
   
   }

    
   // update statut
   public function statut($id){
   $data = $this->host_model->getbyid('menus', $id);
   $statut = $data->statut;
//   echo $statut;

   if ($statut == 1) {
     # code...
     $this->host_model->update_statut('menus', $id, 0);
   }else{
     $this->host_model->update_statut('menus', $id, 1);

   };
   $this->menus_list();
   }
   // Delete  menu
   public function delete_menu($id){
   $result = $this->host_model->delete($id, 'menus');
   $statusMsg = $result?'Suppression éffectuée avec succès.':'Une erreur s\'est produite lors de la supression' ;
   $this->session->set_flashdata('menuMessage',$statusMsg);
   //var_dump($dat);
  // $statut = $data->statut;
//   echo $statut;

  
   $this->menus_list();
   }
}