<?php

class Account_model {
  private $table = 'user';
  private $activeUser;
  private $db;

  public function __construct() {
    $this->db = new Database;
  }

  public function userAuth() {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $this->db->query('SELECT user_id FROM '.$this->table.' WHERE email = :mail AND password = :pass');
    $this->db->bind(':mail', $email);
    $this->db->bind(':pass', $pass);
    return $this->db->single();
  }

  public function getUserById($id) {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE user_id:id');
    $this->db->bind('id', $id); // use bind instead of directly in statement to avoid SQL Injection
    return $this->db->single();
  }
}
