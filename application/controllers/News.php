<?php
class News extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->model('news_model');
    $this->load->helper('url_helper');
  }

  public function index($page=1) {
    $data['news'] = $this->news_model->get_news();
    $data['count'] = $this->news_model->get_notice_count() /2;
    $data['list'] = $this->news_model->get_notice_page($page);
    $data['ref'] = "index";

    $this->load->view('templates/header');
    $this->load->view('templates/index-header');
    $this->load->view('news/index', $data);
    $this->load->view('news/notice', $data);
    $this->load->view('templates/pagination', $data);
    $this->load->view('templates/index-footer');
    $this->load->view('templates/footer');
  }

  //展示文章
  public function view($id) {

    $data['news_item'] = $this->news_model->get_news($id);

    if(empty($data['news_item'])) {
      show_404();
    }

    $this->load->view('templates/header');
    $this->load->view('templates/index-header');
    $this->load->view('news/view', $data);
    $this->load->view('templates/index-footer');
    $this->load->view('templates/footer');
  }

  public function notice($page=1) {
    $data['count'] = $this->news_model->get_notice_count() /2;
    $data['list'] = $this->news_model->get_notice_page($page);
    $data['ref'] = "notice";

    $this->load->view('templates/header');
    $this->load->view('templates/index-header');
    $this->load->view('news/notice', $data);
    $this->load->view('templates/pagination', $data);
    $this->load->view('templates/index-footer');
    $this->load->view('templates/footer');
  }

}
