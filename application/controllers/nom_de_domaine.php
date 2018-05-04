<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class nom_de_domaine extends CI_Controller {
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
        $this->layout->view('nom-de-domaine', array('domaines'=>$result));
    }
}



?>