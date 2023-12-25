<html dir="rtl" lang="ar">
<head>

<title>reservation</title>
<link rel="stylesheet" type="text/css" href="style.css" >
</head>
<body>
<header>
<nav>
<b>
<a href="http://localhost/res/main.php"  class="Amain"> الصفحة الرئيسية </a>
<a href="http://localhost/res/reservation.php"  class="Amain"> الحجوزات </a> 
<a href="http://localhost/res/about.php"  class="Amain"> حول </a>  
<a href="http://localhost/res/login.php"  class="Amain"> تسجيل الدخول </a>
</b>
</nav>
</header>
<section class="res-section">
<h1 style="color:#36454F;" > الحجوزات:</h1>
</section>

<?php
include('config.php');
$result = mysqli_query($con, "SELECT * FROM reserv");
while ($row = mysqli_fetch_array($result)) {
echo"
<center>
<article>
<div class='cardss' style='width: 16rem;'>
  
  
  <div class='cardbody'>
    <h5 class='card-title'>$row[name]</h5>
   <a href='delete_cart.php?  id=$row[id]'><img src='https://w7.pngwing.com/pngs/178/524/png-transparent-computer-icons-black-and-white-trash-icon-white-text-rectangle.png' width='20'></a>
  </div>
</div>
</article>
</center>

";
}


?>
<footer>
    <center>     
<img src="https://png.pngitem.com/pimgs/s/366-3662072_twitter-icon-transparent-outline-twitter-logo-black-and.png" height="40px" width="40px">
&nbsp; &nbsp;&nbsp;&nbsp;
<img src="https://seeklogo.com/images/W/whatsapp-logo-112413FAA7-seeklogo.com.png" height="40px" width="40px">
&nbsp; &nbsp;&nbsp;&nbsp;
<br>
جميع الحقوق محفوظة &copy;
</center>
</footer>
</body>
</html>