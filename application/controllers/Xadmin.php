<?php
class Xadmin extends CI_Controller {
  public function login() {

    $data['title'] = "login";

    $this->load->view('templates/header', $data);
    $this->load->view('login/loginform');
    // $this->load->view('login/show', $_POST);
  }

  public function show() {
    // echo var_dump($_POST);
    $data['name'] = $_POST['name'];
    $this->load->view('login/show', $data);
  }
}