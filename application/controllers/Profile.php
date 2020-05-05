<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
  public function index()
  {
    $session = $this->session->userdata('email');
    if ($session != null) {
      $data['user'] = $this->User_m->selectData('user', 'email', $session)->row_array();
      $data['title'] = 'Profile | Sistempakar.com';
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('templates/topbar', $data);
      $this->load->view('profile/index');
      $this->load->view('templates/footer');
    } else {
      redirect('auth');
    }
  }

  public function edit()
  {
    $this->form_validation->set_rules('name', 'Name', 'trim|required');

    if ($this->form_validation->run() == false) {
      $session = $this->session->userdata('email');
      $data['user'] = $this->User_m->selectData('user', 'email', $session)->row_array();
      $data['title'] = 'Edit profile | Sistempakar.com';
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('templates/topbar', $data);
      $this->load->view('profile/edit', $data);
      $this->load->view('templates/footer');
    } else {
      $name = $this->input->post('name');
      $email = $this->session->userdata('email');
      $config['upload_path']          = './assets/img/profile/';
      $config['allowed_types']        = 'gif|jpg|png|jpeg';
      $config['max_size']             = 2048;
      $this->upload->initialize($config);
      if ($this->upload->do_upload('image')) {
        $oldImage = $this->User_m->selectData('user', 'email', $email)->row_array();
        if ($oldImage['image'] != 'default.jpg') {
          unlink(FCPATH . 'assets/img/profile/' . $oldImage['image']);
        }
        $newImage = $this->upload->data('file_name');
        $params = [
          'name' => $name,
          'email' => $email,
          'image' => $newImage
        ];
        $this->User_m->updateData('user', $params, 'email', $email);
        $this->session->set_flashdata(
          'message',
          '<div class="alert alert-success text-center" role="alert">Updated success</div>'
        );
        redirect('profile');
      } else {
        echo $this->upload->display_errors();
      }
    }
  }
}
