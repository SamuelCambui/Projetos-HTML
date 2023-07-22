<?php

$user = $_POST ["usu"] ."<br>";
$senha =  $_POST ["sen"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "escola";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO escola (al_user, al_password)
VALUES ($user,$senha)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>




<script>
alert('Cadastrado com sucesso');
location.href = "index.html";
</script>
