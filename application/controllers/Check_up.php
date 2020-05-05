<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Check_up extends CI_Controller
{
  public function index()
  {
    $session = $this->session->userdata('email');
    if ($session != null) {
      $data['user'] = $this->User_m->selectData('user', 'email', $session)->row_array();
      $data['symptoms'] = $this->User_m->getDataSymptoms()->result_array();
      $data['title'] = 'Check Up | Sistempakar.com';
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('templates/topbar', $data);
      $this->load->view('check_up/index');
      $this->load->view('templates/footer');
    } else {
      redirect('auth');
    }
  }

  public function respons()
  {
  }
}
