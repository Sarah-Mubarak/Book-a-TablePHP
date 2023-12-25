<?php

session_start();

?>
<html dir="rtl" lang="ar">
<head>
<link rel="stylesheet" type="text/css" href="style.css" >

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
<a href="user.php"><button class="buttt"> تعديل الملف الشخصي </button></a>
<br><br>
<a href="order.php"><button class="buttt2"> طلباتي</button></a>
<br><br>
<a href="pay.php"><button class="buttt3" >طرق الدفع</button></a>
<br><br>
<a href="addres.php"><button class="buttt4">  قائمة العناوين</button></a>
<br><br>
<a href="wish.php"><button class="buttt5"> اضف تعليق لطلبك</button></a>
<br><br>
<a href="logout.php"><button class="buttt6">   تسجيل خروج</button></a>
</aside>
<section class="section-admin">
<center>
    <h1 class="info">بيانات الحساب 
        <br>
    يمكنك ادارة بياناتك الشخصية وتعديلها هنا
</h1>
<br><br><br><br>
<p class="perinfo">البيانات الشخصية</p>
<form >
    <input type="text" class="name1" placeholder="الاسم">
    <input type="text"  class="name2" placeholder="username"   >
    <br>
    <input type="date" class="name3">

    <select   class="name4"  name="gender">
        <option  value="ma">ذكر</option>
        <option selected  value="fe">انثى</option>
     
    </select>   
<br>
<input type="email" class="name5" placeholder="exampl@gmail.com">

<input type="text"  class="name6" placeholder="+966 "  >
<br><br><br>
<button id="save">حفظ</button>
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