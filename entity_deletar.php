<?php
	include "bd_connection.php";
	$id = $_GET['id'];
	$sql = "DELETE from curso WHERE id = '$id'";
	$result = $conn->query($sql);

	echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=index.php'>";
?>