<?php
class News_model extends CI_Model {

  public function __construct() {
    $this->load->database();
  }

  //获取每篇文章
  public function get_news($id = 12) {
    $query = $this->db->get_where('news', array('id' => $id));
    return $query->row_array();
  }

  //根据type

  //发布一篇文章
  public function set_news() {

    $data = array(
      'title' => $this->input->post('title'),
      'text' => $this->input->post('text'),
      'type' => $this->input->post('type')
    );

    return $this->db->insert('news', $data);
  }

  //更新一篇文章
  public function update_news($id=NULL, $news) {
    $data = array(
      'title' => $news['title'],
      'text' => $news['text'],
      'publishtime' => date('Y-m-d H:i:s')
    );
    $this->db->where('id', $id);
    $this->db->update('news', $data);
  }

  //获取总页数
  public function get_notice_count() {
    $this->db->where('type', 'notice');
    $this->db->from('news');
    $count = $this->db->count_all_results();
    return $count;
  }

  //获取分页
  public function get_notice_page($page=1) {
    $this->db->select('id, title, publishtime');
    $this->db->where('type', 'notice');
    $this->db->from('news');
    $this->db->limit(2,($page-1)*2);
    $query = $this->db->get();
    return $query->result_array();
  }

  //删除一篇文章
  public function delete_notice($id=NULL) {
    $this->db->delete('news', array('id'=>$id));
  }

}