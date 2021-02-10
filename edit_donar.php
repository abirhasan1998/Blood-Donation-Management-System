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


<div class="php" style="text-align: center; padding-left: 35%;">

 <?php
 $con = mysqli_connect('localhost','root','');
   mysqli_select_db($con,'db_blood');
   if(isset($_GET['Donar_Id']))
   {
   $sql="SELECT * FROM tb_donar where Donar_Id='$_GET[Donar_Id]'";
   $res=mysqli_query($con,$sql);
     
while($row=mysqli_fetch_array($res))
    {
      echo"<tr><form action='update_donar.php'method=post class='clo'>";
	   echo "<table style='width:500px; margin:0px; color:black;  text-align: center; padding:8px;' border='8' bgcolor='LightCyan '>";
	  echo"<br>";
      echo"<tr><td>Donar_Name </td><td><input type=text name=Donar_Name value='".$row['Donar_Name']."'</td></tr>";
	   echo"<br>";
      echo"<tr><td>Donar_Id   </td><td><input type=text name=Donar_Id value='".$row['Donar_Id']."'</td></tr>";
	   echo"<br>";
       echo"<tr><td>Donar_Blood_Group </td><td><input type=text name=Donar_Blood_Group value='".$row['Donar_Blood_Group']."'</td></tr>";
	    echo"<br>";
      echo"<tr><td>Address </td><td><input type=text name=Address value='".$row['Address']."'</td></tr>";
	   echo"<br>";
       echo"<tr><td>Contact_No </td><td><input type=text name=Contact_No value='".$row['Contact_No']."'</td></tr>";
      echo"<br>";
      echo"<input type=hidden name=Donar_Id value='".$row['Donar_Id']."'>";
	   echo"<br>";
	    echo"<br>";
      echo"<td><input type=submit class='btn'>";
      echo"</form></td>";

  }
}
   
?> 
</div>
<div>
	<footer id="ft">
	
		<br>Copyright Reserved @Md.Abir Hasan Id:17203067 Section:F <br>
		
	</footer>
</div>
</body>
</html>

