<?php
	class Delivery_acceptance_term_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function insert($delivery_acceptance_term){
			return $this->db->insert('delivery_acceptance_term', $delivery_acceptance_term);
		}

        public function getDeliveryTerm($id){
            $query = $this->db->get_where('delivery_acceptance_term',array('id'=>$id));
            return $query->row_array();
        }

        public function getAllDeliveryTerm($project_id){
            $query = $this->db->get_where('delivery_acceptance_term', array('delivery_acceptance_term.project_id'=>$project_id));
            return $query->result();
        }

        public function updateDeliveryTerm($delivery_acceptance_term, $id){
            $this->db->where('delivery_acceptance_term.id', $id);
            return $this->db->update('delivery_acceptance_term', $delivery_acceptance_term);
        }

        public function deleteDeliveryTerm($id){
            $this->db->where('delivery_acceptance_term.id', $id);
            return $this->db->delete('delivery_acceptance_term');
        }

        public function edit($id) {
            $query = $this->db->get_where('delivery_acceptance_term', array('delivery_acceptance_term.id'=>$id));
            return $query->result();
        }
	}
?>
