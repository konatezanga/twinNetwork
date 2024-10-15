<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Administrateur extends CI_Controller
{

	public function __construct() {
        parent::__construct();
		$this->load->model('Gestion_bd');
    }

	public function index()
	{
		$this->load->view('admin_login');
	}

	public function connexion(){
		$email = $this->input->post('email');
		$passe = $this->input->post('password');
		$info = (array) $this->Gestion_bd->connecter();
		if (isset($info['email'])){
			if ($info['email'] == $email) {
				if ($info['password'] == $passe) {
					$this->session->set_userdata('user_mail',$email);
					redirect('admin/espace');
				}else{
					$data['erreur_passe'] = "Erreur dans le mot de passe";
					$this->load->view('admin_login', $data);
				}
			} else {
				$data['erreur_mail'] = "adresse email inconnu";
				$this->load->view('admin_login', $data);
			}
		}
		$data['erreur_mail'] = "adresse email inconnu";
		$this->load->view('admin_login', $data);
		}

	public function admin()
	{
		$mail = $this->session->userdata('user_mail');
		if(isset($mail)){
			$this->load->view('index_admin');
		}else{
			redirect('admin');
		}
	}



	public function delete_user($id){
		$this->Gestion_bd->supprimer_user($id);
		redirect('admin/user');
	}

	public function accepte_user($id){
		$this->Gestion_bd->accepte_user($id);
		redirect('admin/user');
	}

	public function user(){
		$mail = $this->session->userdata('user_mail');
		if(isset($mail)) {
			$data['utilisateurs'] = $this->Gestion_bd->user();
			$this->load->view('user', $data);
		}else{
				redirect('admin');
			}
	}


	public function liste(){
		$mail = $this->session->userdata('user_mail');
		if(isset($mail)) {
		$data['books']=$this->Gestion_bd->obtenir_programme();
		$this->load->view('twinbook_liste',$data);
		}else{
			redirect('admin');
		}
	}

	public function contact(){
		$mail = $this->session->userdata('user_mail');
		if(isset($mail)) {
		$data['contacts'] = $this->Gestion_bd->information();
		$this->load->view('contact',$data);
		}else{
		redirect('admin');
		}
	}

	public function message($id){
		$mail = $this->session->userdata('user_mail');
		if(isset($mail)) {
		$data['messages'] = $this->Gestion_bd->information_par_id($id);
		$this->load->view('messages',$data);
		}else{
			redirect('admin');
		}
	}

	public function page_twinbook(){
		$mail = $this->session->userdata('user_mail');
		if(isset($mail)) {
		$this->load->view('twinbook');
		}else{
			redirect('admin');
		}
	}

	public function add_twinbook(){
		$this->load->view('ajouter');
	}

	public function suppression($id,$mat){
		$data = array(
			$mat=>null,
		);
		$this->Gestion_bd->supprimer($id,$data);
		redirect('admin/twinbook/liste');
	}

	public function stage_emploi(){
		$mail = $this->session->userdata('user_mail');
		if(isset($mail)) {
		$data['stage_emploi'] = $this->Gestion_bd->get_stage_emploi();
		if (empty($data['stage_emploi'])){
			$this->load->view('stage_emploi_liste');
		}else{
			$data['stages'] = $this->Gestion_bd->get_stage();
			$data['emplois'] = $this->Gestion_bd->get_emploi();
			$this->load->view('stage_emploi_liste',$data);
		}
		}else{
			redirect('admin');
		}
	}

	public function valider(){
		$this->load->view('reception');
	}

	public function add_stage_emploi(){
		$this->load->view('stage_emploi');
	}

	public function valide_stage_emploi(){
		$salaire = $this->input->post('salary');
		$data = array(
			'nom_entreprise'=>$this->input->post('nom'),
			'poste'=>$this->input->post('poste'),
			'contrat'=>$this->input->post('ContratType'),
			'temps_travail'=>$this->input->post('worktime'),
			'salaire'=>(!empty($salaire))?$this->input->post('salary'):null,
			'delai'=>$this->input->post('offerDeadline'),
			'description_entreprise'=>$this->input->post('message1'),
			'description_poste'=>$this->input->post('message2'),
			'reception'=>$this->input->post('applicationMode'),
			'mail_entreprise'=>$this->input->post('contact'),
		);
		$this->Gestion_bd->insert_stage($data);
		redirect('admin/stage_emploi/add/valider');
	}

	public function stage($num){
		$mat = $this->session->userdata('user_mail');
		if(isset($mat)){
			$data['stages'] = $this->Gestion_bd->get_stage_par_id($num);
			$this->load->view('page9a',$data);
		}else{
			redirect('admin');
		}
	}

	public function emploi($num){
		$mat = $this->session->userdata('user_mail');
		if(isset($mat)){
			$data['emplois'] = $this->Gestion_bd->get_emploi_par_id($num);
			$this->load->view('page9a',$data);
		}else{
			redirect('admin');
		}
	}

	public function insertion(){
		$data = array(
			'cours'=> $_FILES['doc1']['name'],
			'exercices'=> $_FILES['doc2']['name'],
			'corrections'=> $_FILES['doc3']['name'],
		);

		$id = $this->Gestion_bd->inserer($data);

		$this->upload_document($id);
		redirect('admin/twinbook/liste');

	}

	private function upload_document($id){
		$config['upload_path'] = './programme/';
		$config['allowed_types'] = 'pdf';
		$config['max_size'] = 15480;
		$this->load->library('upload', $config);

		$document_names = array();

		for ($i = 1; $i <= 3; $i++){
			$field_name = 'doc'.sprintf("%1d", $i);

			$_FILES['document']['name'] = $_FILES[$field_name]['name'];
			$_FILES['document']['type'] = $_FILES[$field_name]['type'];
			$_FILES['document']['tmp_name'] = $_FILES[$field_name]['tmp_name'];
			$_FILES['document']['error'] = $_FILES[$field_name]['error'];
			$_FILES['document']['size'] = $_FILES[$field_name]['size'];


			if(!$this->upload->do_upload('document')){
				$erreur = $this->upload->display_errors();
				echo ($erreur);
			}else{
				$document_data = $this->upload->data();
				$document_name = $document_data['file_name'];
				$document_names[] = $document_name;
			}
		}
			if(!empty($document_names)){
				$data = array('cours' => $document_names[0], 'exercices' => $document_names[1], 'corrections' => $document_names[2]);
				$this->Gestion_bd->mise_a_jour($id, $data);
			}
	}




}
