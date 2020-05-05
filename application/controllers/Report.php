<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report extends CI_Controller
{
  public function index()
  {
    $session = $this->session->userdata('email');
    if ($session != null) {
      $data['user'] = $this->User_m->selectData('user', 'email', $session)->row_array();
      $data['title'] = 'Report Patient | Sistempakar.com';
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('templates/topbar', $data);
      $this->load->view('report/index');
      $this->load->view('templates/footer');
    } else {
      redirect('auth');
    }
  }
}
