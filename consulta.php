<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT codpedido, codcli, descricao, valor, datapedido FROM pedidos";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "codpedido: " . $row["codpedido"]. " codcli: " . $row["codcli"]. " descricao:" . $row["descricao"]." valor:".$row["valor"]." 
datpedido:".$row["datapedido"]. "<br>"."<br>";
}
} else {
echo "0 results";
}
$conn->close();
?>