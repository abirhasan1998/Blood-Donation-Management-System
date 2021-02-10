<!DOCTYPE html>
<html>
<head>
	<title>
		Blood Donation Database</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="../project/style/style.css" media="all" />
	

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
  $dbName = "db_blood";
  $connection = mysqli_connect($servername, $username, $password, $dbName);
  if ($connection) {
  } else {
    die("Connection failed.".mysqli_connect_error());
  }
  $query="SELECT * FROM tb_donar";
  $res= mysqli_query($connection,$query);
  ?>
<h2>Search Donar</h2>

<div class= "body" style=";padding-left: 200px">
<form action="" method="POST">
  <h3>Enter Donar ID>>></h3>
  <select name="E_ID">
	<?php 
		while($row1= mysqli_fetch_array($res)):;
	?>
	<option value="<?php echo $row1['Donar_Id']; ?>">
		<?php
			echo $row1['Donar_Id'];
		?>
	</option>
	<?php
		endwhile;
	?>
  </select>
  <button>Search</button>
</form>
</div>

<div class="employee">

  <?php
		$a=filter_input(INPUT_POST,'E_ID');
	  $SQL = "SELECT * FROM tb_donar WHERE '".$a."' IN (Donar_Id);";
		  $result=mysqli_query($connection,$SQL);
		  if(!$result || mysqli_num_rows($result) > 0)
			{
			  echo "<table><tr><th>Donar_Name</th><th>Donar_Id</th><th>Donar_Blood_Group</th><th>Address</th><th>Contact_No</th></tr>";
			  while($row=mysqli_fetch_array($result))
				{  
				  echo "<tr><td>".$row['Donar_Name']."</td><td>".$row['Donar_Id']."</td><td>".$row['Donar_Blood_Group']."</td><td>".$row['Address']."</td><td>".$row['Contact_No']."</td></tr>";
				}
			  echo "</table>";
			}
	
	mysqli_close($connection);

  ?>
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