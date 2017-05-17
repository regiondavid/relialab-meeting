<?php
class Xadmin extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->model('news_model');
  }

  // 登录
  public function login() {

    $data['title'] = "login";
    $data['error'] = "";
    $this->load->view('templates/header');
    if(array_key_exists("action", $_POST) && $_POST['action']="post") {
      $login = $_POST;
      if($login['uname'] != "coder") {
        $data['error'] = "用户名或密码错误";
      }
      else {
        header('Location: http://localhost:3333/xadmin/show/12');
      }
    }
    $this->load->view('xadmin/loginform', $data);
    $this->load->view('templates/footer');
  }

  //展示文章详情
  public function show($id = NULL) {
    $this->load->view('templates/header');
    $this->load->view('xadmin/sidebar');
    $data = $this->news_model->get_news($id);
    $this->load->view('xadmin/edit', $data);
    $this->load->view('templates/editorfooter');
  }

  //发布新文章
  public function create() {
    $this->load->helper('form');
    $this->load->library('form_validation');

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('text', 'Text', 'required');

    $data['info'] = "发布";

    if($this->form_validation->run() === FALSE) {
      $this->load->view('templates/header');
      $this->load->view('xadmin/sidebar');
      $this->load->view('xadmin/create');
      $this->load->view('templates/editorfooter');
    }
    else {
      $this->news_model->set_news();
      $this->load->view('xadmin/success', $data);
    }
  }

  //更改文章
  public function update($id=NULL) {
    $data['info'] = "修改";
    $this->news_model->update_news($id, $_POST);
    $this->load->view('xadmin/success', $data);
  }

  //通知管理
  public function notice($page=1) {
    $data['count'] = $this->news_model->get_notice_count() /2;
    $data['list'] = $this->news_model->get_notice_page($page);
    $data['ref'] = "admin";
    $this->load->view('templates/header');
    $this->load->view('xadmin/sidebar');
    $this->load->view('xadmin/notice-list', $data);
    $this->load->view('templates/pagination', $data);
    $this->load->view('templates/footer');
  }

  //删除
  public function noticedel($id=NULL) {
    $this->news_model->delete_notice($id);
    $data['info'] = "删除";
    $this->load->view('xadmin/success', $data);
  }
}