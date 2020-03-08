<?php 

class Post_model extends CI_Model {
  public function __construct() {
    $this->load->database(); // load database libraries initially
  }

  public function get_posts($slug = FALSE) {
    if (!$slug) {
      // using active model
      $this->db->order_by('created_at', 'DESC');
      $query = $this->db->get('posts');

      return $query->result_array();
    }

    $query = $this->db->get_where('posts', array('slug' => $slug));
    return $query->row_array();
  }

  public function create_post() {
    $slug = url_title(strtolower($this->input->post('title')));

    $data = array(
      'title' => $this->input->post('title'),
      'slug' => $slug,
      'body' => $this->input->post('body')
    );

    return $this->db->insert('posts', $data);
  }

  public function update_post() {

    $slug = url_title(strtolower($this->input->post('title')));

    $data = array(
      'title' => $this->input->post('title'),
      'slug' => $slug,
      'body' => $this->input->post('body')
    );

    $this->db->where('id', $this->input->post('id'));
    return $this->db->update('posts', $data);
  }

  public function delete_post($id) {
    $this->db->where('id', $id);
    $this->db->delete('posts');
    return true;
  }

}