<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Management extends CI_Controller
{
  public function index()
  {
    $session = [
      'email' => $this->session->userdata('email'),
      'level' => $this->session->userdata('level'),
      'status' => $this->session->userdata('status')
    ];
    if ($session['status'] == 'login') {
      if ($session['level'] == 1) {
        $data['user'] = $this->User_m->selectData('user', 'email', $session['email'])->row_array();
        $data['title'] = 'Management User | Sistempakar.com';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('management/index');
        $this->load->view('templates/footer');
      } else {
        redirect('auth');
      }
    }
  }
}
