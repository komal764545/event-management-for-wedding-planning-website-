<!DOCTYPY html>
<html>
<head>
     <title>Event Managment</title>
	 <style type="text/css">
	 #slider{
	 overflow: hidden
	 }
	 #slider figure{
	 position: relative;
	 width:500%;
	 margin:0;
	 left:0;
	 animation:10s slider infinite;
	 }
	 #slider figure img{
	 width:20%;
	 float:left;
	 }
	 @keyframes slider{
	 0%{
	    left:0;
		}
	 20%{
	     left:0;
		 }
	 25%{
	     left:-100%;
		 }
	 45%{
	     left:-100%;
		}
	 50%{
	     left:-200%;
		 }
	 70%{
	     left:-200%;
		 }
	
	}
	 </style>
</head>
<body bgcolor="#3c010e" text="white">
<?php
include_once("header.php")
?>   
     <div id="slider">
	     <figure>  
		     <img src="img/1.jpg">
		     <img src="img/2.jpg">
		     <img src="img/3.jpg">
	     </figure>
	 </div>
	 <br/>
		 <h1 align="center">WELCOME TO <font color="#ffc400">DREAMS LUXURY WEDDINGS</font></h1>
<hr color="#ffc400" size="3" width="150px"/>
		 <font size="4px">
	 <p align="center">We give a marvelous touch to your special day with our leadership in the wedding planning process.<br/>
We assist you in making your day more magical.</p></font>


<table>
<tr><td colspan="2"><img src="img/logo.png"></td>
<td colspan="3"><font size="4px">
	 <h1 align="left">TELL YOUR DREAMS<br/>
WE MAKE IT REAL</h1>
<hr color="#ffc400" size="3" width="80px"align="left"/>
<p>All the brides and grooms just want one thing and that is their wedding day to be one of the most beautiful experiences in their life. People have dreams and this is one day when they want all their dreams me true. We at Vivah luxury weddings makes 
sure that everything you once planned is actually happening on your wedding day. From décor to Mehndi we can handle all.</p></td></tr>
<tr><td colspan="2"></td>
<td align="center"><h2><font color="#ffc400">VIVAH</font></h2><p><font size="4">we make sure that you take your vows in the setting you always dreamt of.</p></font></td>
<td align="center"><h2><font color="#ffc400">LUXURY</font></h2><p><font size="4">we promise to give you a luxury royal wedding with personal consideration and expertise.</p></font></td>
<td align="center"><h2><font color="#ffc400">WEDDINGS</font></h2><p><font size="4">we plan a wedding that leaves an unforgettable experience for all. We make your wedding hassle free and the occasion that will be a treasured one.</p></font></td></tr>

</table><br/><br/>

<h1 align="center">PHOTO GALLERY</h1>
<hr color="#ffc400" size="3" width="100px"/>

<table border="0px" width="1335px" align ="center">
<tr><td align="center"><img src="img/gallary/1.jpg" height="200" width="300"></td>
<td align="center"><img src="img/gallary/2.jpg" height="200" width="300"></td>
<td align="center"><img src="img/gallary/3.jpg" height="200" width="300"></td>
<td align="center"><img src="img/gallary/4.jpg" height="200" width="300"></td></tr>
<tr><td></td><td></td><td></td><td></td></tr>
<tr><td></td><td></td><td></td><td></td></tr>
<tr><td></td><td></td><td></td><td></td></tr>
<tr><td></td><td></td><td></td><td></td></tr>
<tr><td></td><td></td><td></td><td></td></tr>
<tr><td></td><td></td><td></td><td></td></tr>
<tr><td></td><td></td><td></td><td></td></tr>
<tr><td align="center"><img src="img/gallary/5.jpg" height="200" width="300"></td>
<td align="center"><img src="img/gallary/6.jpg" height="200" width="300"></td>
<td align="center"><img src="img/gallary/7.jpg" height="200" width="300"></td>
<td align="center"><img src="img/gallary/8.jpg" height="200" width="300"></td></tr>
<tr><td colspan="4" align="center"><br/><button class="btn btn-secondary"><a href="gallary.php"><font size="4px">Read More</font></a></button></a></td></tr>
</table>
<br/><br/>
<div class="copyright" align="center">
        &copy; Copyright <strong><span>Event</span></strong>. All Rights Reserved
      </div>



</body>
</html>