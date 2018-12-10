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
   $this->load->model('Stakeholder_model');
 }

 public function list($project_id){
   $query['stakeholder_mp'] = $this->Stakeholder_mp_model->getWithProject_id($project_id);
   $query['stakeholder'] = $this->Stakeholder_mp_model->get();
   $query['project_id'] = $project_id;
   $this->load->view('frame/header_view');
   $this->load->view('frame/sidebar_nav_view');
   $this->load->view('project/stakeholder/stakeholder_mp/list', $query);
 }

 public function new($project_id){
  $query['stakeholder_mp'] = $this->Stakeholder_mp_model->getWithProject_id($project_id);
  $query['stakeholder'] = $this->Stakeholder_model->getWithProject_id($project_id);
  $query['project_id'] = $project_id;
  $this->load->view('frame/header_view');
  $this->load->view('frame/sidebar_nav_view'); 
  $this->load->view('project/stakeholder/stakeholder_mp/new', $query);
}

public function edit($stakeholder_mp){
  $query['stakeholder_mp'] = $this->stakeholder_mp_model->get($stakeholder_mp);
  $query['project_id'] = $this->input->post('project_id');
  $this->load->view('frame/header_view');
  $this->load->view('frame/sidebar_nav_view'); 
  $this->load->view('project/stakeholder/stakeholder_mp/edit', $query);
}

public function insert(){
 $stakeholder_mp['stakeholder_id'] = $this->input->post('stakeholder_id');
 $stakeholder_mp['project_id'] = $this->input->post('project_id');
 $stakeholder_mp['interest'] = $this->input->post('interest');
 $stakeholder_mp['power'] = $this->input->post('power');
 $stakeholder_mp['influence'] = $this->input->post('influence');
 $stakeholder_mp['impact'] = $this->input->post('impact');
 $stakeholder_mp['average'] = $this->input->post('average');
 $stakeholder_mp['current_engagement'] = $this->input->post('current_engagement');
 $stakeholder_mp['expected_engagement'] = $this->input->post('expected_engagement');
 $stakeholder_mp['strategy'] = $this->input->post('strategy');
 $stakeholder_mp['scope'] = $this->input->post('scope');
 $stakeholder_mp['observation'] = $this->input->post('observation');

 $query = $this->Stakeholder_mp_model->insert($stakeholder_mp);

 if($query){
  $this->load->view('frame/header_view');
  $this->load->view('frame/sidebar_nav_view');
  redirect(base_url() . 'Stakeholder_mp/list/' . $stakeholder_mp['project_id']);
}
}

public function update(){
  $stakeholder_mp['stakeholder_id'] = $this->input->post('stakeholder_id');
  $stakeholder_mp['interest'] = $this->input->post('interest');
  $stakeholder_mp['power'] = $this->input->post('power');
  $stakeholder_mp['influence'] = $this->input->post('influence');
  $stakeholder_mp['impact'] = $this->input->post('impact');
  $stakeholder_mp['average'] = $this->input->post('average');
  $stakeholder_mp['current_engagement'] = $this->input->post('current_engagement');
  $stakeholder_mp['expected_engagement'] = $this->input->post('expected_engagement');
  $stakeholder_mp['strategy'] = $this->input->post('strategy');
  $stakeholder_mp['scope'] = $this->input->post('scope');
  $stakeholder_mp['observation'] = $this->input->post('observation');

  $query = $this->Stakeholder_mp_model->update($stakeholder_mp);

  if($query){
    $this->load->view('frame/header_view');
    $this->load->view('frame/sidebar_nav_view');
    redirect(base_url() . 'Stakeholder_mp/list/' . $stakeholder_mp['project_id']);
  }
}

public function delete($id){
  $stakeholder_mp = $this->Stakeholder_mp_model->delete($id);
  if($stakeholder_mp){
    redirect(base_url('stakeholder_mp/list').$stakeholder_mp['project_id']);
  }
}
}
?>