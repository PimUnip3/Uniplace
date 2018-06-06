<?php include "head.php" ?>
        <script language= 'javascript'>
		<!--
			function editar(id, nome, email) {
				location.href="function_editarUsuario.php?id="+id+"&nome="+nome+"&email="+email;
			}
			function aviso(id){
				var x = confirm(' Deseja realmente excluir? ');
				if(x == true)
				{
					window.alert(' Usuário excluido com sucesso!');
					location.href="entity_deletarUsuario.php?id="+id;
				}	
				else
				{
					return false;
				}
			}
			function resetSenha(id){
				var x = confirm(' Deseja realmente resetar a senha? ');
				if(x == true)
				{
					window.alert(' Senha resetada com sucesso!');
					location.href="entity_resetSenhaUsuario.php?id="+id;
				}	
				else
				{
					return false;
				}
			}
		//-->
		</script>
              </br>
        <a href="function_cadastrarUsuario.php">Cadastrar Usuário</a>

        <br /><br />
        <form method="post" action="entity_pesquisarUser.php">
			<label>Pesquisar pelo ID:</label>			
			<input type="text" name="id">
			<input type="submit" value="Procurar">
		</form>

        <?php

		include "bd_connection.php";

	
		$sql ="select * from usuarios";
		$result = $conn->query($sql);
		echo "<div class='col-sm-9 col-sm-offset-3 col-md-8 col-md-offset-0 main'>";
		echo "<table class='table'>";
		echo "<thead class='thead-inverse'>";
		echo "<tr>";
		echo "<th>id</th><th>Nome</th><th>Email</th><th>Perfil</th>";
		if($_SESSION['user_perfil'] == 'Admin') {
		echo "<th>Opções</th>";
		}
		echo "</tr>";
		echo "</thead>";
		echo "<tbody>";
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				/*echo "id: " . $row["id"]. " - Name: " . $row["nome"]. " " . $row["email"]. "<br>";*/
				
				
				echo "<tr>";
			
				echo "<th scope='row'> ".$row["id"]." </th>";
				echo "<td> ".$row["nome"]." </td>";
				echo "<td> ".$row["email"]." </td>";
				echo "<td> ".$row["perfil"]." </td>";
				if($_SESSION['user_perfil'] == 'Admin') {
				echo "<td>";
				echo "<input type='submit' value='Editar' onClick='editar";
				echo "(";
				echo $row['id'];
				echo ",";
				echo '"';
				echo $row['nome'];
				echo '"';
				echo ",";
				echo '"';
				echo $row['email'];
				echo '"';
				echo ")' ";
				echo ";>";
				
				echo "<input type='submit' value='Excluir' onclick= 'aviso(".$row['id'].");'>";
				echo "<input type='submit' value='ResetSenha' onclick= 'resetSenha(".$row['id'].");'>";
				
				echo "</td>";
				}

				echo "</tr>";

				

			}
			} else {
				echo "0 results";
			}
			echo "</tbody>";
			echo "</table>";

			echo "</div>";

			$conn->close();
			?>
		</div>
 <?php include "footer.php" ?>