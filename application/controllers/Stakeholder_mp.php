<?php
if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Stakeholder_mp extends CI_Controller{

	function __construct(){
		parent::__construct();
		// $this->load->helper('url', 'english');

       $this->lang->load('btn','english');
       // $this->lang->load('btn','portuguese-brazilian');
       $this->lang->load('stakeholder_mp','english');
      //   $this->lang->load('stakeholder_mp','portuguese-brazilian');


       $this->load->helper('url');
       $this->load->model('Stakeholder_mp_model');
   }


   public function stakeholder_mp_form($project_id){
       $query['stake_mp'] = $this->Stakeholder_mp_model->getWithProject_id($project_id);
       $query['stakeholders'] = $this->Stakeholder_mp_model->get();
       $query['project_id'] = $project_id;
       $this->load->view('frame/header_view');
       $this->load->view('frame/sidebar_nav_view');
       $this->load->view('project/stakeholder_mp', $query);

   }

  public function insert(){
   $stake_mp['stakeholder_id'] = $this->input->post('stakeholder_id');
   $stake_mp['project_id'] = $this->input->post('project_id');
   $stake_mp['interest'] = $this->input->post('interest');
   $stake_mp['power'] = $this->input->post('power');
   $stake_mp['influence'] = $this->input->post('influence');
   $stake_mp['impact'] = $this->input->post('impact');
   $stake_mp['average'] = $this->input->post('average');
   $stake_mp['current_engagement'] = $this->input->post('current_engagement');
   $stake_mp['expected_engagement'] = $this->input->post('expected_engagement');
   $stake_mp['strategy'] = $this->input->post('strategy');
   $stake_mp['scope'] = $this->input->post('scope');
   $stake_mp['observation'] = $this->input->post('observation');

   $query = $this->Stakeholder_mp_model->insert($stake_mp);

   if($query){
            $this->load->view('frame/header_view');
            $this->load->view('frame/sidebar_nav_view');
            redirect(base_url() . 'Stakeholder_mp/stakeholder_mp_form/' . $stake_mp['project_id']);
        }
}

public function update(){
    $stake_mp['stakeholder_id'] = $this->input->post('stakeholder_id');
    $stake_mp['interest'] = $this->input->post('interest');
    $stake_mp['power'] = $this->input->post('power');
    $stake_mp['influence'] = $this->input->post('influence');
    $stake_mp['impact'] = $this->input->post('impact');
    $stake_mp['average'] = $this->input->post('average');
    $stake_mp['current_engagement'] = $this->input->post('current_engagement');
    $stake_mp['expected_engagement'] = $this->input->post('expected_engagement');
    $stake_mp['strategy'] = $this->input->post('strategy');
    $stake_mp['scope'] = $this->input->post('scope');
    $stake_mp['observation'] = $this->input->post('observation');

    $query = $this->Stakeholder_mp_model->insert_stake_mp($stake_mp);

   if($query){
            $this->load->view('frame/header_view');
            $this->load->view('frame/sidebar_nav_view');
            redirect(base_url() . 'Stakeholder_mp/stakeholder_mp_form/' . $stake_mp['project_id']);
        }
    }

    public function delete($id){
        $query = $this->Stakeholder_mp_model->deleteStake_mp($id);
    
        if($query){
                redirect(base_url('stakeholder_mp/stakeholder_mp_list').$stake_mp['project_id']);
            }
        }
    }
?>