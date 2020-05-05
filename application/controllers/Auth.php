<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

  public function index()
  {
    if ($this->session->userdata('email') != null) {
      $this->session->set_flashdata(
        'message',
        '<div class="alert alert-danger" role="alert">Please logout to leave this page!</div>'
      );
      redirect('dashboard');
    } else {
      $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
      $this->form_validation->set_rules('password', 'Password', 'trim|required');

      if ($this->form_validation->run() == false) {
        $data['title'] = 'Sing-in | Sistempakar.com';
        $this->load->view('templates/auth/header', $data);
        $this->load->view('auth/login/index');
        $this->load->view('templates/auth/footer');
      } else {
        $email = $this->input->post('email', true);
        $password = $this->input->post('password', true);
        $user = $this->User_m->selectData('user', 'email', $email)->row_array();

        //jika user ada
        if ($user) {
          // cek jika passwordnya benar
          if (password_verify($password, $user['password'])) {
            $data = [
              'email' => $user['email'],
              'level' => $user['level'],
              'status' => 'login'
            ];
            $this->session->set_userdata($data);
            $this->session->set_flashdata(
              'message',
              '<div class="alert alert-danger" role="alert">Congratulation, sing-in success!</div>'
            );
            if ($user['level'] == 1) {
              redirect('dashboard');
            } else {
              redirect('news');
            }
          } else {
            $this->session->set_flashdata(
              'message',
              '<div class="alert alert-danger text-center" role="alert">Wrong password!</div>'
            );
            redirect('auth');
          }
        } else {
          $this->session->set_flashdata(
            'message',
            '<div class="alert alert-danger text-center" role="alert">Your email not registered!</div>'
          );
          redirect('auth');
        }
      }
    }
  }





  public function registration()
  {
    if ($this->session->userdata('email') != null) {
      $this->session->set_flashdata(
        'message',
        '<div class="alert alert-danger" role="alert">Please logout to leave this page!</div>'
      );
      redirect('dashboard');
    } else {
      $this->form_validation->set_rules('fullname', 'Fullname', 'required|trim');
      $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
        'is_unique' => 'This %s already exists!'
      ]);
      $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
        'matches' => 'This field %s not matches!',
        'min_length' => 'This field %s min length 3!'
      ]);
      $this->form_validation->set_rules('password2', 'Password', 'matches[password1]');

      if ($this->form_validation->run() == false) {
        $data['title'] = 'Sing-up | Sistempakar.com';
        $this->load->view('templates/auth/header', $data);
        $this->load->view('auth/registration/index');
        $this->load->view('templates/auth/footer');
      } else {
        $data = [
          'name' => htmlspecialchars($this->input->post('fullname', true)),
          'email' => htmlspecialchars($this->input->post('email', true)),
          'password' => password_hash($this->input->post('password1', true), PASSWORD_DEFAULT),
          'image' => 'default.jpg',
          'level' => 2,
          'date_create' => time()
        ];
        $this->User_m->insertData('user', $data);
        $this->session->set_flashdata(
          'message',
          '<div class="alert alert-success text-center" role="alert">Registration account success. Please sing-in!</div>'
        );
        redirect('auth');
      }
    }
  }




  public function logout()
  {
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('level');
    $this->session->set_flashdata(
      'message',
      '<div class="alert alert-success text-center" role="alert">Logout success!</div>'
    );
    redirect('auth');
  }
}
