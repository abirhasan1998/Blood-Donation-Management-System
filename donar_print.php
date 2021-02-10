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
?>
 
      <div id="printableArea">
        <h2 align="center"> Donar Information</h2>
        <table border="1" align="center">
    	
          <?php
          $id = $_GET["Donar_Id"];
          $sql = "SELECT * FROM tb_donar WHERE `Donar_Id` = '$id'";
          $result = mysqli_query($conn, $sql);

          if ($result->num_rows > 0) {
              echo "<table align=center border='1' cellpadding='10'><tr><th>Donar_Name</th><th>Donar_Id</th><th>Donar_Blood_Group</th><th>Address</th><th>Contact_No</th></tr>";
              // output data of each row
              while($row = $result->fetch_assoc()) {
              
                 echo "<tr><td>".$row['Donar_Name']."</td><td>".$row['Donar_Id']."</td><td>".$row['Donar_Blood_Group']."</td><td>".$row['Address']."</td><td>".$row['Contact_No']."</td></tr>";
              }
              echo "</table>";
          }
          else {
              echo "0 results";
          }

		 
          mysqli_close($conn);
          ?>
        </table>
      </div>

      <br><br>
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