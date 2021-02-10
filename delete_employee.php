<?php
   $con = mysqli_connect('localhost','root','');
   mysqli_select_db($con,'db_blood');
   $sql = "DELETE FROM tb_employee WHERE Employee_Id='$_GET[Employee_Id]'";
   if(mysqli_query($con,$sql))
	   header("refresh:1; url=employee_view.php");
   else
	   echo "Not Deleted!";


?>