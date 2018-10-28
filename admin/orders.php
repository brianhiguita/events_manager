<?php include 'admin_includes/head.php'; ?>


<div class="admin_page container-fluid">
  <div class="row">
    <div class="col-md-2 sidebar">
      <?php include 'admin_includes/nav.php'; ?>
    </div>
    <div class="col-md-10 content_main">


      <?php

      $view_orders = new Order();
      $view_orders->view_order();


      foreach ($view_orders->id as $i => $value) { ?>
          <h1>Order <?php echo $view_orders->id[$i]; ?></h1>
          <p><?php echo $view_orders->event[$i]; ?></p>
          <p><?php echo $view_orders->first_name[$i]; ?></p>
          <p><?php echo $view_orders->last_name[$i]; ?></p>
          <p><?php echo $view_orders->email[$i]; ?></p>
          <p><?php echo $view_orders->contact_number[$i]; ?></p>
          <p><?php echo $view_orders->first_line[$i]; ?></p>
          <p><?php echo $view_orders->second_line[$i]; ?></p>
          <p><?php echo $view_orders->city[$i]; ?></p>
          <p><?php echo $view_orders->postcode[$i]; ?></p>
          <p><?php echo $view_orders->quantity[$i]; ?></p>

      <?php } ?>
    </div>

  </div>

</div>



<?php include 'admin_includes/footer.php'; ?>
