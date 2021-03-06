
<?php include 'includes/head.php'; ?>

		<?php include 'includes/nav.php'; ?>




		<div class="container-fluid">

			<div class="row homepage-bg">
				<div class="homepage-bg-overlay">
					<div class="homepage-bg-text">
						<h1>Welcome To The Events Page</h1>
					</div>
				</div>
			</div>

		</div>


		<div class="container">

			<div class="row home-text">
				<h1>What We Do! </h1>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel mauris vestibulum, imperdiet nunc eu, volutpat dui. Aenean vel convallis tortor, eu eleifend nulla. Vivamus efficitur ex vel enim laoreet, quis porttitor nibh auctor. Curabitur a tincidunt est, quis hendrerit enim. Maecenas faucibus placerat purus eu semper. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse cursus viverra magna, a lacinia lectus malesuada quis. Quisque molestie magna sit amet viverra posuere. Curabitur sit amet lectus accumsan, rutrum nulla nec, auctor quam. Aliquam laoreet laoreet posuere. Proin iaculis arcu et dui gravida commodo.

					Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus non faucibus lacus. Fusce elementum finibus mi a condimentum. Integer ornare augue lectus, eu tempus est tempus eget. Sed convallis viverra libero, ut consequat ex posuere quis. Donec nisl ante, rhoncus in tellus vitae, faucibus rhoncus ipsum. Curabitur dapibus nec arcu accumsan cursus. Proin viverra tincidunt quam sit amet hendrerit. Ut sit amet tristique mauris. Donec scelerisque, felis ut commodo pellentesque, risus lectus pulvinar nisi, in consectetur nibh ipsum eget arcu. Vivamus vulputate dictum pretium.

				</p>


			</div>

		</div>

		<div class="container">

			<div class="row all_events">

				<?php

				$new_event = new Event();
				$new_event->get_multiple_events_query();

				foreach ($new_event->name_array as $i => $value) { ?>

				  <div class="col-md-4 event-wrapper">
							<div class="img-responsive each-event" style="background-repeat: no-repeat; background-size: cover; background-position: center; background-image: url('<?php echo $new_event->image_array[$i] ?>'); ">
								<div class="overlay">


									<div class="event-link">
										<form class="" action="event.php" method="get">
											<button class="event-name-button" type="submit" name="name" value="<?php echo $new_event->name_array[$i] ?>"><?php echo $new_event->name_array[$i] ?></button>
										</form>
									</div>
								</div>
							</div>
				  </div>

				<?php  } ?>


			</div>
		</div>




			<div class="contact-wrapper">
				<div class="container">
					<div class="row home-text">

						<div class="col-md-6 home-more-info">
							<h3>Where We Operate</h3>
						<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=SW11%204NJ&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{text-align:right;height:100%;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style></div>

						</div>



						<div class="col-md-6 home-more-info">
							<h3>Message Us</h3>
							<form class="" action="index.php" method="post">
								<input class="form-control" type="email" name="message_email" value="" placeholder="Your Email">
								<br>
								<textarea class="form-control message" name="message_content" rows="8" cols=""></textarea>
								<br>
								<button class="btn" type="submit" name="send_message">Send Message</button>
							</form>

							<?php if (isset($_POST['send_message'])) {
								if (!empty($_POST['message_email']) && !empty($_POST['message_content'])) {
									$send_message = new Message();
									$send_message->post_message();
								} else {
									die("you didnt input and email or content");
								}



							} ?>


						</div>



					</div>
				</div>

			</div>







	<?php include 'includes/footer.php'; ?>
