<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

  
  public function index()
  {
    $this->load->view('Master/index');
  }

  public function create_profile()
  {
    $this->load->view('Master/create_profile');
  }

  public function all_profile()
  {
    $this->load->view('Master/all_profile');
  }

  public function profile_history()
  {
    $this->load->view('Master/profile_history');
  }

  public function incomplete_profile()
  {
    $this->load->view('Master/incomplete_profile');
  }

  public function approve_profile()
  {
    $this->load->view('Master/approve_profile');
  }

  public function delete_account()
  {
    $this->load->view('Master/delete_account');
  }

  public function complete_profile()
  {
    $this->load->view('Master/complete_later');
  }

  public function business_analysis()
  {
    $this->load->view('Master/business_analysis');
  }

  public function credit()
  {
    $this->load->view('Master/credit');
  }

  public function edit_profile()
  {
    $this->load->view('Master/edit_profile');
  }

  public function plan()
  {
    $this->load->view('Master/plan');
  }
  public function edit_plan()
  {
    $this->load->view('Master/edit_plan');
  }

  public function enquiries()
  {
    $this->load->view('Master/enquiries');
  }
}
