<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"form");
$query ="insert into student values('',$_POST[roll_no],'$_POST[name]','$_POST[father_name]',$_POST[class],$_POST[mobile],'$_POST[email]','$_POST[password]','$_POST[remark]')";



$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
alert("Student Edited successfully");
window.location.href = "admin_dashboard.php";
</script>