<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
        // $data['users'] = $this->User_m->selectData('user')->row();
        $data['title'] = 'Dashboard | Sistempakar.com';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('templates/footer');
      } else {
        redirect('news');
      }
    } else {
      redirect('auth');
    }
  }
}
