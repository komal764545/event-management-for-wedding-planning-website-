<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"form");
$query = "update student set name='$_POST[name]',father_name='$_POST[father_name]',class=$_POST[class],email='$_POST[email]',remark='$_POST[remark]' where roll_no=$_POST[roll_no]";
$query_run = mysqli_query($connection,$query);
echo "$query";
?>
<script type="text/javascript">
//alert("Details Edited successfully");
//window.location.href = "admin_dashboard.php";
</script>

