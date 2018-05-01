<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	  public function __construct(){
   	parent::__construct();
   	$this->load->library( array('layout', 'back'));
	$this->load->library(array('ion_auth', 'form_validation'));
   	$this->load->model('host_model');
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
}