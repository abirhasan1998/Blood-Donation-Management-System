<?php
$con = mysqli_connect('localhost','root','');
   mysqli_select_db($con,'db_blood');

$sql="UPDATE tb_employee set Employee_Name='$_POST[Employee_Name]', Employee_Id='$_POST[Employee_Id]',Employee_Designation='$_POST[Employee_Designation]',Address='$_POST[Address]',Contact_No='$_POST[Contact_No]'   where Employee_Id='$_POST[Employee_Id]'";
   $res=mysqli_query($con,$sql);
   if($res)
	   header("refresh:1; url=employee_view.php");
   else
	   echo "Not update!";

?>


