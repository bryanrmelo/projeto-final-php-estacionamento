<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estacionamento</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
</head>

<?php
    include_once('estacionamentoDao_admin.php');
    $listaCarros = buscaTodosCarros();
    
    foreach ($listaCarros as $value);        
?>
 
<body>
    <div class="container">
        <section>
            <table class="table table-striped">
                <thead>

                    <tr>
                        <th>Placa</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Ano</th>
                        <th>Cor</th>
                    </tr>

                </thead>
                <tbody>
                    <?php foreach ($listaCarros as $value) { ?>
                        <tr>
                            <td><?php echo $value['id_placa'] ?></td>
                            <td><?php echo $value['marca'] ?></td>
                            <td><?php echo $value['modelo'] ?></td>
                            <td><?php echo $value['ano_modelo'] ?></td>
                            <td><?php echo $value['cor'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </section>
        <section>
            <a class="btn btn-primary" href="telaAdicionaCarro_admin.php" role="button">Cadastrar Novo Veículo</a>
            <br>
            <br>
            <a class="btn btn-primary" href="logout.php"> Sair </class> </a> 
        </section>
        <section>
            <br>
            <br>
        </section>
    </div>

</body>
</html>