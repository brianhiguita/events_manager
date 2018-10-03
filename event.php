<?php include "init.php"; ?>



<?php

$name = $_GET['name'];

$single_shoe = new Shoes();
$single_shoe->get_shoes_query($name);

echo $single_shoe->name;


 ?>
