<?php include 'admin_includes/head.php'; ?>


<div class="container-fluid">
  <div class="row">
    <div class="col-md-2">
      <?php include 'admin_includes/nav.php'; ?>
    </div>
    <div class="col-md-10">

			<?php

			$view_event = new Event();
			$view_event->get_multiple_events_query();

			foreach ($view_event->name_array as $i => $value) { ?>

			  <div class="col-md-12 event-wrapper">

								 <?php echo $view_event->name_array[$i] ?>
                 <?php echo $view_event->name_array[$i] ?>
			  </div>

			<?php  } ?>
    </div>

  </div>

</div>



<?php include 'admin_includes/footer.php'; ?>
