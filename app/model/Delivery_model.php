<?php

class Delivery_model {
  private $table = 'delivery';
  private $db;

  public function __construct() {
    $this->db = new Database;
  }

  public function getDeliveryByUser() {
    session_start();
    $id = $_SESSION['activeUser'];
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE user_id = :id');
    $this->db->bind(':id', $id['user_id']);
    return $this->db->resultSet();
  }
}
