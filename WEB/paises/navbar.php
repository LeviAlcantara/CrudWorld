<!-- Parte Laranja -->
<div class="col-3 bg-color-orange">
    <form name="f" id="f" method="post" action="crud.php" enctype="multipart/form-data">
        <input type="text" name="acao" id="acao" class="campo form-control mb-2" style="display:none"></input><br>
        <select name="select" id="select" class="form-control mb-2" onchange="mostrarInputs()" required>
            <option value="" selected disabled>Escolha a ação</option>
            <option value="c">Criar</option>
            <option value="r">Consultar</option>
            <option value="u">Atualizar</option>
            <option value="d">Deletar</option>
        </select>
        <p>__________</p>
        <input type="text" name="pais" id="pais" class="campo form-control mb-2" value="" placeholder="Número do País" required></input><br>
        <input type="text" name="nome" id="nome" class="campo form-control mb-2" value="" placeholder="Nome do País" required></input><br>
        <input type="number" name="populacao" id="populacao" class="campo form-control mb-2" value="" placeholder="População" min="0" required></input><br>
        <input type="text" name="idioma" id="idioma" class="campo form-control mb-2" value="" placeholder="Idioma Princípal" required></input><br>
        <select name="continente" id="continente" class="form-control mb-2" required>
            <option value="" selected disabled>Escolha o Continente</option>
            <option value="América">América</option>
            <option value="Europa">Europa</option>
            <option value="África">África</option>
            <option value="Ásia">Ásia</option>
            <option value="Oceania">Oceania</option>
        </select>
        <input type="submit" value="Enviar" class="btn btn-secondary" onclick="submeterForm(document.getElementById('select').value)"></input>
    </form>
</div>