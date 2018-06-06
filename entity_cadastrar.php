<?php
 //campos de cadastro
$curso = $_POST['curso'];
$sala = $_POST['sala'];
$campus = $_POST['campus'];
$bloco = $_POST['bloco'];
$andar = $_POST['andar'];

include "bd_connection.php";

$sql = "INSERT INTO contatos(curso, sala, campus, bloco, andar) VALUES ('$curso', '$sala', '$campus', '$bloco', '$andar')";

$conn->query($sql);

echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=index.php'>";

?>