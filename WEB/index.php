<html>
<head>
	<?php require_once 'header.php';?>
	<script>
		function submeterForm(acao){ //submete o formulario mas passando...
			document.getElementById('acao').value = acao; //o valor do campo de texto escondido para o valor do botao clicado para selecionar a acao e...
			document.getElementById('f').submit(); //efetua a submissao do formulario
		}

		function mostrarInputs(){
			let acao = document.getElementById("select").value;

			// Esconde todos primeiro
			document.querySelectorAll(".campo").forEach(e => e.style.display = "none");

			if(acao === "c"){
				document.getElementById("id").style.display = "none";
				document.getElementById("nome").style.display = "block";
				document.getElementById("preco").style.display = "block";
				document.getElementById("estoque").style.display = "block";
				document.getElementById("imagem").style.display = "block";
			}
			else if(acao === "r"){
				document.getElementById("id").style.display = "none";
				document.getElementById("nome").style.display = "block";
				document.getElementById("preco").style.display = "none";
				document.getElementById("estoque").style.display = "none";
				document.getElementById("imagem").style.display = "none";
			}
			else if(acao === "u"){
				document.getElementById("id").style.display = "block";
				document.getElementById("nome").style.display = "block";
				document.getElementById("preco").style.display = "block";
				document.getElementById("estoque").style.display = "block";
				document.getElementById("imagem").style.display = "block";
			}
			else if(acao === "d"){
				document.getElementById("id").style.display = "block";
				document.getElementById("nome").style.display = "none";
				document.getElementById("preco").style.display = "none";
				document.getElementById("estoque").style.display = "none";
				document.getElementById("imagem").style.display = "none";
			}
		}
	</script>
	<title> CRUD World</title>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<?php require_once 'navbar.php';?>
			<div class="col-10 offset-2">
				<?php
				// TABELA
					$verde = 0;
					$con = new mysqli("127.0.0.1:3306", "root", "", "bd_mundo"); 
					$sql = "select * from produtos_alcantara";
					$res = $con->query($sql); 
					if(mysqli_num_rows($res) > 0){ //checa se foram encontrados resultados
						echo("<table>"); //daqui pra baixo estamos montando a tabela
						echo("<tr><th class='id'>ID</th><th>Nome</th><th>Preço</th><th>Estoque</th><th>Imagem</th></tr>"); //cabecalho da tabela
						while($campo = $res->fetch_assoc()){ //para cada linha de resultado recuperada da consulta monta uma linha em <table>
							if($verde == 0){
								echo '<tr class="sim">'; 
								$verde = 1;
							}
							else{
								echo '<tr class="nao">'; 
								$verde = 0;
							}
							echo("<td>".$campo["id_produto"]."</td>"); //seleciona o valor no campo 'idprod' para a execucao do laco atual do while
							echo("<td>".$campo["nm_produto"]."</td>"); //seleciona o valor no campo 'nome' para a execucao do laco atual do while
							echo("<td>"."R$".$campo["preco"]."</td>"); //seleciona o valor no campo 'idprod' para a execucao do laco atual do while
							echo("<td>".$campo["estoque"]."</td>"); //seleciona o valor no campo 'idprod' para a execucao do laco atual do while
							echo("
								<td class='img' style=\"--img:url('".$campo["imagem"]."');\">
									".$campo["imagem"]."
								</td>
							"); //seleciona o valor no campo 'imagem' para a execucao do laco atual do while
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