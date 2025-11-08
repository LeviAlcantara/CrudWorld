<html>
<head>
	<?php
		require_once 'header.php';
		require_once 'function.php';
		require_once '../conexao.php';
	?>
	<title> CRUD World - Paises</title>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<?php require_once 'navbar.php';?>
			<div class="col-9 offset-3">
				<?php
				// TABELA
					$cor = 0;
					$sql = "select * from paises";
					$res = $con->query($sql); 
					if(mysqli_num_rows($res) > 0){ //checa se foram encontrados resultados
						echo("<table>"); 
						echo("<tr> <th class='id'>País</th> <th>Nome</th> <th>População</th> <th>Idioma</th> <th>Continente</th> </tr>");
						while($campo = $res->fetch_assoc()){ 
							if($cor == 0){
								echo '<tr class="sim">'; 
								$cor = 1;
							}
							else{
								echo '<tr class="nao">'; 
								$cor = 0;
							}
							echo("<td>".$campo["pais"]."</td>");
							echo("<td>".$campo["nome"]."</td>"); 
							echo("<td>".$campo["populacao"]."</td>");
							echo("<td>".$campo["idioma"]."</td>");
							echo("<td>".$campo["continente"]."</td>");
							echo("</tr>");
						}
						echo("</table>"); //finaliza a tabela
					}
					else{ //nenhum dado na tabela
						echo "nenhum dado inserido por enquanto";
					}
				?>
			</div>
		</div>
	</div>
	<footer>2025 - Levi Aparecido</footer>
<body>
</html>