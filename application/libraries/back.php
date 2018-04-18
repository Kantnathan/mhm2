<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Back
{
	private $CI;
	private $var = array();
	
/*
|===============================================================================
| Constructeur
|===============================================================================
*/
	
	public function __construct()
{
	$this->CI =& get_instance();
	
	$this->var['output'] = '';
	
	//	Le titre est composé du nom de la méthode et du nom du contrôleur
	//	La fonction ucfirst permet d'ajouter une majuscule
	$this->var['titre'] = ucfirst($this->CI->router->fetch_method()) . ' - ' . ucfirst($this->CI->router->fetch_class());
	
	//	Nous initialisons la variable $charset avec la même valeur que
	//	la clé de configuration initialisée dans le fichier config.php
	$this->var['charset'] = $this->CI->config->item('charset');
	$this->var['content_seo'] = 'place des meta content pour le referencement';
	$this->var['css'] = array();
	$this->var['js'] = array();
}
	
/*
|===============================================================================
| Méthodes pour charger les vues
|	. view
|	. views
|===============================================================================
*/
	
	public function view($name, $data = array())
	{
		$this->var['output'] .= $this->CI->load->view($name, $data, true);
		
		$this->CI->load->view('../themes/back-theme', $this->var);
	}
	
	public function views($name, $data = array())
	{
		$this->var['output'] .= $this->CI->load->view($name, $data, true);
		return $this;
	}
	/*
|===============================================================================
| Méthodes pour modifier les variables envoyées au layout
|	. set_titre
|	. set_charset
    . content_seo
|===============================================================================
*/
public function set_titre($titre)
{
	if(is_string($titre) AND !empty($titre))
	{
		$this->var['titre'] = $titre;
		return true;
	}
	return false;
}

public function set_charset($charset)
{
	if(is_string($charset) AND !empty($charset))
	{
		$this->var['charset'] = $charset;
		return true;
	}
	return false;
}
public function set_content_seo($content_seo)
{
	if(is_string($content_seo) AND !empty($content_seo))
	{
		$this->var['content_seo'] = $content_seo;
		return true;
	}
	return false;
}


/*
|===============================================================================
| Méthodes pour ajouter des feuilles de CSS et de JavaScript
|	. ajouter_css
|	. ajouter_js
|===============================================================================
*/
public function css_url($nom)
	{
		return base_url() . 'assets/css/' . $nom . '.css';
		
	}
public function ajouter_css($nom)
{
	if(is_string($nom) AND !empty($nom))
	{
		$this->var['css'][] = $this->css_url($nom);
		return true;
	}
	return false;
}


public function ajouter_js($nom)
{
	if(is_string($nom) AND !empty($nom) AND file_exists( base_url().'assets/js/' . $nom . '.js'))
	{
		$this->var['js'][] = js_url($nom);
		return true;
	}
	return false;
}
}