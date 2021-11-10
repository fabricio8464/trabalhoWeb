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
$sql = "INSERT INTO pedidos (codpedido, codcli, descricao, valor, datapedido)
VALUES (60, 30, 'Caneta', 30.15, 3004202)";
if ($conn->query($sql) === TRUE) {
echo "Inclusao com sucesso";
} else {
echo "Falha na inclusao : " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>

