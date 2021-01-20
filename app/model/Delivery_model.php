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

  private function processPicture() {
    $target_dir = 'upload/';
    $target_file = $target_dir . basename($_FILES["picture"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file);
    return $target_file;
  }

  public function addOrder() {
    session_start();
    $user_id = $_SESSION['activeUser']['user_id'];
    $delivery_id = $_POST['delivery_id'];
    $description = $_POST['description'];
    $status = 'Processing';
    $destination_address = $_POST['destination'];
    $destination_detail = $_POST['detail'];
    $item_count = $_POST['item_count'];
    $gross_weight = $_POST['weight'];
    $item_type = $_POST['item_type'];
    $location = $_POST['location'];
    $picture = $this->processPicture();
    $delivery_type = $_POST['delivery_type'];
    $this->db->query('INSERT INTO '.$this->table.' (delivery_id, user_id, description, picture, status, destination_address, destination_detail, item_count, gross_weight, item_type, location, delivery_type) VALUES (:delivery_id, :user_id, :description, :picture, :status, :destination_address, :destination_detail, :item_count, :gross_weight, :item_type, :location, :delivery_type)');
    $this->db->bind(':delivery_id', $delivery_id);
    $this->db->bind(':user_id', $user_id);
    $this->db->bind(':description', $description);
    $this->db->bind(':picture', $picture);
    $this->db->bind(':status', $status);
    $this->db->bind(':destination_address', $destination_address);
    $this->db->bind(':destination_detail', $destination_detail);
    $this->db->bind(':item_count', $item_count);
    $this->db->bind(':gross_weight', $gross_weight);
    $this->db->bind(':item_type', $item_type);
    $this->db->bind(':location', $location);
    $this->db->bind(':delivery_type', $delivery_type);
    $this->db->execute();
  }
}
