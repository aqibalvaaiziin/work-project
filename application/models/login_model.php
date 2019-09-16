<?php
  
  defined('BASEPATH') OR exit('No direct script access allowed');
  
  class login_model extends CI_Model {
  
    function login($username,$password){
      $this->db->object('username,password,level');
      $this->db->from('user');
      $this->db->where('username', $username);
      $this->db->where('password', $password);
      $this->db->limit(1);
    }
  
  }
  
  /* End of file login_model.php */
  
?>