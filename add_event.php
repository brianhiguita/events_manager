<?php include "init.php"; ?>

<?php


if (isset($_POST['submit'])) {
  if(!empty($_POST['shoes_name']) && !empty($_POST['shoes_image']) && !empty($_POST['shoes_size']) && !empty($_POST['shoes_quantity']) && !empty($_POST['shoes_price'])) {
    $new_shoe = new Shoes();
    $new_shoe->add_shoes_query();
    echo "new product created " . $_POST['shoes_name'];
  } else {
    echo "not all fields have been filled.";
  }
}

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form class="" action="" method="post">
      <input type="text" name="shoes_name" value="" placeholder="shoes_name">
      <input type="text" name="shoes_image" value="" placeholder="shoes_image">
      <input type="text" name="shoes_size" value="" placeholder="shoes_size">
      <input type="text" name="shoes_quantity" value="" placeholder="shoes_quantity">
      <input type="text" name="shoes_price" value="" placeholder="shoes_price">
      <input type="submit" name="submit" value="submit">
    </form>

  </body>
</html>
