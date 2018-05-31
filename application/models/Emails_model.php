<?php

class Emails_model extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  public function save_mail($data){
    return $this->db->insert('emails', $data);
  }
}
 ?>
