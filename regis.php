<?php
include('config.php');
if(isset($_POST['bt3'])){
	
	$name=$_POST['fn'];
	$email=$_POST['em'];
	$pass=($_POST['ps']);
	$sel="SELECT * FROM usre1 WHERE email='$email' and password='$pass'";
	mysqli_query($con,$sel);
	if(mysqli_num_rows($sel) > 0){
      $message[] = 'هذا المستخدم موجود!';
   }else{
	
      mysqli_query($con, "INSERT INTO usre1 (name,email,password) VALUES('$name', '$email', '$pass')") or die('فشل في الاضافة ');

      $message[] = 'تم التسجيل بنجاح!';
      header('location:user.php');
   }
	
	
}

?>
<html dir="rtl">
<head>
    <link rel="shortcut icon" href="https://static.vecteezy.com/system/resources/thumbnails/007/407/996/small/user-icon-person-icon-client-symbol-login-head-sign-icon-design-vector.jpg" type="imge/jpg">
    <title> تسجيل جديد </title>
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

<section class="sec">



<form method="post" action="#" class="fo1">

<label class="lab"> الاسم الاول </label><br>
<center><input type="text" name="fn"    class="in1" placeholder=" الاسم الاول "></center><br><br>
<label class="lab"> الاسم الاخير </label><br>
<center><input type="text" name="ln" class="in1" placeholder=" الاسم الاخير "></center><br><br>
<label class="lab"> البريد الالكتروني </label><br>
<center><input type="text" name="em" class="in1" placeholder=" البريد الالكتروني "></center><br><br>
<label class="lab"> كلمة المرور </label><br>
<center><input type="password" name="ps" class="in1" placeholder=" كلمة المرور "></center><br>
<label class="lab"> تاكيد كلمة المرور </label>
<center><input type="password" name="ps2" class="in1" placeholder=" تاكيد كلمة المرور "></center><br><br>
<br>
<center><input name="bt3" type="submit" class="bt3" value="انشاء حساب"></center>

</form>
</section>


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