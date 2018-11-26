<?php
if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Stakeholder_mp_model extends CI_Model{

	function __construct() {
		parent::__construct();
	}

	public function getWithProject_id($project_id){
		$query = $this->db->get_where('stakeholder_mp', array('stakeholder_mp.project_id'=>$project_id));
		return $query->result();
	}

	public function insert($stakeholder_mp){
		return $this->db->insert('stakeholder_mp', $stakeholder_mp);
	}

	public function get(){
		$query = $this->db->get_where('stakeholder');
		return $query->result();
	}

	public function deleteStake_mp($id){
			$this->db->where('stakeholder_mp.stakeholder_mp_id', $id);
			return $this->db->delete('stakeholder_mp');
		}
}
?>