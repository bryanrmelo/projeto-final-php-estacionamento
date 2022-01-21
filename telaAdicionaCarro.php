<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estacionamento</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>



<body>    
    <div class="container">
        <form action="cadastro.php" method="POST">
            <div class="mb-3">
                <label for="ImputPlaca" class="form-label">Placa</label>
                <input type="text" class="form-control" name="id_placa" id="ImputPlaca">
            </div>
            <div class="mb-3">
                <label for="ImputMarca" class="form-label">Marca</label>
                <input type="text" class="form-control" name="marca" id="ImputMarca">
            </div>
            <div class="mb-3">
                <label for="ImputModelo" class="form-label">Modelo</label>
                <input type="text" class="form-control" name="modelo" id="ImputModelo">
            </div>
            <div class="mb-3">
                <label for="ImputAno" class="form-label">Ano</label>
                <input type="text" class="form-control" name="ano_modelo" id="ImputAno">
            </div>
            <div class="mb-3">
                <label for="ImputCor" class="form-label">Cor</label>
                <input type="text" class="form-control" name="cor" id="ImputCor">
            </div>
            <a class="btn btn-outline-primary" href="estacionamento.html" role="button">Voltar</a>
            <button type="submit" href="estacionamento.html" class="btn btn-primary">Cadastrar Carro</button>
        </form>
    </div>

</body>

</html>