
<?php include 'includes/head.php'; ?>

		<?php include 'includes/nav.php'; ?>




		<div class="container-fluid">

			<div class="row homepage-bg">
			</div>

		</div>


		<div class="container">

			<div class="row">
				<p>this is lorem</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>

		</div>

		<div class="container-fluid">

			<div class="row all_events">

				<?php

				$new_event = new Event();
				$new_event->get_multiple_events_query();



				foreach ($new_event->name_array as $i => $value) { ?>

				  <div class="col-md-4 event-wrapper">

							<div class="img-responsive each-event" style="background-repeat: no-repeat; background-size: cover; background-position: center; background-image: url('<?php echo $new_event->image_array[$i] ?>'); ">

					      <form class="" action="event.php" method="get">
					        <button type="submit" name="name" value="<?php echo $new_event->name_array[$i] ?>">view this product</button>
					      </form>
							</div>

							<div class="event-text-section">
								<h1> Event Name : <?php echo $new_event->name_array[$i] ?></h1>
							</div>

				  </div>

				<?php  } ?>


			</div>
		</div>





	<?php include 'includes/footer.php'; ?>
