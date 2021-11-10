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
$sql = "UPDATE pedidos SET datapedido = 30042020 where codpedido=60";
if ($conn->query($sql) === TRUE) {
echo "Alteracao com sucesso";
} else {
echo "Falha na alteracao : " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>

