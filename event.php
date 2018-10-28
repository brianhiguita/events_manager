<?php include 'includes/head.php'; ?>

		<?php include 'includes/nav.php'; ?>

<?php

$name = $_GET['name'];
$event_prop = "event_name";
$single_event = new Event();
$single_event->get_event_query($event_prop, $name);

// echo $single_event->name;
// echo $single_event->price;
// echo $single_event->date;
// echo $single_event->spots;
// echo $single_event->image;

 ?>





 <div class="container-fluid">
	 <div class="row single_event_image" style="background-image: url('<?php echo $single_event->image; ?>');">
		 <div class="homepage-bg-overlay">
			 <div class="homepage-bg-text">
				 <h1><?php echo $single_event->name; ?></h1>
			 </div>
		 </div>
	 </div>
 </div>

 <div class="container">
	 <div class="row single_event_info">


		 <div class="date_price_spots col-md-4" style="text-align:left;">
			<h3>Date: <?php echo $single_event->date ?></h3>
		 </div>
		 <div class="date_price_spots col-md-4" style="text-align:center;">
			<h3>£<?php echo $single_event->price ?></h3>
		 </div>
		 <div class="date_price_spots col-md-4" style="text-align:right;">
			<h3>Spots Availble: <?php echo $single_event->spots ?></h3>
		 </div>


		 <div class="single_event_text">
			 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		 </div>


	 </div>

 </div>

 <div class="form_wrapper">
	 <div class="container">

			 <form class="row" action="index.php" method="post">
				 <div class="col-md-6">
					 <h4>Personl details</h4>
					 <br>
					 <input class="form-control" type="text" name="" value="" placeholder="First Name">
					 <br>
					 <input class="form-control" type="text" name="" value="" placeholder="Last Name">
					 <br>
					 <input class="form-control" type="text" name="" value="" placeholder="Your Email">
					 <br>
					 <input class="form-control" type="text" name="" value="" placeholder="Your Contact Number">
					 <br>
					<select name="quantity" class="form-control">
						<option value="">How many tickets would you like</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
				 </select>
				 <br>
					 <button class="btn" type="submit" name="submit">Book Now</button>

				 </div>

				 <div class="col-md-6">
					 <h4>Address</h4>
					 <br>
					 <input class="form-control" type="text" name="" value="" placeholder="House/flat name or number">
					 <br>
					 <input class="form-control" type="text" name="" value="" placeholder="Street">
					 <br>
					 <input class="form-control" type="text" name="" value="" placeholder="City">
					 <br>
					 <input class="form-control" type="text" name="" value="" placeholder="PostCode">
					 <br>

				 </div>
			</form>

	 </div>
 </div>
















	<?php include 'includes/footer.php'; ?>
