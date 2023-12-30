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

<h3>Admin Login</h3>
    <form action="" method="post">
        Email:<input type="text" name="email" required><br><br>
        Password:<input type="password" name="password" required><br><br>
        <input type="submit" name="submit" required>
        


</from>

<?php
session_start();
if(isset($_POST['submit'])){
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"form");
    $query = "select * from login where email = '$_POST[email]'";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run)){
        if($row['email'] == $_POST['email']){
            if($row['password'] == $_POST['password']){
                $_SESSION['email'] = $row['email'];
                $_SESSION['name'] = $row['name'];
               header("Location: admin_dashboard.php");
            }
            else{
                echo "Wrong Password";
            }
        }
        else{
            echo "Worng email ID";
        }
    }
}
?>
<br><br><br><br><br>
</center>
<div class="copyright" align="center">
        &copy; Copyright <strong><span>Event</span></strong>. All Rights Reserved
      </div>



</body>
</html>