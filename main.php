<html dir="rtl" lang="ar">
<head>
<title>Book a Table</title>

<link rel="stylesheet" type="text/css" href="style.css" >
<style>


section {
  height: 60%;
  position: relative;
  overflow: hidden;
  background: url(https://mytable.sa/assets/frontend/images/detailed-banner.jpg) ;
  background-size: cover;
  
}
.color1 {
color:white;
padding-bottom:10px;}


.font{
 font-family:Cooper Black;
 color:white;
 margin-top:100px;
 font-size:50px;
}
 .rh2{
display:inline-block;
font-size:15px;

}

.bt {
height:30px;

font-size:16px;
}
.bt2 {
width:8em;
height:30px;
background:#E2DFD2;
border-radius:4px;
font-size:16px;
border:none;
}



article {
	 display: inline-block;
	 float:right;
		
		
}

  .cardim{

        height:200;
        width:200;
    }
    
.cardbody{


    font-size:25px;
}
    .cards{
        float:right;
      margin-right:10px;
      margin-left:10px;

        padding-bottom:-40px;
    box-shadow: rgba(101, 104, 104, 0.301) 0px 2px 8px 0px;
	border-top-left-radius:8px;
	border-top-right-radius:8px;
	border-bottom-left-radius:8px; 
	border-bottom-right-radius:8px;
    }
	.bu8{
        display:inline;
padding:10px 10px 10px 10px;
        
    border: #817b7bb6;
    border-top-left-radius:4px;
    border-top-right-radius:4px;
    border-bottom-left-radius:4px; 
    border-bottom-right-radius:4px;

background-color: #E2DFD2;
font-size: 18;

    }
	footer{
margin-top:50px;
height:60px;

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

<section>
<h1 class="font"><center><b>Book a Table</b></centr></h1>
 <h4 class="color1"><center> اجراء حجز مجاني الان </center></h4>
<center>
<input class="bt" type="text" name="search" placeholder="البحث في المطاعم" size="60" maxlength="60">
<input class="bt2" type="submit" value="بحث"></center>
</section>
<br><br><br><br><br><br>
<h2 style="color:#36454F;">استكشف المطاعم:</h2><br>

<?php
include('config.php');
$result = mysqli_query($con, "SELECT * FROM product");
while ($row = mysqli_fetch_array($result)) {
echo"
<center>
<article>
<div class='cards' style='width: 16rem;'>
  <img src='$row[imge]' class='cardim'>
  <div class='cardbody'>
    <h5 class='card-title'>$row[name]</h5>
    <a href='reserv.php?  id=$row[id]'><button class='bu8'>حجز</button></a>
  </div>
</div>
</article>
</center>

";
}


?>
<br> <br><br><br><br><br> <br><br><br><br>
<br> <br><br><br><br><br>
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