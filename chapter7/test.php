<?php session_start(); ?>
<?php
$name = $_SESSION['customer']['name'];
echo '<br />';
echo $name;
?>