<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Assistance extends CI_Controller {

	  public function __construct(){
   	parent::__construct();
   	$this->load->library( array('layout', 'back'));
	//$this->load->library(array('ion_auth', 'form_validation'));
   	$this->load->model('host_model');
     if (!$this->ion_auth->logged_in())
        {
            // redirect them to the login page
           // $this->layout->view('auth/login', 'refresh');
          redirect('auth', 'refresh');
        }
   }

   public function index(){

   $this->back->view('assistance/add-testimonial');
        //$this->back->view('back/administrator');
   }

    // ajout d'un temoignage 
   public function ajout_temoignage(){
   	$this->form_validation->set_rules('motif', '"Motif du témoignage "' ,'required');
   	$this->form_validation->set_rules('service', '"Service Concerné"' ,'required');
   	$this->form_validation->set_rules('contenu', '"Le contenu du témoignage"', 'required');
   	if ($this->form_validation->run() === TRUE)
		{

			$data = array(
				'motif'      => $this->input->post('motif'),
				'service' => $this->input->post('service'),
				'id_user' => $this->ion_auth->user()->row()->id,
				'statut' => 0, //$this->input->post('contenu'),
				'contenu' => $this->input->post('contenu'),
				'created_at'=>date("Y-m-d H:i:s"),
			);
			$this->host_model->set('temoignages', $data);
     	$this->temoignage_list();

		}
		else{
     	$this->index();
   

		}
   
   }
     // liste des témoiganges
   public function temoignage_list(){

   $data = $this->host_model->get_all('temoignages');
   	//$cat = $this->host_model->get_all('categorie');

   	$this->back->view('assistance/temoignage-list', array('liste'=>$data));
   }

   // view ticket
public function ticket_view(){
   	$this->back->view('assistance/ticket');
   }

       // ajout d'un ticket 
   public function ajout_ticket(){
   	$this->form_validation->set_rules('objet', '"Objet du ticket "' ,'required');
   	//$this->form_validation->set_rules('service', '"Service Concerné"' ,'required');
   	$this->form_validation->set_rules('contenu', '"Le contenu du ticket"', 'required');
   	if ($this->form_validation->run() === TRUE)
		{

			$data = array(
				'objet'      => $this->input->post('objet'),
				'id_user' => $this->ion_auth->user()->row()->id,
				'statut' => 0, //$this->input->post('contenu'),
				'contenu' => $this->input->post('contenu'),
				'created_at'=>date("Y-m-d H:i:s"),
			);
			$data = $this->host_model->set('ticket', $data);
			$statusMsg = $data?'Votre ticket a été envoyé avec succès nous vous repondrosn adns des plus bref délais':'Quelques chose a du se passer, reessayez svp.';
             $this->session->set_flashdata('statusMsg',$statusMsg);
             $message = array(
                'id_ticket'  => $data, //$this->input->post('objet'),
				'id_user' => $this->ion_auth->user()->row()->id,
				//'statut' => 0, //$this->input->post('contenu'),
				'message' => $this->input->post('contenu'),
				'created_at'=>date("Y-m-d H:i:s"),
             );
			$mess = $this->host_model->set('message', $message);

     	$this->ticket_list();
          //var_dump($data);
		}
		else{
     	$this->ticket_view();
   

		}
   
   }
        // liste des tickets
   public function ticket_list(){

   $data = $this->host_model->get_all('ticket');
   	//$cat = $this->host_model->get_all('categorie');

   	$this->back->view('assistance/ticket-list', array('liste'=>$data));
   }

      // single ticket
public function single_ticket($id){
	//$id = $this->input->get('id');
      	$result = $this->host_model->getbyid_ticket('ticket',$id);
      	foreach ($result as $spec) {
      # code...
      $data_where = array('id_ticket'=>$spec->id);
      $id_user = array('id'=>$spec->id_user);
      $user = $this->host_model->getbyid_element("users", $id_user);
      $message = $this->host_model->getbyid_element("message", $data_where);
      //$pays = $this->propriete_model->getbyid_element("pays", $data_where_pays);
      $data[] = array(
        'ticket'=>$spec,
        'message'=> $message,
        'users'=> $user,
        //'pays'=> $pays,
      );
    };
    $liste = array('list'=>$data);
    $yes =  json_encode($liste);
    //var_dump($user);
   $this->back->view('assistance/single-ticket', array('liste'=> $data));
   }

      // update statut temoignage
   public function statut_temoignage($id){
   $data = $this->host_model->getbyid('temoignages', $id);
   $statut = $data->statut;
//   echo $statut;

   if ($statut == 1) {
     # code...
     $this->host_model->update_statut('temoignages', $id, 0);
   }else{
     $this->host_model->update_statut('temoignages', $id, 1);

   };
   $this->temoignage_list();
   }

   // update statut ticket
   public function statut_ticket($id){
   $data = $this->host_model->getbyid('ticket', $id);
   $statut = $data->statut;
//   echo $statut;

   if ($statut == 1) {
     # code...
     $this->host_model->update_statut('ticket', $id, 0);
   }else{
     $this->host_model->update_statut('ticket', $id, 1);

   };
   $this->ticket_list();
   }
      // update statut ticket
   public function statut_faq($id){
   $data = $this->host_model->getbyid('faq', $id);
   $statut = $data->statut;
//   echo $statut;

   if ($statut == 1) {
     # code...
     $this->host_model->update_statut('faq', $id, 0);
   }else{
     $this->host_model->update_statut('faq', $id, 1);

   };
   $this->faq_list();
   }
   // edit ticket

   public function edit_ticket($id)
   {
       //$id = $this->input->get('id');
    $this->form_validation->set_rules('objet', '"Objet du ticket "' ,'required');
    //$this->form_validation->set_rules('service', '"Service Concerné"' ,'required');
    $this->form_validation->set_rules('contenu', '"Le contenu du ticket"', 'required');
    if ($this->form_validation->run() === TRUE)
    {

      $data = array(
        'objet'      => $this->input->post('objet'),
        'id_user' => $this->ion_auth->user()->row()->id,
        'statut' => 0, //$this->input->post('contenu'),
        'contenu' => $this->input->post('contenu'),
        'created_at'=>date("Y-m-d H:i:s"),
      );
      $result = $this->host_model->getbyid_ticket('ticket',$id);
      $this->back->view('assistance/edit-ticket', array('liste'=>$result));
      //var_dump($result);


        /*if ($this->form_validation->run('cuisine') == FALSE)
        {
            $id = $this->input->get('id');
            $detail_chambre = $this->chambre->getbyid('chambre',$id);
            $data = array(
                'id'=>$id,
                "chambre" => $detail_chambre,
            );

            $this->layout->view('chambre/edit',$data);
        }
        else
        {
            $name = $this->input->post('nom_cite');
            $prix = $this->input->post('prix');
            $ville = $this->input->post('ville');;
            $pays = $this->input->post('pays');
            $caracteristiques = $this->input->post('caracteristiques');
            $id = $this->input->post('id');

            $data = array(
                'nom_cite' => $name,
                'prix' => $prix,
                'ville' => $ville,
                'pays' => $pays,
                'caracteristique' => $caracteristiques
            );
            $this->chambre->edit("chambre",$data,$id);
            redirect('chambre/get');

        }*/
   }

}

  // view faq
public function faq_view(){
  if (!$this->ion_auth->logged_in())
        {
            // redirect them to the login page
            $this->layout->view('auth/login', 'refresh');
        }
        else if ($this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
        {
            // redirect them to the home page because they must be an administrator to view this
        $this->back->view('assistance/add-faq');
        //$this->back->view('back/administrator');
            
        }
      }

       // ajout faq
   public function ajout_faq(){
    $this->form_validation->set_rules('question', '"Question de la FAQ"' ,'required');
    $this->form_validation->set_rules('reponse', '"Reponse  de la FAQ"', 'required');
    if ($this->form_validation->run() === TRUE)
    {

      $data = array(
        'question' => $this->input->post('question'),
        'reponse' => $this->input->post('reponse'),
        'categorie' => $this->input->post('categorie'),
        'statut' => $this->input->post('statut'),
        'created_at'=>date("Y-m-d H:i:s"),
      );
      $this->host_model->set('faq', $data);
      $this->faq_list();

    }
    else{
      $this->faq_view();
    //$this->back->view('blog/add-categorie');

    }
   
   }

       // liste des faq
   public function faq_list(){

   $data = $this->host_model->get_all('faq');
    //$cat = $this->host_model->get_all('categorie');

    $this->back->view('assistance/faq-list', array('liste'=>$data));
   }
   // Delete  faq
   public function delete_faq($id){
   $result = $this->host_model->delete($id, 'faq');
   $statusMsg = $result?'Suppression éffectuée avec succès.':'Une erreur s\'est produite lors de la supression' ;
   $this->session->set_flashdata('faqMessage',$statusMsg);
   //var_dump($dat);
  // $statut = $data->statut;
//   echo $statut;

  
   $this->faq_list();
   }

     // Delete  ticket
   public function delete_ticket($id){
   $result = $this->host_model->delete($id, 'ticket');
   $statusMsg = $result?'Suppression éffectuée avec succès.':'Une erreur s\'est produite lors de la supression' ;
   $this->session->set_flashdata('ticketMessage',$statusMsg);
   //var_dump($dat);
  // $statut = $data->statut;
//   echo $statut;

  
   $this->ticket_list();
   }

       // Delete  ticket
   public function delete_temoignage($id){
   $result = $this->host_model->delete($id, 'temoignages');
   $statusMsg = $result?'Suppression éffectuée avec succès.':'Une erreur s\'est produite lors de la supression' ;
   $this->session->set_flashdata('testiMessage',$statusMsg);
   //var_dump($dat);
  // $statut = $data->statut;
//   echo $statut;

  
   $this->temoignage_list();
   }

   // affiliate
   public function affiliate(){
    $data_where = array('code_parent'=>$this->ion_auth->user()->row()->code);
    $data = $this->host_model->getbyid_element('users', $data_where);
    //var_dump($data);
    $this->back->view('assistance/affiliate', array('liste'=> $data));
   }
}