<?php

class Order {

public $id = [];
public $event = [];
public $fist_name = [];
public $last_name = [];
public $email = [];
public $contact_number = [];
public $first_line = [];
public $second_line = [];
public $city = [];
public $postcode = [];
public $quantity = [];


public function post_order() {
  $order_event = $_POST['event'];
  $order_first_name = $_POST['first_name'];
  $order_last_name = $_POST['last_name'];
  $order_email = $_POST['email'];
  $order_contact_number = $_POST['contact_number'];
  $order_first_line = $_POST['first_line'];
  $order_second_line = $_POST['second_line'];
  $order_city = $_POST['city'];
  $order_postcode = $_POST['postcode'];
  $order_quantity = $_POST['quantity'];


  $sql_query = "INSERT INTO `orders` (`order_event`, `order_first_name`, `order_last_name`, `order_email`, `order_contact_number`, `order_first_line`, `order_second_line`, `order_city`, `order_postcode`, `order_quantity`) VALUES ('$order_event', '$order_first_name', '$order_last_name', '$order_email', '$order_contact_number', '$order_first_line', '$order_second_line', '$order_city', '$order_postcode', '$order_quantity')";
  $post_order = $this->order_query($sql_query);
}



public function view_order() {
  $sql_query = "SELECT * FROM `orders`";
  $all_orders = $this->order_query($sql_query);
  while ($row = mysqli_fetch_array($all_orders)) {
    foreach ($all_orders as $row) {
      $this->id[] = $row['order_id'];
      $this->event[] = $row['order_event'];
      $this->first_name[] = $row['order_first_name'];
      $this->last_name[] = $row['order_last_name'];
      $this->email[] = $row['order_email'];
      $this->contact_number[] = $row['order_contact_number'];
      $this->first_line[] = $row['order_first_line'];
      $this->second_line[] = $row['order_second_line'];
      $this->city[] = $row['order_city'];
      $this->postcode[] = $row['order_postcode'];
      $this->quantity[] = $row['order_quantity'];
    }
  }
}



public function order_query($sql) {
  global $database;
  $query = $database->query($sql);
  return $query;
}








}




 ?>
