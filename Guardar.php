<?php 
error_reporting(0); 
$Nom = $_POST["Nom"]; 

$Email = $_POST["Email"]; 
$Telefon = $_POST["Telefon"]; 
$Activitat = $_POST["Activitat"]; 


$Observacions = $_POST["Observacions"]; 
$Data=date("d/m/Y");

$header = "Participant " . $Nom. ", \r\n"; 


$mensaje .= "Nom : " . $Nom . " \r\n"; 

$mensaje .= "Email " . $Email . " \r\n"; 
$mensaje .= "Telefon  " . $Telefon . " \r\n"; 
$mensaje .= "Activitat  " . $Activitat . " \r\n"; 
$mensaje .= "Observacions " . $Observacions . " \r\n"; 

$mensaje .= "Enviat el " . date("d/m/Y", time()); 

$para = "issurus@gmail.com"; 
$asunto = "Activitats"; 

if ($Nom === ""){echo "<script>alert('* * * ((( ** T´has oblidat d´entrar el nom ** ))) * * *');</script>";}
if ($Nom !== ""){

if(mail($para, $asunto, utf8_decode($mensaje), $header)){
echo "missatge enviat correctament"; 
 } else {
    echo "enviat malament";
  }

  $servername = "localhost";
$username = "u399325422_issur";
$password = "ac888476112";
$dbname = "u399325422_mont";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO caminants (Nom,Email,Telefon,Activitat,Observacions,Data)
VALUES ('$Nom','$Email','$Telefon','$Activitat','$Observacions','$Data')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully"."<br>";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>
<html>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;menu principal<p><a href="caminants.html" value= "Pincipal"><img src="HOME.jpg" width="100" height="100"></a>
</html>




