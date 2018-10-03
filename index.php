
<?php include 'includes/head.php'; ?>

		<?php include 'includes/nav.php'; ?>

		<?php

		$new_event = new Event();
		$new_event->get_multiple_events_query();

		foreach ($new_event->name_array as $i => $value) { ?>

		  <div class="wrapper" style="width:30%; display:inline-block;">


		      <h1> Event ID : <?php echo $new_event->id[$i] ?></h1>
		      <h1> Event Name : <?php echo $new_event->name_array[$i] ?></h1>
		      <h1> Event Price : <?php echo $new_event->price_array[$i] ?></h1>
		      <h1> Event Date : <?php echo $new_event->date_array[$i] ?></h1>
		      <h1> Event Spots available <?php echo $new_event->spots_array[$i] ?></h1>
		      <h1> Event Image : <?php echo $new_event->image_array[$i] ?></h1>
					<h1> Event indoor? : <?php echo $new_event->indoor_array[$i] ?></h1>

		      <form class="" action="event.php" method="get">
		        <button type="submit" name="name" value="<?php echo $new_event->name_array[$i] ?>">view this product</button>
		      </form>


		  </div>



		<?php  } ?>

	<?php include 'includes/footer.php'; ?>
