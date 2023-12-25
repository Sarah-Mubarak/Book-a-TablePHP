<html dir="rtl">
<head>

<link rel="stylesheet" type="text/css" href="style.css" >
</head>
<body>
<?php
include('config.php');
$id=$_GET['id'];
$result = mysqli_query($con, "SELECT * FROM product WHERE id=$id");
$row = mysqli_fetch_array($result);
?>

<center>
<form  method="post" class="dou" action="reserv3.php">
    
<h2 class="addr">هل تريد حجز المطعم ؟</h2>
<br>
<img src="<?php echo $row['imge'] ?>" width="220" hight="220" >
<input type="text" name="id"class="id" value="<?php echo $row['id']?>">
<br>
<input type="text" name="name" value="<?php echo $row['name']?>" class="name" readonly>

<br>
<input type="text" name="id_user" class="id_user" value="<?php echo $user_id?>">

<button name="addc" class="res4">حجز</button>

<a href="main.php" class="res5"   >  العودة الى الصفحة الرئيسيه</a>

  </form>
</center>

</body>
</html>