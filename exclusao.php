<?php

$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "test";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Falha na conexao : " . $conn->connect_error);
}
$sql = "DELETE FROM `pedidos` WHERE `pedidos`.`codpedido` = 60 ";
if ($conn->query($sql) === TRUE) {
echo "Exclusao com sucesso";
} else {
echo "Exclusao na alteracao : " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>