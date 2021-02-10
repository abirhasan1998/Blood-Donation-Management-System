<?php
$con = mysqli_connect('localhost','root','');
   mysqli_select_db($con,'db_blood');

$sql="UPDATE tb_patient set Patient_Name='$_POST[Patient_Name]', Patient_Id='$_POST[Patient_Id]',Patient_Blood_Group='$_POST[Patient_Blood_Group]',Address='$_POST[Address]',Contact_No='$_POST[Contact_No]'   where Patient_Id='$_POST[Patient_Id]'";
   $res=mysqli_query($con,$sql);
   if($res)
	   header("refresh:1; url=patient_view.php");
   else
	   echo "Not update!";

?>


