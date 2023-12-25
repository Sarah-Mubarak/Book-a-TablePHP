<?php
include('config.php');
$id=$_GET['id'];
 mysqli_query($con, "DELETE FROM reserv WHERE id=$id");
 header('location:reservation.php');

?>