<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Layout
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

	$this->CI->load->model(array('host_model'));
	$this->CI->load->library(array('ion_auth'));
	
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
	
	public function view($name, $data = array(), $dataTheme = array())
	{
		if ($this->CI->ion_auth->logged_in()){
			$this->var['logged_user'] = ' ';
		}
		$this->var['output'] .= $this->CI->load->view($name, $data, true);
		if(isset($dataTheme['vpss'])){$this->var['vpss']=$dataTheme['vpss'];}
		$pan = $this->get_panier2();
		$this->var['panier'] = $pan;
		
		$this->CI->load->view('../themes/default', $this->var);
	}
	
	public function views($name, $data = array())
	{
		$this->var['output'] .= $this->CI->load->view($name, $data, true);
		return $this;
	}

	public function get_panier2() {
		$i=0;
		$cookieName = 'visiteur';
		$idVis = null;
		if(isset($_COOKIE[$cookieName])){
			$idVis = $_COOKIE[$cookieName];
		}else{return 0;}
		$comDomaines = $this->CI->host_model->get_where('panier', array('id_vis'=>$idVis));

		$nombProd = 0;
		$prixTot = 0;
		$content = ' ';
		foreach($comDomaines as $domaine) {
			$nombProd++;
			$prixTot += $domaine->prix;
			$prix = $domaine->prix;
			$duree = $domaine->duree;
			$type = $domaine->autre;
			if($domaine->type_produit == 'domaine'){
				if($type=='busy'){$dom = 'Transfert: '.$domaine->nom;}
				else{$dom = 'Domaine: '.$domaine->nom;}
				$content .= '<tr>
								<td>'.$dom.'</td>
								<td>'.$prix.'<sup>F<sup></td>
								<td><i class="fa fa-trash-o" onclick="retirerDomaine2(\''.$domaine->nom.'\')"></i></td>
							</tr>';
			}else if($domaine->type_produit == 'hebergement'){
				
				$content .= '<tr>
								<td>Hébergement: '.$domaine->nom.'</td>
								<td>'.$prix.'<sup>F<sup></td>
								<td><i class="fa fa-trash-o" onclick="retirerHebergement(\''.$domaine->id_produit.'\')"></i></td>
							</tr>';
			}else{
				$content .= '<tr>
								<td>VPS: '.$domaine->nom.'</td>
								<td>'.$prix.'<sup>F<sup></td>
								<td><i class="fa fa-trash-o" onclick="retirerVps(\''.$domaine->id_produit.'\')"></i></td>
							</tr>';
			}
		}
		if($prixTot ==0){$add = 'disabled="disabled"';}else{$add='';}
		$head = '<h3 class="badge"><span style="font-size: 26px; color:#fff;">Ton Panier <small class="text-white">('.$nombProd.' Produits)</small></span></h3>
                        <table id="cart-up" class="responsive tablesaw-stack text-white" data-tablesaw-mode="stack"><input type="hidden" value="'.$nombProd.'" id="nombprod">
							<tbody>';
		$foot = '</tbody>
                        </table>
                        <h3 class="margin-top-30 text-white"><small class="text-white">TOTAL:</small><span style="font-size: 26px;" class="pull-right">'.$prixTot.' <sup>FCFA</sup></span></h3>
						<a href="'.base_url().'nom_de_domaine/commande" class="btn btn-success margin-top-20 minwi" '.$add.'>Je confirme la commande</a>';
		$return['html'] = $head.$content.$foot;
		$return['data'] = $comDomaines;
		$return['numb'] = $nombProd;
		return $return;
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