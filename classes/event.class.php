<?php



class Event {

  // Event single properties
  public $name;
  public $price;
  public $date;
  public $spots;
  public $image;

  // array properties
  public $id_array = [];
  public $name_array = [];
  public $price_array = [];
  public $date_array = [];
  public $spots_array = [];
  public $image_array = [];



  public function get_event_query($event_prop, $get_variable) {
  global $database;
    // needs to be changed to SELECT * FROM events where id = get method
    $result = $this->event_query("SELECT * FROM `events` where `$event_prop` = '$get_variable'");

    while ($row = mysqli_fetch_assoc($result)) {

      $this->name = $row['event_name'];
      $this->price = $row['event_price'];
      $this->date = $row['event_date'];
      $this->spots = $row['event_spots'];
      $this->image = $row['event_image'];
    }
  }


  public function get_multiple_events_query() {
  global $database;

    $result = $this->event_query("SELECT * FROM `events`");

    while ($row = mysqli_fetch_array($result)) {
      foreach ($result as $row) {
        $this->id_array[] = $row['event_id'];
        $this->name_array[] = $row['event_name'];
        $this->price_array[] = $row['event_price'];
        $this->date_array[] = $row['event_date'];
        $this->spots_array[] = $row['event_spots'];
        $this->image_array[] = $row['event_image'];
      }
    }
  }


  public function add_event_query() {
  global $database;

  $event_name = $_POST['event_name'];
  $event_price = $_POST['event_price'];
  $event_date = $_POST['event_date'];
  $event_spots = $_POST['event_spots'];
  $event_image = $_POST['event_image'];

  // Does a product with the same name already exists?

  $exists = $this->event_query("SELECT * FROM `events` where `event_name` = '$event_name'");

    if (mysqli_num_rows($exists) >= 1) {
      die("this product already exists");
    } else {
      $result = $this->event_query("INSERT INTO `events` (`event_name`, `event_price`, `event_date`, `event_spots`, `event_image`) VALUES ('$event_name', '$event_price', '$event_date', '$event_spots', '$event_image')");
    }
  }

  public function update_event_query($id) {
    global $database;

    $event_name = $_POST['event_name'];
    $event_price = $_POST['event_price'];
    $event_date = $_POST['event_date'];
    $event_spots = $_POST['event_spots'];
    $event_image = $_POST['event_image'];

    $result = $this->event_query("UPDATE `events` SET `event_name` = '$event_name', `event_price` = '$event_price', `event_date` = '$event_date', `event_spots` = '$event_spots', `event_image` = '$event_image' WHERE `event_id` = $id");
    }


  public function delete_event_query($id) {
    global $database;
      $result = $this->event_query("DELETE FROM `events` where `event_id` = '$id'");
  }


  // query
  public function event_query($sql) {
  global $database;
    $query = $database->query($sql);
    return $query;
  }

}



?>
