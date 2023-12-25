<?php

include('config.php');
session_start();

if(isset($_POST['login1'])){
   $email = $_POST['em'];
   $pass = ($_POST['ps']);

   $select = mysqli_query($con, "SELECT * FROM usre1  WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];
	  if($email=='admin@gmail.com'){
      header('location:admin.php');}
	  else{header('location:user.php');}
	 
   }else{
      $message[] = 'incorrect password or email!';
   }

}

?>
<html dir="rtl" lang="ar">
<head>
<title>long out</title>
<link rel="stylesheet" type="text/css" href="style.css" >
</head>
<body>
<header>
<b>
<a href="http://localhost/res/main.php"  class="Amain"> الصفحة الرئيسية </a>
<a href="http://localhost/res/reservation.php"  class="Amain"> الحجوزات </a> 
<a href="file:///C:/Users/At/Desktop/weppage/about.html#"  class="Amain"> حول </a> 
<a href="http://localhost/res/login.php"  class="Amain"> تسجيل الدخول </a>
</b>
</header>
<section class="sec">
<form method="post" action="user.php" class="fo1">

<label class="lab"> البريد الالكتروني </label><br><br>
<center><input type="text" name="em" size="30" class="in1"><br><br></center>
<label class="lab"> كلمة المرور </label><br><br>
<center><input type="password" name="ps" size="30" class="in1"><br><br>
<input name="login1" class="link" type="submit" value="تسجيل الدخول">
<a href="regis.php" class="link">انشاء حساب</a></center>


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