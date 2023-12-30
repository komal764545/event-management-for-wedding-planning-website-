<!DOCTYPY html>
<html>
<head>
    <title>Event Managment</title>
</head>
<center>

<body bgcolor="#3c010e" text="white">
<?php
include_once("header.php")
?>  <br><br><br><br><br>
    <h3>Login</h3>
    <form action="" method="post">
        <input type="submit" name="admin_login" value="Admin_login">
        <input type="submit" name="student_login" value="Client_login">

</from>
<?php
if(isset($_POST['admin_login'])){
    header("Location: admin_login.php");
}
if(isset($_POST['student_login'])){
    header("Location: student_login.php");
}


?><br><br><br><br><br>
</center><div class="copyright" align="center">
        &copy; Copyright <strong><span>Event</span></strong>. All Rights Reserved
      </div>



</body>
</html>