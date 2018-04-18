<?php

class Forum extends CI_Controller
{
		private $titre_defaut;
	
	public function __construct()
	{
		//	Obligatoire
		parent::__construct();
		
		//	Maintenant, ce code sera exécuté chaque fois que ce contrôleur sera appelé.
		$this->titre_defaut = 'Mon super site';
		 $this->layout->ajouter_css('yes');
		 $this->layout->ajouter_css('yesg');
		 $this->layout->ajouter_css('yesc');
		 $this->layout->ajouter_css('yesc');
		  $this->layout->ajouter_css('yes');
		 $this->layout->ajouter_css('yesg');
		 $this->layout->ajouter_css('yesc');
		 $this->layout->ajouter_css('yesc');
		//echo 'Bonjour !';
	}
	
	public function index()
	{
		$this->accueil();
		$this->output->enable_profiler(true);
	}

	public function accueil()
	{
		$data  = array();
		$data['nom'] = 'herve';
		$data['en_ligne'] = false;
		$data['email'] = 'herve@gmail.com';
		$data['adresse_ip'] = $this->session->userdata('ip');
		$this->load->view('test', $data, false);

	}
	

	//	Cette page accepte une variable $_GET facultative
	public function bonjour($pseudo = '')
	{
		echo 'Salut à toi : ' . $pseudo;
	}

	//	Cette page accepte deux variables $_GET facultatives
	public function manger($plat = '', $boisson = '')
	{
		echo 'Voici votre menu : <br />';
		echo $plat . '<br />';
		echo $boisson . '<br />';
		echo 'Bon appétit !';
	}
	public function login()
{
	//	Chargement de la bibliothèque
	$this->load->library('form_validation');
	$pseudo = $this->input->post('pseudo');
$mdp = $this->input->post('mdp');
 
	$this->form_validation->set_rules('pseudo', '"Nom d\'utilisateur"', 'trim|required|min_length[5]|max_length[52]|alpha_dash|encode_php_tags');
	$this->form_validation->set_rules('mdp',    '"Mot de passe"',       'trim|required|min_length[5]|max_length[52]|alpha_dash|encode_php_tags');

	if($this->form_validation->run())
	{
		//	Le formulaire est valide
		$this->load->view('connected');
	}
	else
	{
		//	Le formulaire est invalide ou vide
		$this->load->view('login');
	}
	$this->output->enable_profiler(true);
}
public function news()
{

	$this->load->model('news_model');
  // $data = ['Arthur','Un super titre','Un super contenu'];
	$this->news_model->ajouter_news('Arthur','Un super titre','Un super contenu');
	$this->output->enable_profiler(true);
	//var_dump($data);
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
}