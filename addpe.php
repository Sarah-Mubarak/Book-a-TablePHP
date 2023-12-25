<?php

session_start();

?>
<html dir="rtl" lang="ar">
<head>

<link rel="stylesheet" type="text/css" href="style.css" >
<style>

.prof-addpe{
    display: block;
    font-size: 16;
    font-weight: bold;
	border:inset;
	padding:10px 10px 10px 10px;
}

.addpe-sec {
	    display: inline-block;
		margin-right:300px;
		text-align:center;
		margin-top:100px;
		
}


</style>
</head>
<body>
<header>
<nav>
<b>
<a href="http://localhost/res/main.php"  class="Amain"> الصفحة الرئيسية </a>
<a href="http://localhost/res/reservation.php"  class="Amain"> الحجوزات </a> 
<a href="file:///C:/Users/At/Desktop/weppage/about.html#"  class="Amain"> حول </a> 
<a href="http://localhost/res/login.php"  class="Amain"> تسجيل الدخول </a>
</b>
</nav>
</header>


<aside >
<center>
<img src="https://w7.pngwing.com/pngs/416/62/png-transparent-anonymous-person-login-google-account-computer-icons-user-activity-miscellaneous-computer-monochrome.png" width="100px">
</center>
<br><br>

<a href="admin.php"><button class="buttt"> تعديل الملف الشخصي </button></a>
<br><br>
<a href="addpe.php"><button class="buttt2"> اضافة مطعم</button></a>
<br><br>
<a href="delete.php"><button class="buttt3" >  حذف مطعم</button></a>
<br><br>
<a href="up.php"><button class="buttt4"> تعديل مطعم</button></a>
<br><br>
<a href="selectper.php"><button class="buttt5"> عرض المطاعم</button></a>
<br><br>
<a href="logout.php"><button class="buttt6">   تسجيل خروج</button></a>
</aside>
<section class="addpe-sec">
<center>
    <h1 class="perinfo">   اضافة مطعم    </h1><br><br><br><br>   

<form method="post" action="insert.php"  enctype="multipart/form-data">
<input  type="file" accept="image"  id="file" style='display: none;' name='image'>
<label for="file" class="prof-addpe">اضافة صورة المطعم  </label>
    <br><br>
    <input type="text" name='name' class="name1" placeholder="  اسم المطعم">
   
    <br>
<button id="save" type="submit" name='upload'>اضافة</button>

</form>
</center>
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