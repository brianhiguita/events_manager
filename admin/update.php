<?php include 'admin_includes/head.php'; ?>


<div class="admin_page container-fluid">
  <div class="row">
    <div class="col-md-2 sidebar">
      <?php include 'admin_includes/nav.php'; ?>
    </div>
    <div class="col-md-10 content_main">

      <?php

      $id = $_GET['id'];
      $event_prop = "event_id";
      $update_event = new Event();
      $update_event->get_event_query($event_prop, $id);
      ?>


      <?php
        $set_update_event = new Event();
        if (isset($_POST['update'])) {
          if(!empty($_POST['event_name']) && !empty($_POST['event_price']) && !empty($_POST['event_date']) && !empty($_POST['event_spots']) && !empty($_POST['event_image'])) {
            $set_update_event->update_event_query($id);
            header('location: index.php');
          }
          else {
            die("you left something empty");
          }
        }


       ?>

        <div class="container">
          <div class="row">
            <div class="col-md-8 offset-md-2">

              <form style="width:100%;" action="" method="post">

                <div class="form-group">
                  <label for="exampleFormControlInput1">Event Name</label>
                  <input type="text" class="form-control" name="event_name" value="<?php echo $update_event->name; ?>">
                </div>


                <div class="form-group">
                  <label for="exampleFormControlInput1">Event Price</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" name="event_price" value="<?php echo $update_event->price; ?>" placeholder="<?php echo $update_event->price; ?>">
                </div>

                <div class="form-group">
                  <label for="exampleFormControlInput1">Event Date</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" name="event_date" value="<?php echo $update_event->date; ?>" placeholder="<?php echo $update_event->date; ?>">
                </div>

                <div class="form-group">
                  <label for="exampleFormControlInput1">Event Spots</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" name="event_spots" value="<?php echo $update_event->spots; ?>" placeholder="<?php echo $update_event->spots; ?>">
                </div>

                <div class="form-group">
                  <label for="exampleFormControlInput1">Event Image</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" name="event_image" value="<?php echo $update_event->image; ?>" placeholder="<?php echo $update_event->image; ?>">
                </div>

                <div class="">
                  <input class="btn btn-primary" type="submit" name="update" value="update">
                </div>
              </form>

            </div>
          </div>
        </div>



    </div>

  </div>

</div>



<?php include 'admin_includes/footer.php'; ?>
