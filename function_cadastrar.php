<html>
	<head>
		<title>Cursos</title>
		<link rel="stylesheet" type="text/css" href="style.css">
 	</head>
	<body>
		<?php include "head.php" ?>
		<form method="post" action="entity_cadastrar.php">
			<label>Curso:</label>
			<input type="text" required="required" name="curso"> <br />
			<label>Sala:</label>
			<input type="text" required="required" name="sala"> <br />
			<label>Campus:</label>
			<input type="email" required="required" name="campus"> <br />
			<label>Bloco:</label>
			<input type="text" required="required" name="bloco"> <br />
			<label>Andar:</label>
			<input type="text" required="required" name="andar"> <br />
			<input type="submit" name=""> 
			<input type="reset" name="" value="Apagar">
		</form>
	</body>
</html>
