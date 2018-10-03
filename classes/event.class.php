<?php


// ****** note to self. need to use get request to get product id to display the information of each product individually


class Event {

  // shoe single properties

  public $name;
  public $image;
  public $size;
  public $quantity;
  public $price;

  // array properties
  public $id = [];
  public $names = [];
  public $images = [];
  public $sizes = [];
  public $quantities = [];
  public $prices = [];



  public function get_shoes_query($get_variable) {
  global $database;
    // needs to be changed to SELECT * FROM shoes where id = get method
    $result = $this->shoes_query("SELECT * FROM `shoes` where shoes_name = '$get_variable'");

    while ($row = mysqli_fetch_assoc($result)) {

      $this->name = $row['shoes_name'];
      $this->image = $row['shoes_image'];
      $this->size = $row['shoes_size'];
      $this->quantity = $row['shoes_quantity'];
      $this->price = $row['shoes_price'];
    }
  }


  public function get_multiple_shoes_query() {
  global $database;
    // needs to be changed to SELECT * FROM shoes where id = get method
    $result = $this->shoes_query("SELECT * FROM `shoes`");

    while ($row = mysqli_fetch_array($result)) {
      foreach ($result as $row) {
        $this->id[] = $row['shoes_id'];
        $this->names[] = $row['shoes_name'];
        $this->images[] = $row['shoes_image'];
        $this->sizes[] = $row['shoes_size'];
        $this->quantities[] = $row['shoes_quantity'];
        $this->prices[] = $row['shoes_price'];
      }
    }
  }


  public function add_shoes_query() {
  global $database;

  $shoe_name = $_POST['shoes_name'];
  $shoe_image = $_POST['shoes_image'];
  $shoe_size = $_POST['shoes_size'];
  $shoe_quantity = $_POST['shoes_quantity'];
  $shoe_price = $_POST['shoes_price'];

  // Does a product with the same name already exists?

  $exists = $this->shoes_query("SELECT * FROM `shoes` where `shoes_name` = '$shoe_name'");

    if (mysqli_num_rows($exists) >= 1) {
      die("this product already exists");
    } else {
      $result = $this->shoes_query("INSERT INTO `shoes` (`shoes_name`, `shoes_image`, `shoes_size`, `shoes_quantity`, `shoes_price`) VALUES ('$shoe_name', '$shoe_image', '$shoe_size', '$shoe_quantity', '$shoe_price')");
    }
  }


  // query
  public function shoes_query($sql) {
  global $database;
    $query = $database->query($sql);
    return $query;
  }

}



?>
