<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *	News_model
 *
 *		ajouter_news($auteur, $titre, $contenu)
 *		editer_news($id, $titre = null, $contenu = null)
 *		supprimer_news($id)
 *		count($where = array())
 *		liste_news($nb = 10, $debut = 0)
 */

class Host_model extends CI_Model
{
	protected $table = 'news';

	/**
	 *	Ajoute une news.
	 *
	 *	@param string $auteur 	L'auteur de la news
	 *	@param string $titre 	Le titre de la news
	 *	@param string $contenu 	Le contenu de la news
	 *	@return bool		Le résultat de la requête
	 */
	public function get_all($table){
		$query = $this->db->get($table);
		return $query->result();
	}

		public function get_distinct($distinct, $table){
		$this->db->distinct($distinct);
		$this->db->select($distinct);
		$query = $this->db->get($table);
		return $query->result();
	}

	public function get_where($tab, $where){
		$query = $this->db->where($where)
					  ->get($tab);
		return $query->result();
	}

	public function get_sum($column, $table, $where){
		$this->db->select_sum($column);
		$this->db->where($where);
		$query = $this->db->get($table);
		return $query->result();
	}
	public function ajouter_news($auteur, $titre, $contenu)
	{
		return $this->db->set('auteur',	$auteur)
			        ->set('titre', 	$titre)
				->set('contenu',	$contenu)
				->set('date_ajout', 'NOW()', false)
				->set('date_modif', 'NOW()', false)
				->insert($this->table);
	}
	
	/**
	 *	Édite une news déjà existante.
	 *	
	 *	@param integer $id	L'id de la news à modifier
	 *	@param string  $titre 	Le titre de la news
	 *	@param string  $contenu Le contenu de la news
	 *	@return bool		Le résultat de la requête
	 */
	public function editer_news($id, $titre = null, $contenu = null)
	{
		//	Il n'y a rien à éditer
		if($titre == null AND $contenu == null)
		{
			return false;
		}
		
		//	Ces données seront échappées
		if($titre != null)
		{
			$this->db->set('titre', $titre);
		}
		if($contenu != null)
		{
			$this->db->set('contenu', $contenu);
		}
		
		return $this->db->set('date_modif', 'NOW()', false)
				->where('id', (int) $id)
				->update($this->table);
	}


		/**
	 *	Édite un statut existant.
	 *	
	 *	@param integer $id	L'id de l'element'
	 *	@param auteur: herve elegue
	 *	@param date:11/05/2018
	 *	@return bool		Le résultat de la requête
	 */
	public function update_statut($table, $id, $statut)
	{
			$this->db->set('statut', $statut);
		
		return $this->db->set('date_modif', 'NOW()', false)
				->where('id', $id)
				->update($table);
	}
	
	/**
	 *	Supprime une news.
	 *	
	 *	@param integer $id	L'id de la news à modifier
	 *	@return bool		Le résultat de la requête
	 */
	public function delete($id, $table)
	{
		return $this->db->where('id', $id)
				->delete($table);
	}
	
	/**
	 *	Retourne le nombre de news.
	 *	
	 *	@param array $where	Tableau associatif permettant de définir des conditions
	 *	@return integer		Le nombre de news satisfaisant la condition
	 */
public function count($where,$tab=null)
	{
		if(is_array($where)){
			return (int) $this->db->where($where)
				      ->count_all_results($tab);
		}else{
			return (int) $this->db->count_all_results($where);
		}
	}
	
	
	/**
	 *	Retourne une liste de $nb dernière news.
	 *	
	 *	@param integer $nb	Le nombre de news
	 *	@param integer $debut	Nombre de news à sauter
	 *	@return objet		La liste de news
	 */
	public function liste_news($nb = 10, $debut = 0)
	{
		return $this->db->select('*')
				->from($this->table)
				->limit($nb, $debut)
				->order_by('id', 'desc')
				->get()
				->result();
	}
	public function set($table,$data)
    {
        $this->db->insert($table, $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

// chat ticket
    	public function getbyid_ticket($table, $id){
     //limit = 1;
		// offset = 0;
		$query = $this->db->get_where($table, array('id'=>$id) );
		return $query->result();
	} 

		// select where

	public function getbyid_element($table, $array_where){
     //limit = 1;
		// offset = 0;
		$query = $this->db->get_where($table, $array_where);
		return $query->result();
	}


	 public function edit($table,$data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update($table, $data);
    }
    
    /**
     * 
     * @param type $table : the concerned table
     * @param type $data  : set the new data , into an array 
     * @param type $data_where :  specify the condition of edit 
     * exemple $data_where = array("nom"=>"Léana")
     */
    public function updates($table,$data,$data_where)
    {
        $this->db->where($data_where);
        $this->db->update($table, $data);
    }
    
    /**
     *  mise à jour 10/05/2018
     *  @var field_order permet de definir l'attribut sur lequel une condition d'ordre existe
     *  @var order permet de definir le type d'ordre 
     * exemple get($table,'date_','ASC');  
     */
   /**
	 *	Supprime une news.
	 *	
	 *	@param integer $id	L'id de la news à modifier
	 *	@return bool		Le résultat de la requête
	 */
	public function supprimer($where,$tab)
	{
		return $this->db->where($where)
				->delete($tab);
	}
    public function get($table,$field_order = NULL,$order = NULL,$field_where = NULL)
    {
        // test s'il y'a une sur l'ordre
        
        if(($field_order != NULL)&&($order != NULL)){
           $this->db->order_by($field_order, $order); 
        }
        
        // test s'il y'a une condition sur Where 
        
        if($field_where != NULL){
           $this->db->where($field_where);  
        }
      
        $query = $this->db->get($table);
        return $query->result();
    }

    public function getbyid($table,$id)
    {
        $limit = 1;
        $offset = 0;
        $query = $this->db->get_where($table, array('id' => $id), $limit, $offset);
        return $query->row();
    }
    
    /*
     * j'appelle ce concept scène de ménage , ou guere des roles
     * parfois faire des chose dans une incompletude est benefique pour la personne qui doit continuer avec
     */
    
    public function getbyidinc($table,$id)
    {
        $limit = 1;
        $offset = 0;
        $query = $this->db->get_where($table, array('id' => $id), $limit, $offset);
        return $query;
    }

}


/* End of file news_model.php */
/* Location: ./application/models/news_model.php */