<?php
   $con = mysqli_connect('localhost','root','');
   mysqli_select_db($con,'db_blood');
   $sql = "DELETE FROM tb_patient WHERE Patient_Id='$_GET[Patient_Id]'";
   if(mysqli_query($con,$sql))
	   header("refresh:1; url=patient_view.php");
   else
	   echo "Not Deleted!";


?>