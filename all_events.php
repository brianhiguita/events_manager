<?php include "init.php"; ?>

<?php

$new_shoe = new Shoes();
$new_shoe->get_multiple_shoes_query();

foreach ($new_shoe->names as $i => $value) { ?>

  <div class="wrapper" style="width:30%; display:inline-block;">


      <h1>this products Id is <?php echo $new_shoe->id[$i] ?></h1>
      <h1>this products name is <?php echo $new_shoe->names[$i] ?></h1>
      <h1>this products image is <?php echo $new_shoe->images[$i] ?></h1>
      <h1>this products size is <?php echo $new_shoe->sizes[$i] ?></h1>
      <h1>this products quantity is <?php echo $new_shoe->quantity[$i] ?></h1>
      <h1>this products price is <?php echo $new_shoe->prices[$i] ?></h1>

      <form class="" action="shoe.php" method="get">
        <button type="submit" name="name" value="<?php echo $new_shoe->names[$i] ?>">view this product</button>
      </form>


  </div>





<?php  } ?>
