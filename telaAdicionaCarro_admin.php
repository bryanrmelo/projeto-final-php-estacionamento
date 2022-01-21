<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estacionamento</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<?php
include_once('verifica_sessao.php');
if ($_SESSION['nome_usuario'] == 'admin' && $_SESSION['senha_usuario'] == 'master')
?>

<body>
    <div class="container" style="border: 4px solid black; padding: 0; margin-top: 5%;">
        <form action="cadastro_admin.php" method="POST">
            <div class="imagem-topo">
                <h4 class="text-center text-white">
                    <b>Estacionamento</b>
                </h4>
            </div>
            <div class="mb-3 usuario" style="margin: 40px 0 40px 0; padding: 0 40px 0 40px;">
                <label for="ImputPlaca" class="form-label">Placa</label>
                <input type="text" class="form-control" name="id_placa" id="ImputPlaca">
            </div>
            <div class="mb-3 usuario" style="margin: 40px 0 40px 0; padding: 0 40px 0 40px;">
                <label for="ImputMarca" class="form-label">Marca</label>
                <input type="text" class="form-control" name="marca" id="ImputMarca">
            </div>
            <div class="mb-3 usuario" style="margin: 40px 0 40px 0; padding: 0 40px 0 40px;">
                <label for="ImputModelo" class="form-label">Modelo</label>
                <input type="text" class="form-control" name="modelo" id="ImputModelo">
            </div>
            <div class="mb-3 usuario" style="margin: 40px 0 40px 0; padding: 0 40px 0 40px;">
                <label for="ImputAno" class="form-label">Ano</label>
                <input type="text" class="form-control" name="ano_modelo" id="ImputAno">
            </div>
            <div class="mb-3 usuario" style="margin: 40px 0 40px 0; padding: 0 40px 0 40px;">
                <label for="ImputCor" class="form-label">Cor</label>
                <input type="text" class="form-control" name="cor" id="ImputCor">
            </div>
            <div class="container" style="margin: 40px 0 40px 0;">
                <a class="botoes cor-gradiente text-white link" style="margin-right: 20px" href="home_admin.php" role="button">Voltar</a>
                <button type="submit" class="botoes cor-gradiente text-white link">Cadastrar Carro</button>
            </div>

        </form>
    </div>

</body>

</html>