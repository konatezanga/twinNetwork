<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gestion_bd extends CI_Model{

	/*admin*/
	public function information(){
		$query = $this->db->get('information');
		return $query->result_array();
	}

	public function information_par_id($num){
		$query = $this->db->where(array('id'=>$num))->get('information');
		return $query->result_array();
	}

	public function supprimer($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('programmes', $data);
	}

	public function supprimer_user($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('utilisateur');
	}

	public function accepte_user($id)
	{
		$this->db->where('id', $id);
		$this->db->update('utilisateur', array('statut' => 'active'));
	}

	public function connecter(){
		$query = $this->db->get('administrateur');
		return $query->row();
	}

	public function insert_stage($data){
		$this->db->insert('stage_emploi', $data);
	}

	public function user(){
		$query = $this->db->get('utilisateur');
		return $query->result_array();
	}


	/*user*/
	public function inserer($data){
		$this->db->insert('programmes', $data);
		return $this->db->insert_id();
	}

	public function obtenir_programme(){
		$query = $this->db->get('programmes');
		return $query->result_array();
	}

	public function verife_utilisateur($matricule){
		$query = $this->db->where(array('matricule'=>$matricule,'statut'=>'active'))->get('utilisateur');
		return $query->num_rows();
	}

	public function get_stage_emploi(){
		$query = $this->db->get('stage_emploi');
		if ($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return null;
		}
	}

	public function get_stage(){
		$query = $this->db->where(array('contrat'=>'Stage'))->get('stage_emploi');
		return $query->result_array();
	}
	public function get_stage_par_id($num){
		$query = $this->db->where(array('id'=>$num))->get('stage_emploi');
		return $query->result_array();
	}

	public function get_emploi(){
		$query = $this->db->where_not_in(array('contrat'=>'Stage'))->get('stage_emploi');
		return $query->result_array();
	}
	public function get_emploi_par_id($num){
		$query = $this->db->where(array('id'=>$num))->get('stage_emploi');
		return $query->result_array();
	}

	public function mise_a_jour($id,$data)
    {
        $this->db->where('id', $id);
        $this->db->update('programmes', $data);
    }

	public function add_photo($data){
		$this->db->update('utilisateur', $data);
	}

	public function mise_a_jour_photo($id,$data)
	{
		$this->db->where('id', $id);
		$this->db->update('utilisateur', $data);
	}

	public function inscrire($data){
		try {
			$this->db->insert('utilisateur', $data);
		} catch (Exception $e){
			if ($e instanceof \CI_DB_query_builder){
				$error = $this->db->error();
				return "Erreur : " . $error['message'];
			}
		}

	}

	public function plus_info($data){
		$this->db->insert('information',$data);
	}

	public function obtenir($matricule){
		$data = array('matricule'=>$matricule);
		$query = $this->db->where($data)->get('utilisateur');
		return $query->row_array();

	}

	public function obtenir_autre($matricule){
		$data = array('matricule'=>$matricule);
		$query = $this->db->where($data)->get('utilisateur');
		return $query->result_array();

	}


}


