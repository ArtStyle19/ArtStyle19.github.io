<?php
$name = $_POST['input-name'];
$lastName = $_POST['input-lastName'];
$email = $_POST['input-email'];
$dni = $_POST['input-dni'];
$phoneNumber = $_POST['input-cel'];

if($conn->connect_error){
  die('Connection has failed: '.$conn->connect_error);
} else{
  $stmt=$conn->prepare("insert into registro(nombres, apellidos, correo, dni, celular) values(?,?,?,?,?)");
  $stmt->bind_param("sssss", $name, $lastName, $email, $dni, $phoneNumber);
  $stmt->execute();
  echo "<h1 style='color:green'> Form sent succesfuly </h1>";
  $stmt->close();
  $conn->close();
}
?>
