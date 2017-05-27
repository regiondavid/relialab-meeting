<?php
class Xadmin extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->model('news_model');
  }

  //默认访问跳转登录
  public function index() {
    header('Location: /xadmin/login');
  }

  // 登录
  public function login() {
    
    //设置cookie

    $data['title'] = "login";
    $data['error'] = "";
    $this->load->view('templates/header');
    if(array_key_exists("action", $_POST) && $_POST['action']="post") {
      $login = $_POST;
      if($login['uname'] == "coder" && $login['upsd'] == "Admin123!") {
        setcookie('username',$_POST['uname'],time()+60*60*24*1);
        header('Location: /xadmin/show/12');
      }
      else {
        $data['error'] = "用户名或密码错误";
      }
    }
    $this->load->view('xadmin/loginform', $data);
    $this->load->view('templates/footer');
  }

  //展示文章详情
  public function show($id = NULL) {
    if(isset($_COOKIE['username']) && $_COOKIE['username'] == "coder"){
      $this->load->view('templates/header');
      $this->load->view('xadmin/sidebar');
      $data = $this->news_model->get_news($id);
      $this->load->view('xadmin/edit', $data);
      $this->load->view('templates/editorfooter');
    } else {
      header('Location: /xadmin/login');
    }
  }

  //发布新文章
  public function create() {
    if(isset($_COOKIE['username']) && $_COOKIE['username'] == "coder"){
      $this->load->helper('form');
      $this->load->library('form_validation');

      $this->form_validation->set_rules('title', 'Title');
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
    } else {
      header('Location: /xadmin/login');
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
    if(isset($_COOKIE['username']) && $_COOKIE['username'] == "coder"){
      $data['count'] = $this->news_model->get_notice_count() /2;
      $data['list'] = $this->news_model->get_notice_page($page);
      $data['ref'] = "admin";
      $this->load->view('templates/header');
      $this->load->view('xadmin/sidebar');
      $this->load->view('xadmin/notice-list', $data);
      $this->load->view('templates/pagination', $data);
      $this->load->view('templates/footer');
    } else {
      header('Location: /xadmin/login');
    }
  }

  //删除
  public function noticedel($id=NULL) {
    $this->news_model->delete_notice($id);
    $data['info'] = "删除";
    $this->load->view('xadmin/success', $data);
  }
}