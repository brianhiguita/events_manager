<?php include 'includes/head.php'; ?>

		<?php include 'includes/nav.php'; ?>

<?php

$name = $_GET['name'];

$single_event = new Event();
$single_event->get_event_query($name);

echo $single_event->name;
echo $single_event->price;
echo $single_event->date;
echo $single_event->spots;
echo $single_event->image;
echo $single_event->indoor;


 ?>


	<?php include 'includes/footer.php'; ?>
