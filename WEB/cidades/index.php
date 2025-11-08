<html>
<head>
	<?php
		require_once 'header.php';
		require_once 'function.php';
		require_once '../conexao.php';
	?>
	<title> CRUD World - Cidades</title>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<?php require_once 'navbar.php';?>
			<div class="col-9 offset-3">
				<?php
				// TABELA
					$cor = 0;
					$sql = "select * from cidades";
					$res = $con->query($sql); 
					if(mysqli_num_rows($res) > 0){ //checa se foram encontrados resultados
						echo("<table>"); 
						echo("<tr> <th class='id'>Cidade</th> <th>Nome</th> <th>População</th> <th>País</th> </tr>");
						while($campo = $res->fetch_assoc()){ 
							if($cor == 0){
								echo '<tr class="sim">'; 
								$cor = 1;
							}
							else{
								echo '<tr class="nao">'; 
								$cor = 0;
							}
							echo("<td>".$campo["cidade"]."</td>");
							echo("<td>".$campo["nome"]."</td>"); 
							echo("<td>".$campo["populacao"]."</td>");
							echo("<td>".$campo["pais"]."</td>");
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