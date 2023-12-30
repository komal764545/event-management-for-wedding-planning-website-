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
		     <img src="img/s1.jpg">
		     <img src="img/s2.jpg">
		     <img src="img/s3.jpg">
	     </figure>
	 </div>
	 <br/>
	 
<table border="0px" width="1335px" align ="center">
<tr><td align="left"><h1>ABOUT US</h1>
<hr color="#ffc400" size="3" width="80px"align="left"/>
<p><font size="4px">We are overpoweringly dedicated to helping people celebrate their life. We are known as the 
most professional destination wedding planners in Delhi and are here to inspire and assist people to have the wedding of their romantic and wildest 
dreams. We take care of each and everything from beginning to end and provide our customers with a great sense of satisfaction, 
confidence, entertainment, and unforgettable and exciting moments that will last for longer. We are the highest in the List of Top luxury wedding planners in Delhi NCR, Noida and Gurgaon.</font></p></td>
<td align="right"><img src="img/about1.jpg" height="400" width="600"></td></tr>

<tr><td align="right"><img src="img/about2.jpg" height="400" width="700"></td>
<td align="left"><h1>KNOW US</h1>
<hr color="#ffc400" size="3" width="80px"align="left"/>
<p><font size="4px">Vivah Luxury Weddings is known to be the best destination wedding planners in Delhi. You can rely on us for our 
dedication and truly expert services that we offer to make your wedding day unique and special.</font></p></td></tr>
</table>



<br/><br/>
<div class="copyright" align="center">
        &copy; Copyright <strong><span>Event</span></strong>. All Rights Reserved
      </div>
	  
	  
</body>
<html>