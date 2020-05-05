<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{
  public function index()
  {
    $session = $this->session->userdata('email');
    if ($session != null) {
      $data['user'] = $this->User_m->selectData('user', 'email', $session)->row_array();
      $data['title'] = 'Headline News | Sistempakar.com';
      $apiIndo = file_get_contents('https://api.kawalcorona.com/indonesia');
      $apiIndoProv = file_get_contents('https://api.kawalcorona.com/indonesia/provinsi');
      $data['indonesia'] = json_decode($apiIndo, TRUE);
      $data['indoProv'] = json_decode($apiIndoProv, TRUE);
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('templates/topbar', $data);
      $this->load->view('news/index', $data);
      $this->load->view('templates/footer');
    } else {
      redirect('auth');
    }
  }
}
