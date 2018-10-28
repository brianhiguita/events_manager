<?php

class Message {

public $id = [];
public $email = [];
public $message = [];

public function post_message() {
  $message_email = $_POST['message_email'];
  $message_content = $_POST['message_content'];

  $sql_query = "INSERT INTO `messages` (`message_email`, `message_content`) VALUES ('$message_email', '$message_content')";
  $post_message = $this->message_query($sql_query);
}

public function view_message() {
  $sql_query = "SELECT * FROM `messages`";
  $all_messages = $this->message_query($sql_query);
  while ($row = mysqli_fetch_array($all_messages)) {
    foreach ($all_messages as $row) {
      $this->id[] = $row['message_id'];
      $this->email[] = $row['message_email'];
      $this->message[] = $row['message_content'];
    }
  }
}

public function delete_message($id) {
    $result = $this->message_query("DELETE FROM `messages` where `message_id` = '$id'");
}



public function message_query($sql) {
  global $database;
  $query = $database->query($sql);
  return $query;
}








}




 ?>
