<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Gestion_bd');
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function presentation()
	{
		$this->load->view('page2');
	}

	public function deboucher()
	{
		$this->load->view('page5');
	}

	public function contact()
	{
		$this->load->view('page3');
	}

	public function profile()
	{
		$mat = $this->session->userdata('matricule');
		$verife = $this->Gestion_bd->verife_utilisateur($mat);
		if ($verife > 0 ){
		if(isset($mat)){
			$this->profile_connecter($mat);
		}else{
			$this->load->view('page6');
		}
		}else{
			$this->load->view('page6');
		}
	}

	public function twinbook(){
		$mat = $this->session->userdata('matricule');
		if(isset($mat)){
		$data['programmes'] = $this->Gestion_bd->obtenir_programme();
		if (empty($data['programmes'])){
			$this->load->view('page10');
		}else{
			$this->load->view('page10',$data);
		}
		}else{
			redirect('profile');
		}
	}

	public function stage_emploi(){
		$mat = $this->session->userdata('matricule');
		if(isset($mat)){
		$data['stage_emploi'] = $this->Gestion_bd->get_stage_emploi();
		if (empty($data['stage_emploi'])){
			$this->load->view('page8');
		}else{
			$data['stages'] = $this->Gestion_bd->get_stage();
			$data['emplois'] = $this->Gestion_bd->get_emploi();
			$this->load->view('page8',$data);
		}
		}else{
			redirect('profile');
		}
	}

	public function stage($num){
		$mat = $this->session->userdata('matricule');
		if(isset($mat)){
		$data['stages'] = $this->Gestion_bd->get_stage_par_id($num);
		$this->load->view('page9',$data);
		}else{
			redirect('profile');
		}
	}

	public function emploi($num){
		$mat = $this->session->userdata('matricule');
		if(isset($mat)){
		$data['emplois'] = $this->Gestion_bd->get_emploi_par_id($num);
		$this->load->view('page9',$data);
		}else{
			redirect('profile');
		}
	}

	public function plus_information(){
		$nom = $this->input->post('nom');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$objet = $this->input->post('subject');
		$message = $this->input->post('message');
		$data = array(
			'nom'=>$nom,
			'phone'=>$phone,
			'email'=>$email,
			'objet'=>$objet,
			'message'=>$message
		);
		$this->Gestion_bd->plus_info($data);
		redirect('valider_info');
	}

	public function valider_info(){
		$this->load->view('page4');
	}

	private function profile_connecter($matricule){
		$mat = $this->session->userdata('matricule');
		if(isset($mat)){
			$data['utilisateur'] = $this->Gestion_bd->obtenir_autre($matricule);
			$this->load->view('page7',$data);
		}else{
			redirect('profile');
		}
	}

	public function photo(){
		$photo = $_FILES['photo']['name'];
		$matri = $this->input->post('identifiant');
		$data = array(
			'photo'=>$photo
		);
		$this->Gestion_bd->add_photo($data, $matri);

		$this->upload_document($matri);

		$this->db->select('matricule');
		$this->db->where('id', $matri);
		$query = $this->db->get('utilisateur');

		if ($query->num_rows() > 0) {
			$row = $query->row();
			$matricule = $row->matricule;
		}

		$this->profile_connecter($matricule);
	}

	private function upload_document($id)
	{
		$config['upload_path'] = './photo/';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['max_size'] = 15240;
		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('photo')) {
			$erreur = $this->upload->display_errors();
			echo ($erreur);
		} else {
			$image_data = $this->upload->data();
			$nom_fichier_image = $image_data['file_name'];
			$data = array(
				'photo' => $nom_fichier_image
			);
			$this->Gestion_bd->mise_a_jour_photo($id, $data);
		}

	}

	public function inscription(){
		$nom = $this->input->post('nom');
		$promo = $this->input->post('promotion');
		$matri = $this->input->post('matricule');
		$email = $this->input->post('email');
		$passe = $this->input->post('pwd');
		$genre = $this->input->post('gender');
		$data = array(
			'nom' => $nom,
			'promotion' => $promo,
			'matricule'=>$matri,
			'email'=>$email,
			'password'=>$passe,
			'genre'=>$genre
		);
		$erreur = $this->Gestion_bd->inscrire($data);
		if(isset($erreur)){
			$data['matricule_connu'] = "Matricule deja utiliser";
			$this->load->view('page6', $data);
		}else{
			redirect('valider');
		}

	}

	public function connexion(){
		$matricule = $this->input->post('matricule');
		$email = $this->input->post('email');
		$passe = $this->input->post('pwd2');
		$info = $this->Gestion_bd->obtenir($matricule);
		if (isset($info)) {
			if ($info['email'] == $email) {
				if ($info['password'] == $passe) {
					$this->session->set_userdata('matricule',$matricule);
					$this->profile_connecter($matricule);
				}else{
					$data['erreur_passe'] = "Erreur dans le mot de passe";
					$this->load->view('page6', $data);
				}
			} else {
				$data['erreur_mail'] = "Erreur dans l'adresse email";
				$this->load->view('page6', $data);
			}

		}else{
			$data['erreur_matricule'] = "matricule inconnu";
			$this->load->view('page6', $data);
		}
	}

	public function valider(){
		$this->load->view('page4a');
	}
}
