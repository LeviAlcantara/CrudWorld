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

				// Monta a URL da API
				$url = "https://restcountries.com/v3.1/name/" . urlencode($nome);

				// Faz a requisição à API
				$response = file_get_contents($url);

				// Se der erro de conexão
				if ($response === FALSE) {
					die("<p>❌ Erro ao acessar a API REST Countries.</p>");
				}

				// Converte o JSON em um array PHP
				$data = json_decode($response, true);

				// Se o país não for encontrado
				if (empty($data)) {
					die("<p>País não encontrado.</p>");
				}

				// Pega o primeiro resultado
				$country = $data[0];

				// Pega os dados principais
				$capital = $country['capital'][0] ?? 'Sem capital';
				$bandeira = $country['flags']['png'] ?? '';
				$moedas = $country['currencies'] ?? [];

				// Monta o nome e símbolo da moeda
				if (!empty($moedas)) {
					$codigo = array_key_first($moedas);
					$nome_moeda = $moedas[$codigo]['name'] ?? 'Desconhecida';
					$simbolo_moeda = $moedas[$codigo]['symbol'] ?? '';
				} else {
					$nome_moeda = 'Desconhecida';
					$simbolo_moeda = '';
				}

				// Exibe o resultado
				echo "<h2>🌍 Informações sobre {$nome}</h2>";
				echo "<img src='{$bandeira}' alt='Bandeira de {$nome}' width='200'><br><br>";
				echo "<p><strong>Capital:</strong> {$capital}</p>";
				echo "<p><strong>Moeda:</strong> {$nome_moeda} ({$simbolo_moeda})</p>";


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
