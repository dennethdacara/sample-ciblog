<?php

class User_model extends CI_Model {
  public function __construct() {
    $this->load->database();
  }

  public function register($encrypted_pass) {
    $data = array(
      'name' => $this->input->post('name'),
      'email' => $this->input->post('email'),
      'username' => $this->input->post('username'),
      'password' => $encrypted_pass
    );

    // insert user
    return $this->db->insert('users', $data);
  }

  public function login($username, $password) {
    
    $this->db->where('username', $username);
    $this->db->where('password', $password);
    $result = $this->db->get('users');

    if ($result->num_rows() == 1) {
      return $result->row(0)->id;
    } else {
      return false;
    }

  }

  // custom validation
  public function check_username_exists($username) {
    $query = $this->db->get_where('users', array('username' => $username));

    if (empty($query->row_array())) {
      return true;
    } else {
      return false;
    }
  }

}