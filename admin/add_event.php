<?php include 'admin_includes/head.php'; ?>

<?php

if (isset($_POST['submit'])) {
  if(!empty($_POST['event_name']) && !empty($_POST['event_price']) && !empty($_POST['event_date']) && !empty($_POST['event_spots']) && !empty($_POST['event_image'])) {
    $new_shoe = new event();
    $new_shoe->add_event_query();
    echo "new product created " . $_POST['event_name'];
  } else {
    echo "not all fields have been filled <br>";
    echo $_POST['event_name'] . "<br>";
    echo $_POST['event_price'] . "<br>";
    echo $_POST['event_date'] . "<br>";
    echo $_POST['event_spots'] . "<br>";
    echo $_POST['event_image'] . "<br>";
  }
}

?>


<div class="admin_page container-fluid">
  <div class="row">
    <div class="col-md-2 sidebar">
      <?php include 'admin_includes/nav.php'; ?>
    </div>

    <div class="col-md-10 content_main">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2">

            <form style="width:100%;" action="" method="post">

              <div class="form-group">
                <label for="exampleFormControlInput1">Event Name</label>
                <input type="text" class="form-control" id="event_name" name="event_name">
              </div>

              <div class="form-group">
                <label for="exampleFormControlInput1">Event Price</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="event_price">
              </div>

              <div class="form-group">
                <label for="exampleFormControlInput1">Event Date</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="event_date">
              </div>

              <div class="form-group">
                <label for="exampleFormControlInput1">Event Spots</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="event_spots">
              </div>

              <div class="form-group">
                <label for="exampleFormControlInput1">Event Image</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="event_image">
              </div>



              <div class="">
                <input class="btn btn-primary" type="submit" name="submit" value="submit">
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>

  </div>
</div>
























	<?php include 'admin_includes/footer.php'; ?>
