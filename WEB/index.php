<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once 'header.php'; ?>
    <title></title>
</head>
<body>
    <?php require_once 'navbar.php'; ?>
    <div class="tab-content" id="pills-tabContent">
        <div class="container-fluid">
            <div class="tab-pane fade show active" id="pills-criar" role="tabpanel" aria-labelledby="pills-criar-tab">
                <?php 
                    require_once 'crud-p/criar.php';
                    require_once 'crud-c/criar.php';
                ?>
            </div>
            <div class="tab-pane fade" id="pills-consultar" role="tabpanel" aria-labelledby="pills-consultar-tab">
                <?php 
                    require_once 'crud-p/consultar.php';
                    require_once 'crud-c/consultar.php';
                ?>
            </div>
            <div class="tab-pane fade" id="pills-alterar" role="tabpanel" aria-labelledby="pills-alterar-tab">
                <?php 
                    require_once 'crud-p/alterar.php';
                    require_once 'crud-c/alterar.php';
                ?>
            </div>
            <div class="tab-pane fade" id="pills-deletar" role="tabpanel" aria-labelledby="pills-deletar-tab">
                <?php 
                    require_once 'crud-p/deletar.php';
                    require_once 'crud-c/deletar.php';
                ?>
            </div>
        </div>
    </div>
</body>
</html>