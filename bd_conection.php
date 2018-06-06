<?php
$curso = $_POST['nome'];
$sala = $_POST['telefone'];
$campus = $_POST['email'];
$bloco = $_POST['email'];
$andar = $_POST['email'];

include "bd_connection.php";

$sql = "INSERT INTO cursos(curso, sala, campus, bloco, andar) VALUES ('$curso', '$sala', '$campus', $bloco, $andar)";

$conn->query($sql);

echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=index.php'>";
?>