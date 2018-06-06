<?php

	$id = $_POST['id'];
	$curso = $_POST['curso'];
	$sala = $_POST['sala'];
	$campus = $_POST['campus'];
	$bloco = $_POST['bloco'];
	$andar = $_POST['andar'];

	include "bd_connection.php";

	$sql = "UPDATE cursos SET curso = '$curso', sala = '$sala', campus = '$campus', bloco = '$bloco', andar = '$andar', WHERE id = '$id'";

	$conn->query($sql);

	echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=index.php'>";
?>