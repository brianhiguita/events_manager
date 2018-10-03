<?php include 'admin_includes/head.php'; ?>
<?php include 'admin_includes/nav.php'; ?>

<?php

if (isset($_POST['submit'])) {
  if(!empty($_POST['event_name']) && !empty($_POST['event_price']) && !empty($_POST['event_date']) && !empty($_POST['event_spots']) && !empty($_POST['event_image']) && !empty($_POST['event_indoor'])) {
    $new_shoe = new event();
    $new_shoe->add_event_query();
    echo "new product created " . $_POST['event_name'];
  } else {
    echo "not all fields have been filled.";
  }
}

?>

    <form class="" action="" method="post">
      <input type="text" name="event_name" value="" placeholder="event_name">
      <input type="text" name="event_price" value="" placeholder="event_price">
      <input type="text" name="event_date" value="" placeholder="event_date">
      <input type="text" name="event_spots" value="" placeholder="event_spots">
      <input type="text" name="event_image" value="" placeholder="event_image">
      <input type="text" name="event_indoor" value="" placeholder="0/true for indoor">
      <input type="submit" name="submit" value="submit">
    </form>


	<?php include 'admin_includes/footer.php'; ?>
