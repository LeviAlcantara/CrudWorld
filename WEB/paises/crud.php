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
		$pais = $_POST["pais"];
		$nome = $_POST["nome"];
		$populacao = $_POST["populacao"];
		$idioma = $_POST["idioma"];
		$continente = $_POST["continente"] ?? '';
		$acao = $_POST["acao"];

		session_start();

		//CREATE
		if($acao == "c"){ 
			$sql = "insert into paises (nome, populacao, idioma, continente) values ('$nome', '$populacao', '$idioma', '$continente')"; 
			$res = $con->query($sql); 
			header("location: ".$_SERVER['HTTP_REFERER']);
		}

		//READ
		//TABELA
			echo '<button onclick="window.history.back()">Voltar</button> <br>';
			$cor = 0;
			$sql = "select * from paises where nome='$nome'";
			$res = $con->query($sql); 
			if(mysqli_num_rows($res) > 0){ //checa se foram encontrados resultados
				echo("<table>"); //daqui pra baixo estamos montando a tabela
				echo("<tr><th class='id'>País</th><th>Nome</th><th>População</th><th>Idioma</th><th>Continente</th></tr>"); //cabecalho da tabela
				while($campo = $res->fetch_assoc()){ //para cada linha de resultado recuperada da consulta monta uma linha em <table>
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
					

		//UPDATE
		if($acao == "u"){ 
			$sql = "update paises set nome='$nome', populacao='$populacao', idioma='$idioma', continente='$continente' where pais='$pais'";
			$res = $con->query($sql);

			header("location: ".$_SERVER['HTTP_REFERER']); 
		}

		//DELETE
		if($acao == "d"){ 
			$sql = "delete from cidades where pais='$pais'"; 
			$res = $con->query($sql); 
			$sql = "delete from paises where pais='$pais'"; 
			$res = $con->query($sql); 

			header("location: ".$_SERVER['HTTP_REFERER']); 
		}

		$con->close(); 
	?>
</body>
</html>
