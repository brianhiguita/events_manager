<?php include 'admin_includes/head.php'; ?>


<div class="admin_page container-fluid">
  <div class="row">
    <div class="col-md-2 sidebar">
      <?php include 'admin_includes/nav.php'; ?>
    </div>
    <div class="col-md-10 content_main">
      <div class="row">



      <?php
      $view_messages = new Message();
      $view_messages->view_message();

      $delete_message = new Message();
      if (isset($_POST['delete'])) {
        $delete_message->delete_message($_POST['id']);
        header('location: inbox.php');
      }



      foreach ($view_messages->id as $i => $value) { ?>
        <div class="col-md-1">
          <p><?php echo $view_messages->id[$i]; ?></p>
        </div>
        <div class="col-md-3">
          <p><?php echo $view_messages->email[$i]; ?></p>
        </div>
        <div class="col-md-6">
          <p><?php echo $view_messages->message[$i]; ?></p>
        </div>
        <div class="col-md-1">
          <form class="" action="inbox.php" method="post">
            <input type="hidden" name="id" value="<?php echo $view_messages->id[$i]; ?>">
            <input type="submit" name="delete" value="delete">
          </form>
        </div>


      <?php } ?>

    </div>


    </div>

  </div>

</div>



<?php include 'admin_includes/footer.php'; ?>
