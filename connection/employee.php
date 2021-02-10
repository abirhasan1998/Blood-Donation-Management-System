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
	echo("successfully connected!!!!!!!");
}
$sql="INSERT INTO tb_employee(Employee_Name,Employee_Id,Employee_Age,Employee_Designation,Date_Of_Birth,Gender,Address,Contact_No) VALUES('$_POST[Employee_Name]','$_POST[Employee_Id]','$_POST[Employee_Age]','$_POST[Employee_Designation]','$_POST[Date_Of_Birth]','$_POST[Gender]','$_POST[Address]','$_POST[Contact_No]')";
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