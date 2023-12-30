<!DOCTYPY html>
<html>
<head>
     <title>Event Managment</title>
	 <style type="text/css">
	 </style>
</head>
<body bgcolor="#3c010e" text="white">
<?php
include_once("header.php")
?><br/><br/><center>
                     <form method="post">
                      <h3><label for="fname" >Name:</label>
    
                 <input type="text" name="fname" placeholder="Your Name" required><br><br>
                       
                    
                      <label for="phn">Phone:</label>
                      
                       <input type="text" placeholder="Your Contact No." name="phn" required> <br><br>
                       
                   
                      <label for="email" >Email:</label>
                      
                        <input type="email" placeholder="Your Email" name="email" required><br><br>
                        
                   
                      <label for="message" >Message:</label>
                      
                        <textarea  name="msg" placeholder="Your Message"></textarea><br><br>
                        
                    <button type="submit" name="submit">SUBMIT</button><br><br>
                  </form></h3></center>
               
          
 <?php

 extract($_REQUEST);
 if(isset($submit))
  
 {
    $link=mysqli_connect("localhost","root","","form");
    $qry="insert into contact values('$fname','$phn','$email','$msg')";
    mysqli_query($link,$qry);
    mysqli_close($link);
    echo "insert succesfully.....";
 }
 

?>
          
          

      </div>
    </section><!-- End Contact Section -->
 
 <form>
 </form>
          




		           


</body>
</html>