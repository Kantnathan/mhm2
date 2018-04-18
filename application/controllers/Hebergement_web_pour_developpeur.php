<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hebergement_web_pour_developpeur extends CI_Controller {
	public function __construct(){

		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth', 'form_validation','layout'));
		$this->lang->load('auth');
		
   	//$this->load->model('propriete_model');
	}

	/**
	 * contrilleur central
	
	 */
	public function index()
	{
		$this->layout->view('home');
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
}
