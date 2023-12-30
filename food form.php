<html>
<head>
</head>
<body>
<form name="my form" method="post">
<h1 align="center">REGISTRATION FORM</h1>
<table border ="2px" width="600px" cellpadding="3px" cellspacing="0px" align="center">

<tr><td colspan="3"><h1>Add Event Food*</h1></td></tr>
<tr><td>Full Name:</td><td colspan="3"><input type="text" name="unm" /></td></tr><br/>
<tr><td>Mobile Number:</td><td colspan="3"><input  type="text" name="mobileno"/></td></tr><br/>
<tr><td>Email Address:</td><td colspan="3"><input type="email" name="mail"/></td></tr>
<tr><td>Function Date:</td><td colspan="3"><input type="date" name="date"/></td></tr>
<tr><td>No of Guest:</td><td colspan="3"><input type="number" name="no_of_guest" min="0" max="10" /></td></tr>
<tr><td align="center" colspan="3"><input type="Submit" name="SubBtn" value="login"/></td></tr>
</table>
</form>
</body>
</html>


<?php

 extract($_REQUEST);
 if(isset($SubBtn))
  
 {
    $link=mysqli_connect("localhost","root","","food");
    $qry="insert into food_1 values('$unm','$mobileno','$mail','$date','$no_of_guest')";
    mysqli_query($link,$qry);
    mysqli_close($link);
    echo "insert succesfully.....";
 }
 
 


?>
