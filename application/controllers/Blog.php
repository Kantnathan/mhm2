<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

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

   public function index(){
   	$this->back->view('blog/add-categorie');
   }

   // ajout categorie
   public function ajout_categtorie(){
   	$this->form_validation->set_rules('name', '"Non de la catégorie"' ,'required');
   	$this->form_validation->set_rules('desc', '"description de la catégorie"', 'required');
   	if ($this->form_validation->run() === TRUE)
		{

			$data = array(
				'name' => $this->input->post('name'),
				'description' => $this->input->post('desc'),
				'created_at'=>date("Y-m-d H:i:s"),
			);
			$this->host_model->set('categorie', $data);
     	$this->cat_list();

		}
		else{
    $this->back->view('blog/add-categorie');

		}
   
   }

   // liste des catégorie
   public function  cat_list(){

   $data = $this->host_model->get_all('categorie');
   	$this->back->view('blog/cat-list', array('liste'=>$data));
   }
// article
   public function article_view(){
   	$data = $this->host_model->get_all('categorie');
   	$this->back->view('blog/article', array('liste'=> $data));
   }
 // ajout d'un article 
   public function ajout_article(){
   	$this->form_validation->set_rules('titre', '"Titre de l\'article"' ,'required');
   	$this->form_validation->set_rules('lien', '"Lien de la video"' ,'required');
   	$this->form_validation->set_rules('categorie', '"catégorie de l\'article"' ,'required');
   	$this->form_validation->set_rules('type', '"Type de l\'article"' ,'required');
   	$this->form_validation->set_rules('contenu', '"Le contenu de l\'article"', 'required');
   	if ($this->form_validation->run() === TRUE)
		{

			$data = array(
				'titre'     => $this->input->post('titre'),
				'lien'      => $this->input->post('lien'),
				'type'      => $this->input->post('type'),
				'categorie' => $this->input->post('categorie'),
				'extrait' => $this->input->post('contenu'),
				'contenu' => $this->input->post('contenu'),
				'created_at'=>date("Y-m-d H:i:s"),
			);
			$this->host_model->set('articles', $data);
     	$this->article_list();

		}
		else{
     	$this->article_view();
   

		}
   
   }

    // liste des articles
   public function article_list(){

   $data = $this->host_model->get_all('articles');
   	$cat = $this->host_model->get_all('categorie');

   	$this->back->view('blog/articles-list', array('liste'=>$data));
   }

      // update statut categorie
   public function statut_categorie($id){
   $data = $this->host_model->getbyid('categorie', $id);
   $statut = $data->statut;
//   echo $statut;

   if ($statut == 1) {
     # code...
     $this->host_model->update_statut('categorie', $id, 0);
   }else{
     $this->host_model->update_statut('categorie', $id, 1);

   };
   $this->cat_list();
   }

   // update statut article
   public function statut_article($id){
   $data = $this->host_model->getbyid('articles', $id);
   $statut = $data->statut;
//   echo $statut;

   if ($statut == 1) {
     # code...
     $this->host_model->update_statut('articles', $id, 0);
   }else{
     $this->host_model->update_statut('articles', $id, 1);

   };
   $this->article_list();
   }
   // Delete  addon
   public function delete_categorie($id){
   $result = $this->host_model->delete($id, 'categorie');
   $statusMsg = $result?'Suppression éffectuée avec succès.':'Une erreur s\'est produite lors de la supression' ;
   $this->session->set_flashdata('deleteMessaage',$statusMsg);
  
   $this->cat_list();
   }
   // Delete  addon
   public function delete_article($id){
   $result = $this->host_model->delete($id, 'articles');
   $statusMsg = $result?'Suppression éffectuée avec succès.':'Une erreur s\'est produite lors de la supression' ;
   $this->session->set_flashdata('deleteMessaage',$statusMsg);
   //var_dump($dat);
  // $statut = $data->statut;
//   echo $statut;

  
   $this->article_list();
   }
}