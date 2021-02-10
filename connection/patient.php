<?PHP
$servername="localhost";
$username="root";
$password="";
$dbname="db_blood";
$conn=mysqli_connect ($servername,$username,$password,$dbname);
if(!$conn)
{
	die("error");
}
else
{
	echo("successfully connected!!!!");
}
$sql="INSERT INTO tb_patient(Patient_Name,Patient_Id,Patient_Age,Patient_Blood_Group,Patient_Diseases,Date_Of_Birth,Gender,Address,Contact_No) VALUES('$_POST[Patient_Name]','$_POST[Patient_Id]','$_POST[Patient_Age]','$_POST[Patient_Blood_Group]','$_POST[Patient_Diseases]','$_POST[Date_Of_Birth]','$_POST[Gender]','$_POST[Address]','$_POST[Contact_No]')";
if(mysqli_query($conn,$sql))
{
	echo "1 row insert successfully!!!!";
}
else
{
    echo"Can not insert anything!!!!";
}
mysqli_close($conn);
?>