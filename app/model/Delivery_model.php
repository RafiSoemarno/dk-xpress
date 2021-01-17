<?php

class Delivery_model {
  private $table = 'delivery';
  private $db;

  public function __construct() {
    $this->db = new Database;
  }

  public function getData() {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }

  public function getDataById($id) {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE delivery_id:id');
    $this->db->bind('id', $id); // use bind instead of directly in statement to avoid SQL Injection
    return $this->db->single();
  }
}
