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

	public function getWithStakeholder($project_id){
		//$project_idq = $project_id;
		//$this->db->select('stakeholder_mp.*, stakeholder.name');
		//$this->db->from('stakeholder_mp');
		//$this->db->join('stakeholder', 'stakeholder_mp.stakeholder_id = stakeholder.stakeholder_id');
		//$this->db->join('project', 'stakeholder_mp.project_id = project.project_id');
		//$this->db->where('stakeholder_mp.project_id', $project_id);
		//$query = $this->db->get();
		//return $this->db->result();

		$query = $this->db->query("SELECT STAKEHOLDER_MP.*, STAKEHOLDER.name FROM STAKEHOLDER_MP
			INNER JOIN STAKEHOLDER ON STAKEHOLDER_MP.STAKEHOLDER_ID = STAKEHOLDER.STAKEHOLDER_ID
			INNER JOIN PROJECT ON STAKEHOLDER_MP.PROJECT_ID = PROJECT.PROJECT_ID
			WHERE STAKEHOLDER_MP.PROJECT_ID = PROJECT.PROJECT_ID");

		return $query->result();		
	}

	public function insert($stakeholder_mp){
		return $this->db->insert('stakeholder_mp', $stakeholder_mp);
	}

	public function get($id){
		$query = $this->db->query("SELECT STAKEHOLDER_MP.*, STAKEHOLDER.name FROM STAKEHOLDER_MP
			INNER JOIN STAKEHOLDER ON STAKEHOLDER_MP.STAKEHOLDER_ID = STAKEHOLDER.STAKEHOLDER_ID
			INNER JOIN PROJECT ON STAKEHOLDER_MP.PROJECT_ID = PROJECT.PROJECT_ID
			WHERE STAKEHOLDER_MP.PROJECT_ID = PROJECT.PROJECT_ID AND
			STAKEHOLDER_MP.STAKEHOLDER_MP_ID = $id");

		return $query->result();
	}

	public function delete($id){
		$this->db->where('stakeholder_mp.stakeholder_mp_id', $id);
		return $this->db->delete('stakeholder_mp');
	}

	public function update($stakeholder_mp, $stakeholder_mp_id){
		$this->db->where('stakeholder_mp.stakeholder_mp_id', $stakeholder_mp_id);
		return $this->db->update('stakeholder_mp', $stakeholder_mp);
	}

	public function getStakeholders($stakeholder_mp_id){
		$this->db->where('stakeholder_mp.stakeholder_mp_id', $id);
		return $query->result();
	}

}
?>