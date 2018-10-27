<?php include 'admin_includes/head.php'; ?>


<div class="admin_page container-fluid">
  <div class="row">
    <div class="col-md-2 sidebar">
      <?php include 'admin_includes/nav.php'; ?>
    </div>
    <div class="col-md-10 content_main">

      <?php if (isset($_POST['delete'])) {
        echo $_POST['id'];
      } ?>

			<?php

			$event = new Event();
			$event->get_multiple_events_query();

			foreach ($event->name_array as $i => $value) { ?>

			  <div class="col-md-12 event-wrapper">
          <?php echo $event->id_array[$i] ?>
          <?php echo $event->name_array[$i] ?>
          <?php echo $event->price_array[$i] ?>
          <?php echo $event->date_array[$i] ?>
          <?php echo $event->spots_array[$i] ?>
          <a href="#">update</a>
          <form class="" action="index.php?id=<?php echo $event->id_array[$i]; ?>" method="post">
            <input type="hidden" name="id" value="<?php echo $event->id_array[$i]; ?>">
            <input type="submit" name="delete" value="delete">
          </form>
			  </div>

			<?php  } ?>
    </div>

  </div>

</div>



<?php include 'admin_includes/footer.php'; ?>
