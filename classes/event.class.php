<?php


// ****** note to self. need to use get request to get product id to display the information of each product individually


class Event {

  // Event single properties
  public $name;
  public $price;
  public $date;
  public $spots;
  public $image;
  public $indoor;

  // array properties
  public $id_array = [];
  public $name_array = [];
  public $price_array = [];
  public $date_array = [];
  public $spots_array = [];
  public $image_array = [];
  public $indoor_array = [];



  public function get_event_query($get_variable) {
  global $database;
    // needs to be changed to SELECT * FROM events where id = get method
    $result = $this->event_query("SELECT * FROM `events` where event_name = '$get_variable'");

    while ($row = mysqli_fetch_assoc($result)) {

      $this->name = $row['event_name'];
      $this->price = $row['event_price'];
      $this->date = $row['event_date'];
      $this->spots = $row['event_spots'];
      $this->image = $row['event_image'];
      $this->indoor = $row['event_indoor'];
    }
  }


  public function get_multiple_events_query() {
  global $database;

    $result = $this->event_query("SELECT * FROM `events`");

    while ($row = mysqli_fetch_array($result)) {
      foreach ($result as $row) {
        $this->id[] = $row['event_id'];
        $this->name_array[] = $row['event_name'];
        $this->price_array[] = $row['event_price'];
        $this->date_array[] = $row['event_date'];
        $this->spots_array[] = $row['event_spots'];
        $this->image_array[] = $row['event_image'];
        $this->indoor_array[] = $row['event_indoor'];
      }
    }
  }


  public function add_event_query() {
  global $database;

  // $shoe_name = $_POST['shoes_name'];
  // $shoe_image = $_POST['shoes_image'];
  // $shoe_size = $_POST['shoes_size'];
  // $shoe_quantity = $_POST['shoes_quantity'];
  // $shoe_price = $_POST['shoes_price'];

  // Does a product with the same name already exists?

  $exists = $this->event_query("SELECT * FROM `events` where `event_name` = '$event_name'");

    if (mysqli_num_rows($exists) >= 1) {
      die("this product already exists");
    } else {
      $result = $this->event_query("INSERT INTO `events` (`event_name`, `event_image`, `event_size`, `event_quantity`, `event_price`) VALUES ('$event_name', '$event_image', '$event_size', '$event_quantity', '$event_price')");
    }
  }


  // query
  public function event_query($sql) {
  global $database;
    $query = $database->query($sql);
    return $query;
  }

}



?>
