<?php
   $con = mysqli_connect('localhost','root','');
   mysqli_select_db($con,'db_blood');
   $sql = "DELETE FROM tb_donar WHERE Donar_Id='$_GET[Donar_Id]'";
   if(mysqli_query($con,$sql))
	   header("refresh:1; url=donar_view.php");
   else
	   echo "Not Deleted!";


?>