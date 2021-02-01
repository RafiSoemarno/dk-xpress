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
      $this->db->query('SELECT user_id, password FROM '.$this->table.' WHERE email = :mail');
      $this->db->bind(':mail', $email);
      $result = $this->db->single();
      if(!empty($result)) {
        if(password_verify($pass, $result['password'])) {
          return $result['user_id'];
        }
      }
      return false;
    }

    public function newUser() {
      $email = $_POST['mail'];
      $name = $_POST['name'];
      $password = password_hash($_POST['pass'], PASSWORD_DEFAULT);
      $address = $_POST['address'];
      $region = $_POST['region'];
      $city = $_POST['city'];
      $province = $_POST['province'];
      $country = $_POST['country'];
      $zip = $_POST['zip_code'];
      $this->db->query('INSERT INTO '.$this->table.' (name, email, password, address, region, city, province, country, zip_code) VALUES (:name, :email, :password, :address, :region, :city, :province, :country, :zip)');
      $this->db->bind(':name', $name);
      $this->db->bind(':email', $email);
      $this->db->bind(':password', $password);
      $this->db->bind(':address', $address);
      $this->db->bind(':region', $region);
      $this->db->bind(':city', $city);
      $this->db->bind(':province', $province);
      $this->db->bind(':country', $country);
      $this->db->bind(':zip', $zip);
      $this->db->execute();
    }

    public function getUserById($id) {
      $this->db->query('SELECT user_id, email, name, address, region, city, province, country, zip_code FROM ' . $this->table . ' WHERE user_id = :id');
      $this->db->bind(':id', $id);
      return $this->db->single();
    }
  }
?>
