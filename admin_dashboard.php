<!DOCTYPY html>
<html>
<head>
    <title>Event Managment</title>
	    <?php
    session_start();
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"form");
   
    ?>
</head>


<body bgcolor="#3c010e" text="white">
<?php
include_once("header.php")
?>  <br><br><br><br><br>

    <div id="header">
        <center><strong> Admin Managment System &nbsp;&nbsp;&nbsp;</strong> Email: <?php echo $_SESSION['email']; ?> Name: <?php echo $_SESSION['name']; ?></center>
        <center><a href="logout.php"><p style="color:white";>Logout</p></a></center>
</div>
<div id="left_side"><center><br><br>
    <form action="" method="post">
        <table>
            <tr>
                <td>
                    <input type="submit" name="search_student" value="Search Client">
                </td>
                <td>
                    <input type="submit" name="edit_student" value="Edit Client">
                </td>
                <td>
                    <input type="submit" name="add_new_student" value="Add Client">
                </td>
                <td>
                    <input type="submit" name="delete_student" value="Delete Client">
                </td>
                

            </tr>
            </table>
           </form></center>
</div>
<div right_side><br>
<div id="demo">
<?php 
if(isset($_POST['search_student']))
{
   ?>
   <center>
   <form action="" method="post">
   Enter SR No:
   <input type="text" name="roll_no">
   <input type="submit" name="search_by_roll_no_for_search" value="search">
   </form>
   </center>
<?php
}
if(isset($_POST['search_by_roll_no_for_search']))
{
    $query = "select * from student where roll_no = '$_POST[roll_no]'";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run))
    {
      ?><center>
      <table>
     <tr>
       <td><b>SR No: &nbsp; &nbsp; &nbsp;</b></td>
       <td>
       <input type="text" value="<?php echo $row['roll_no']; ?>" disabled>
       </td>

      </tr>
      <tr>
       <td><b>Name: &nbsp; &nbsp; &nbsp;</b></td>
       <td>
       <input type="text" value="<?php echo $row['name']; ?>" disabled>
       </td>

      </tr>
      <tr>
       <td><b>Father's /  Husband Name: &nbsp; &nbsp; &nbsp;</b></td>
       <td>
       <input type="text" value="<?php echo $row['father_name']; ?>" disabled>
       </td>

      </tr>
      <tr>
       <td><b>Pin Code: &nbsp; &nbsp; &nbsp;</b></td>
       <td>
       <input type="text" value="<?php echo $row['class']; ?>" disabled>
       </td>

      </tr>
      <tr>
       <td><b>Mobile No: &nbsp; &nbsp; &nbsp;</b></td>
       <td>
       <input type="text" value="<?php echo $row['mobile']; ?>" disabled>
       </td>

      </tr>
      <tr>
       <td><b>Email: &nbsp; &nbsp; &nbsp;</b></td>
       <td>
       <input type="text" value="<?php echo $row['email']; ?>" disabled>
       </td>

      </tr>
      
      <tr>
       <td><b>Remark: &nbsp; &nbsp; &nbsp;</b></td>
       <td>
       <textarea cols="40" rows="3" disable><?php echo $row['remark']; ?></textarea>
       </td>

      </tr>
      </table></center>
      <?php
    }
}
?>




<?php 
if(isset($_POST['edit_student']))
{
   ?>
   <center>
   <form action="" method="post">
   Enter SR No:
   <input type="text" name="roll_no">
   <input type="submit" name="search_by_roll_no_for_edit" value="search">
   </form>
   </center>
   <?php
}
if(isset($_POST['search_by_roll_no_for_edit']))
{
    $query = "select * from student where roll_no = '$_POST[roll_no]'";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run))
    {
      ?><center>
   <form action="admin_edit_student.php" method="post">
   <table>
     <tr>
       <td><b>SR No: &nbsp; &nbsp; &nbsp;</b></td>
       <td>
       <input type="text" value="<?php echo $row['roll_no']; ?>">
       </td>

      </tr>
      <tr>
       <td><b>Name: &nbsp; &nbsp; &nbsp;</b></td>
       <td>
       <input type="text" name="name" value="<?php echo $row['name']; ?>">
       </td>

      </tr>
      <tr>
       <td><b>Father's /  Husband Name: &nbsp; &nbsp; &nbsp;</b></td>
       <td>
       <input type="text" name="father_name" value="<?php echo $row['father_name']; ?>">
       </td>

      </tr>
      <tr>
       <td><b>Pin Code: &nbsp; &nbsp; &nbsp;</b></td>
       <td>
       <input type="text" name="class" value="<?php echo $row['class']; ?>">
       </td>

      </tr>
      <tr>
       <td><b>Mobile No: &nbsp; &nbsp; &nbsp;</b></td>
       <td>
       <input type="text" name="mobile" value="<?php echo $row['mobile']; ?>">
       </td>

      </tr>
      <tr>
       <td><b>Email: &nbsp; &nbsp; &nbsp;</b></td>
       <td>
       <input type="text" email="email" value="<?php echo $row['email']; ?>">
       </td>

      
      <tr>
       <td><b>Remark: &nbsp; &nbsp; &nbsp;</b></td>
       <td>
       <textarea cols="40" rows="3" name="remark"><?php echo $row['remark']; ?></textarea>
       </td>

      </tr><br><br>
      <tr>
      <td></td>
      <td><input type="submit" name="edit" value="save"></td>
      </tr>
      </table>
   </form></center>
      <?php
    }
}
?>




<?php 
if(isset($_POST['add_new_student'])){

   ?><center>
   <center><h4>Fill the given details</h4></center>
    <form action="add_student.php" method="post">
    <table>
    <tr>
    <td>SR No:</td>
    <td>
    <input type="text" name="roll_no" require>
    </td>
    </tr>
    <tr>
    <td>Name:</td>
    <td>
    <input type="text" name="name" require>
    </td>
    </tr>
    <tr>
    <td>Father's /  Husband Name:</td>
    <td>
    <input type="text" name="father_name" require>
    </td>
    </tr>
    <tr>
    <td>Pin COde:</td>
    <td>
    <input type="text" name="class" require>
    </td>
    </tr>
    <tr>
    <td>Mobile:</td>
    <td>
    <input type="text" name="mobile" require>
    </td>
    </tr>
    <tr>
    <td>Email:</td>
    <td>
    <input type="text" name="email" require>
    </td>
    </tr>
    <tr>
    <td>Password:</td>
    <td>
    <input type="text" name="password" require>
    </td>
    </tr>
    <tr>
    <td>Remark:</td>
    <td>
    <textarea name="remark"  cols="30" rows="4"></textarea>
    </td>
    </tr>
    <tr>
    <td></td>
    <td>
    <input type="submit" name="add" value="Add Client">
    </td>
    </tr>
    </table>
    </form></center>
    <?php
}
?>

  <?php
  if(isset($_POST['delete_student'])){
      ?>
      <center><h4>Enter SR No to Delete Student</h4><br>
      <form action="delete_student.php" method="post">
      SR No:
      <input type="text" name="roll_no" >
      <input type="submit" name="search_by_roll_no_for_delete" value="Delete Student">
      </form>
      </center>
      <?php
  }
  ?> 

  
</div>
   <br><br><br><br><br>
</div><div class="copyright" align="center">
        &copy; Copyright <strong><span>Event</span></strong>. All Rights Reserved
      </div>



</body>
</html>