<?php
include('config.php');
if(isset($_POST['upload'])){
$n= $_POST['name'];
$image= $_POST['image'];

$target_file ="image/".basename($_FILES["image"]["name"]);
$img=$_FILES["image"]["name"];

$insert="INSERT INTO product (name , imge) VALUES  ('$n' , '$target_file')";
mysqli_query($con,$insert);


}
header('location:done.php')

?>