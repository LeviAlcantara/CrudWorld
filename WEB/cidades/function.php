<script>
    function submeterForm(acao){ //submete o formulario mas passando...
        document.getElementById('acao').value = acao; //o valor do campo de texto escondido para o valor do botao clicado para selecionar a acao e...
        document.getElementById('f').submit(); //efetua a submissao do formulario
    }

    function mostrarInputs(){
        let acao = document.getElementById("select").value;

        if(acao === "c"){
            document.getElementById("cidade").style.display = "none";
            document.getElementById("nome").style.display = "block";
            document.getElementById("populacao").style.display = "block";
            document.getElementById("pais").style.display = "block";
        }
        else if(acao === "r"){
            document.getElementById("cidade").style.display = "none";
            document.getElementById("nome").style.display = "block";
            document.getElementById("populacao").style.display = "none";
            document.getElementById("pais").style.display = "none";
        }
        else if(acao === "u"){
            document.getElementById("cidade").style.display = "block";
            document.getElementById("nome").style.display = "block";
            document.getElementById("populacao").style.display = "block";
            document.getElementById("pais").style.display = "block";
        }
        else if(acao === "d"){
            document.getElementById("cidade").style.display = "block";
            document.getElementById("nome").style.display = "none";
            document.getElementById("populacao").style.display = "none";
            document.getElementById("pais").style.display = "none";
        }
    }
</script>