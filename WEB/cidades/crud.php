<html>
<head>
	<link rel="stylesheet" href="../css/style.css">
	<title>CRUD World - Read</title>
</head>
<body>
	<?php
		if(!$_POST){
			header("Location: index.php");
		}
		//Chamando e iniciando a conexão ao banco
		require_once '../conexao.php';
		
		//Recuperando valor das variaveis do formulario
		$cidade = $_POST["cidade"];
		$nome = $_POST["nome"];
		$populacao = $_POST["populacao"];
		$pais = $_POST["pais"] ?? '';
		$acao = $_POST["acao"];

		session_start();

		//CREATE
		if($acao == "c"){ 
			$sql = "insert into cidades (nome, populacao, pais) values ('$nome', '$populacao', '$pais')"; 
			$res = $con->query($sql); 
			header("location: ".$_SERVER['HTTP_REFERER']);
		}

		//READ
		//TABELA
			echo '<button onclick="window.history.back()">Voltar</button> <br>';
			$cor = 0;
			$sql = "select c.cidade, c.nome, c.populacao, p.nome as pais 
					from cidades c 
					join paises p on c.pais = p.pais 
					where c.nome = '$nome'";

			$res = $con->query($sql); 
			if(mysqli_num_rows($res) > 0){ //checa se foram encontrados resultados
				echo("<table>"); 
				echo("<tr> <th class='id'>Cidades</th> <th>Nome</th> <th>População</th> <th>País</th> </tr>"); 
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
				echo("</table>"); 
			}
			else{ //nenhum dado na tabela
				echo "nenhum dado inserido por enquanto";
			}
					

		//UPDATE
		if($acao == "u"){ 
			$sql = "update cidades set nome='$nome', populacao='$populacao', pais='$pais' where cidade='$cidade'";
			$res = $con->query($sql);

			header("location: ".$_SERVER['HTTP_REFERER']); 
		}

		//DELETE
		if($acao == "d"){ 
			$sql = "delete from cidades where cidade='$cidade'"; 
			$res = $con->query($sql); 
			header("location: ".$_SERVER['HTTP_REFERER']); 
		}

		$con->close(); 
	?>
</body>
</html>
