<?php include 'includes/head.php'; ?>

		<?php include 'includes/nav.php'; ?>

<?php

$name = $_GET['name'];

$single_event = new Event();
$single_event->get_event_query($name);

// echo $single_event->name;
// echo $single_event->price;
// echo $single_event->date;
// echo $single_event->spots;
// echo $single_event->image;
// echo $single_event->indoor;

 ?>

 <div class="container-fluid">
	 <div class="row">
		 <div class="col-md-8 single_event_image">
			 <img src="<?php echo $single_event->image;?>">
		 </div>
		 <div class="col-md-4">
			 <h3><?php echo $single_event->name; ?></h3>
			 <h3>positions available <?php echo $single_event->spots; ?></h3>
			 <h3><?php echo $single_event->price ?></h3>
			 <p><?php echo $single_event->date ?></p>
		 </div>

	 </div>
 </div>

<div class="wrapper" style="background-color: grey;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
					<h1><?php echo $single_event->name; ?></h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>

	</div>

</div>





	<?php include 'includes/footer.php'; ?>
