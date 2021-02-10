<?php
$con = mysqli_connect('localhost','root','');
   mysqli_select_db($con,'db_blood');

$sql="UPDATE tb_donar set Donar_Name='$_POST[Donar_Name]', Donar_Id='$_POST[Donar_Id]',Donar_Blood_Group='$_POST[Donar_Blood_Group]',Address='$_POST[Address]',Contact_No='$_POST[Contact_No]'   where Donar_Id='$_POST[Donar_Id]'";
   $res=mysqli_query($con,$sql);
   if($res)
	   header("refresh:1; url=donar_view.php");
   else
	   echo "Not update!";

?>

