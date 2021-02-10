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
$sql="INSERT INTO tb_donar(Donar_Name,Donar_Id,Donar_Age,Donar_Blood_Group,Date_Of_Birth,Last_Date_Of_Donation,Gender,Address,Contact_No) VALUES('$_POST[Donar_Name]','$_POST[Donar_Id]','$_POST[Donar_Age]','$_POST[Donar_Blood_Group]','$_POST[Date_Of_Birth]','$_POST[Last_Date_Of_Donation]','$_POST[Gender]','$_POST[Address]','$_POST[Contact_No]')";
if(mysqli_query($conn,$sql))
{
	echo "1 row insert successfully";
}
else
{
    echo"not insert anything!!!!";
}
mysqli_close($conn);
?>