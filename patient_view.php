<!DOCTYPE html>
<html>
<head>
	<title>
		Blood Donation Database</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="../project/style/style.css">
	

</head>
<body id="h">
		<div id="hh"><h1><marquee behavior="alternate" >Welcome to Blood Donation Management System</marquee></h1></div>

<div >
	<img id="logo" src="picture/abir15.jpg" >
<nav id="mn">
	<ul >
		<li><a href="../project/project.html">Home</a></li>
		<li><a href="#">Insert</a>
		<ul>
				<li><a href="../project/patient.html">Patient</a></li>
				<li><a href="../project/donar.html">Donar</a></li>
				<li><a href="../project/employee.html">Employee</a></li>
			</ul>
		</li>
		<li><a href="#">Search</a>
			<ul>
				<li><a href="../project/patient_search.php">Patient</a></li>
				<li><a href="../project/donar_search.php">Donar</a></li>
				<li><a href="../project/employee_search.php">Employee</a></li>

			</ul>

		</li>
		<li><a href="#">View</a>
			<ul>
				<li><a href="../project/patient_view.php">Patient</a></li>
				<li><a href="../project/donar_view.php">Donar</a></li>
				<li><a href="../project/employee_view.php">Employee</a></li>

			</ul>

		</li>
		<li><a href="../project/blood_report.php"">Report</a></li>
	</ul>
</nav>
</div>

<header><div class="nav">
</header>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_blood";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM tb_patient";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
	{
     echo "<table style='width:300px; margin:0px; color:black; padding:8px;' border='8' bgcolor='LightCyan '>";
      echo"<tr><th colspan='5'><h3>Patient All Information</h3></th></tr>";
	  echo"<tr>";
	  echo"<td><h4>Patient_Name</h4></td>";
	  echo "<td><h4>Patient_Id</h4></td>";
	  echo "<td><h4>Patient_Blood_Group</h4></td>";
      echo "<td><h4>Address</h4></td>";
	  echo "<td><h4>Contact_No</h4></td>";
	   echo "<td><h4>Delete</h4></td>";
	   echo "<td><h4>Update</h4></td>";
	   echo "<td><h4>print</h4></td>";
	   
	  echo "</tr>";
	   //<table><tr><th>Name</th><th>ID</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
		// echo"<tr>";
		 //echo"<td>".$row['name']."</td>";
		  //echo"<td>".$row['id']."</td>";
        echo "<tr><td>"  . $row["Patient_Name"]."</td><td>". $row["Patient_Id"]."</td><td>" . $row["Patient_Blood_Group"]."</td><td>" . $row["Address"]."</td><td>" . $row["Contact_No"];
		echo "<td><a href=delete_patient.php?Patient_Id=".$row['Patient_Id'].">Delete</a></td>";
		echo "<td><a href=edit_patient.php?Patient_Id=".$row['Patient_Id'].">Update</a></td>";
		echo "<td><a href=patient_print.php?Patient_Id=".$row['Patient_Id'].">print</a></td>";
		//echo"</tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$conn->close();
?>  <br>
<div style="text-align: center;">
    <button type="button" onclick="location.href='http://localhost/project/project.html'">Back</button>
</div>

<div >
	<footer id="ft">
			<br>Copyright Reserved @Md.Abir Hasan Id:17203067 Section:F <br>
	</footer>
</div>
</body>

</html>


</body>
</html>