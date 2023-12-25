<?php
include('config.php');
if(isset($_POST['addc'])){
$n= $_POST['name'];
$id_user=$_POST['id_user'];
$image= $_POST['image'];

$target_file ="image/".basename($_FILES["image"]["name"]);
$img=$_FILES["image"]["name"];
$insert="INSERT INTO reserv  (name , id_user, imge) VALUES  ('$n' , '$id_user', '$target_file')";

mysqli_query($con,$insert);


}
header('location:reservation.php')


?>
