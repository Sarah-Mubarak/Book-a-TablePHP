<?php
include('config.php');
if(isset($_POST['update'])){
    $id= $_POST['id'];
$n= $_POST['name'];
$image= $_FILES['image'];

$target_file ="image/".basename($_FILES["image"]["name"]);
$img=$_FILES["image"]["name"];

$update="UPDATE  product SET name='$n' , imge='$target_file' WHERE id='$id' ";
mysqli_query($con,$update);


}
header('location:updone.php')
?>