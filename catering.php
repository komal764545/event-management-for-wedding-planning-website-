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
		     <img src="img/food/south-indian.jpg" height="400px">
		     <img src="img/food/north-indian.jpg" height="400px">
		     <img src="img/food/italian.jpg" height="400px" >
	     </figure>
	 </div>
	 <br/>
          
		  <tr><td colspan="4"><h1 align="center">BOOK AN EVENT</h1>
		  <p align="center">HOST YOUR EVENT WITH THE BEST WEDDING & CATERERS IN UP & DELHI/NCR</p>
		  <hr color="#ffc400" size="3" width="150px"/>  <br/> <br/><br/></td></tr>
          <table border="2px" width="900px" align ="center"cellpadding="6" cellspacing="15"  bordercolor="#ffc400" width="1300">
		     <tr><td colspan="3"><h2><a href="veg-suggestive.php">SUGGESTIVE VEGETARIAN MENU</a></h2></td><td colspan="3"><h2><a href="veg-silver.php">VEGETARIAN SILVER MENU</a></h2></td></tr>
		     <tr><td colspan="3"><h2><a href="veg-golden.php">VEGETARIAN GOLDEN MENU</a></h2></td><td colspan="3"><h2><a href="veg-diamond.php">VEGETARIAN DIAMOND MENU</a></h2></td></tr>
		  </table>
		  <br/><br/><br/>
		  <table border="0px">
		  <tr><td colspan="2"><img src="img/food/plate-1.png" width="500" height="450"></td>
          <td><font size="4px">
	      <h1 align="left">SERVING MEMORIES</h1>
          <hr color="#ffc400" size="3" width="80px"align="left"/>
          <p>We provide you customised services with sumptuous food. You can count on us, to make your event unforgettable 
          with our superlative services and fingure licking cuisine. Our staff ensures to deliver you exceptional experience 
          at reasonable price for all occassions, be it big or small, formal or informal. Our professionally trained staff is 
          extremely trustworthy and hardworking, who is always ready to exceed your expectations.</p></td></tr>
		  </table>
		  
		  <table border="2px" width="1335px" align ="center">
          <tr><td align="center"><img src="img/food/south-indian.jpg" height="200" width="350">
		  <h3>SOUTH INDIAN</h3><p>South Indian Cuisine is considerd hottest food of India. This mouth watering food is known for varied range of vegetables, spices, and fiery taste.</p>
          <button class="btn btn-secondary"><a href="south-indian.php"><font size="3px">More About South Indian</font></a></button></a></td>
          
		  <td align="center"><img src="img/food/chinese.jpg" height="200" width="350">
		  <h3>CHINESE</h3><p>Who doesn't love Chinese? It is basic food, expected by all, in any kind of occasion. Chinese is most popular and widely varied ethnic food in the world.</p>
          <button class="btn btn-secondary"><a href="chinese.php"><font size="3px">More About Chinese</font></a></button></a>
          
		  <td align="center"><img src="img/food/italian.jpg" height="200" width="350">
		  <h3>ITALIAN</h3><p>Italian cuisine is considered heart and soul of any gathering. This fancy, tempting, aromatic and satisfying cuisine is quite famous and everybody's favourite.</p>
          <button class="btn btn-secondary"><a href="italian.php"><font size="3px">More About Italian</font></a></button></a></td></tr>
          
		  <tr><td align="center"><img src="img/food/malaysian.jpg" height="200" width="350">
		  <h3>MALAYSIAN</h3><p>This food is rich in herbs, It's important ingredients are red chillies, tamarind paste, dried shrimp, ginger, garlic, lemongrass, soy sauce and coconut.</p>
          <button class="btn btn-secondary"><a href="malaysian.php"><font size="3px">More About Malaysian</font></a></button></a></td>
          
		  <td align="center"><img src="img/food/north-indian.jpg" height="200" width="350">
		  <h3>NORTH INDIAN</h3><p>North Indian food is one of the most nutritious, vivid, exquisite and appetizing food in the world. It consists of huge variety of snacks, mains and desserts.</p>
          <button class="btn btn-secondary"><a href="north-indian.php"><font size="3px">More About North Indian</font></a></button></a></td></tr>
          
		  </table>
		  
		  
<br/><br/>
<div class="copyright" align="center">
        &copy; Copyright <strong><span>Event</span></strong>. All Rights Reserved
      </div>




      
          


</body>
</html>