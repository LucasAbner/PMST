<?php
	class Scope_specification_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function getAll(){
			$query = $this->db->get('scope_specification');
			return $query->result(); 
		}

		public function insert($scope_specification){
			return $this->db->insert('scope_specification', $scope_specification);
		}

		//public function deletecustos($id){
		//	$this->db->where('scope_specification.project_id', $id);
		//	return $this->db->delete('scope_specification');
		//}

		public function update($scope_specification, $id){
			$this->db->where('scope_specification.project_id', $id);
			return $this->db->update('scope_specification', $scope_specification);
		}

	}
?>