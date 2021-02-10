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
</header>

<div >
	<footer id="ft">
	
		<br>Copyright Reserved @Md.Abir Hasan Id:17203067 Section:F <br>
		
	</footer>
</div>
</body>
</html>
		
	<hr>
	<br><br>
	<div id="printableArea">
<h1 align=center><b>Total View Form</b></h1>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_blood";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = 'SELECT 	tb_donar.Donar_Name,tb_donar.Donar_Blood_Group,tb_donar.Contact_No,tb_patient.Patient_Name,tb_patient.Patient_Blood_Group,tb_patient.Contact_No,tb_employee.Employee_Name,tb_employee.Employee_Designation,tb_employee.Contact_No
   FROM ((tb_donar INNER JOIN tb_patient ON tb_donar.Donar_Id = tb_patient.Patient_Id)
              INNER JOIN tb_employee ON tb_donar.Donar_Id = tb_employee.Employee_Id)';

$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    echo "<table align=center border=1 ><tr><th>Donar_Name</th><th>Donar_Blood_Group</th><th>Contact_No</th><th>Patient_Name</th><th>Patient_Blood_Group</th><th>Contact_No</th><th>Employee_Name</th><th>Employee_Designation</th><th>Contact_No</th></tr>";
    // output data of each row
   while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["Donar_Name"]."</td><td>".$row["Donar_Blood_Group"]."</td><td>".$row["Contact_No"]."</td><td>".$row["Patient_Name"]."</td><td>".$row["Patient_Blood_Group"]."</td><td>".$row["Contact_No"]."</td><td>".$row["Employee_Name"]."</td><td>".$row["Employee_Designation"]."</td><td>".$row["Contact_No"]."</td>";
		
		echo "</tr>";
    }
    echo "</table>";
}
else {
    echo "0 results";
}


mysqli_close($conn);
?>
</div>
<br> <br>
<center><input type="button" onclick="printDiv('printableArea')" value="Print" /></center>

      <script>
      function printDiv(divName) {
          var printContents = document.getElementById(divName).innerHTML;
          var originalContents = document.body.innerHTML;
          document.body.innerHTML = printContents;
          window.print();
          document.body.innerHTML = originalContents;
      }
    </script>
