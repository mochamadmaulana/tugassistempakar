<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Disease extends CI_Controller
{
  public function index()
  {
    $session = $this->session->userdata('email');
    if ($session != null) {
      $data['user'] = $this->User_m->selectData('user', 'email', $session)->row_array();
      $data['disease'] = $this->User_m->selectData('disease')->result_array();
      $data['title'] = 'Disease List | Sistempakar.com';
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('templates/topbar', $data);
      $this->load->view('disease/index', $data);
      $this->load->view('templates/footer');
    } else {
      redirect('auth');
    }
  }

  public function detail($id)
  {
    $session = $this->session->userdata('email');
    $data['user'] = $this->User_m->selectData('user', 'email', $session)->row_array();
    $data['disease'] = $this->User_m->selectData('disease', 'id', $id)->row_array();
    $data['diagnosis'] = $this->User_m->diagnosis($id)->result_array();
    $data['title'] = 'Form Add Disease | Sistempakar.com';
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar', $data);
    $this->load->view('disease/detail', $data);
    $this->load->view('templates/footer');
  }

  public function add()
  {
    $this->form_validation->set_rules('name', 'Disease Name', 'required|trim');
    if ($this->form_validation->run() == false) {
      $session = $this->session->userdata('email');
      $data['user'] = $this->User_m->selectData('user', 'email', $session)->row_array();
      $data['disease'] = $this->User_m->selectData('disease')->result_array();
      $data['title'] = 'Form Add Disease | Sistempakar.com';
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('templates/topbar', $data);
      $this->load->view('disease/add', $data);
      $this->load->view('templates/footer');
    } else {
      $data = [
        'name' => $this->input->post('name')
      ];
      $this->User_m->insertData('disease', $data);
      $this->session->set_flashdata(
        'message',
        '<div class="alert alert-success text-center" role="alert">Added disease success!</div>'
      );
      redirect('disease');
    }
  }

  public function edit($id)
  {
    $session = $this->session->userdata('email');
    $data['user'] = $this->User_m->selectData('user', 'email', $session)->row_array();
    $data['disease'] = $this->User_m->selectData('disease', 'id', $id)->row_array();
    $data['title'] = 'Form Add Disease | Sistempakar.com';
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar', $data);
    $this->load->view('disease/edit', $data);
    $this->load->view('templates/footer');
  }

  public function update()
  {
    $id = $this->input->post('id');
    $name = $this->input->post('name');
    $this->form_validation->set_rules('name', 'Disease Name', 'required|trim');
    if ($this->form_validation->run() == FALSE) {
      $session = $this->session->userdata('email');
      $data['user'] = $this->User_m->selectData('user', 'email', $session)->row_array();
      $data['disease'] = $this->User_m->selectData('disease', 'id', $id)->row_array();
      $data['title'] = 'Form Add Disease | Sistempakar.com';
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('templates/topbar', $data);
      $this->load->view('disease/edit', $data);
      $this->load->view('templates/footer');
    } else {
      $data = [
        'name' => $name
      ];
      $this->User_m->updateData('disease', $data, 'id', $id);
      $this->session->set_flashdata(
        'message',
        '<div class="alert alert-success text-center" role="alert">Updated disease success!</div>'
      );
      redirect('disease');
    }
  }

  public function delete($id)
  {
    $data = [
      'id' => $id
    ];
    $this->User_m->deleteData('disease', $data);
    $this->session->set_flashdata(
      'message',
      '<div class="alert alert-danger text-center" role="alert">Deleted disease success!</div>'
    );
    redirect('disease');
  }
}
