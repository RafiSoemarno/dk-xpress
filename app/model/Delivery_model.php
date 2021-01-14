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
}
