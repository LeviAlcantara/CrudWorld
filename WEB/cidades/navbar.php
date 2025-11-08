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
        <input type="text" name="cidade" id="cidade" class="campo form-control mb-2" value="" placeholder="Número da Cidade" required></input><br>
        <input type="text" name="nome" id="nome" class="campo form-control mb-2" value="" placeholder="Nome da Cidade" required></input><br>
        <input type="number" name="populacao" id="populacao" class="campo form-control mb-2" value="" placeholder="População" min="0" required></input><br>
        <select name="pais" id="pais" class="form-control mb-2" required>
            <option value="" selected disabled>Escolha o País</option>
            <?php
                require_once '../conexao.php'; 
                $sql = "select pais, nome from paises order by nome asc";
                $res = $con->query($sql);
                
                if ($res && $res->num_rows > 0) {
                    while ($linha = $res->fetch_assoc()) {
                        echo "<option value='".$linha['pais']."'>".$linha['nome']."</option>";
                    }
                } else {
                    echo "<option disabled>Nenhum país encontrado</option>";
                }
            ?>
        </select>
        <input type="submit" value="Enviar" class="btn btn-secondary" onclick="submeterForm(document.getElementById('select').value)"></input>
    </form>
</div>