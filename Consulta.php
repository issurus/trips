<?php
error_reporting(0); 

$Nom = $_POST["Nom"]; 

$Email = $_POST["Email"]; 
$Telefon = $_POST["Telefon"]; 
$Activitat = $_POST["Activitat"]; 


$Observacions = $_POST["Observacions"]; 
$Data=date("d/m/Y");

  $servername = "localhost";
$username = "u399325422_issur";
$password = "ac888476112";
$dbname = "u399325422_mont";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



$sql = "SELECT Nom,Email,Telefon,Activitat,Observacions,Data FROM caminants";
$result = $conn->query($sql);
?>
<tr>
 <?php
if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {
    	

         echo "<br>".

		 " Nom....................................". $row["Nom"]. "<br>" . 
		 " Activitat....................".$row["Activitat"]."<br>".
		 " Data Enviament.........................".$row["Data"]."<br>".
         " Observacions...................".$row["Observacions"]."<br>".    
 		  	
 		 " -----------------------------------------------------------------------------------<br>"; 

    }
} else {
    echo "0 results";
}


$conn->close();
?>

<html>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;menu principal <p><a href="caminants.html" value= "Pincipal"><img src="HOME.jpg" width="100" height="100"></a>
</html>




