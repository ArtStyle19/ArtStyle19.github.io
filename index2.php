 <?php

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT nombres, apellidos, correo, dni, celular FROM registro";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Nombres: " . $row["nombres"].
         " Apellidos: " . $row["apellidos"].
         " Correo: " . $row["correo"].
         " DNI: ".$row["dni"].
         " Cel: ".$row["celular"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?> 