<?php
class Stakeholder_model extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function getWithProject_id($project_id){
		$query = $this->db->get_where('stakeholder', array('stakeholder.project_id'=>$project_id));
		return $query->result();
	}

	public function insert($stakeholder_register){
		return $this->db->insert('stakeholder', $stakeholder_register);
	}
}
?>