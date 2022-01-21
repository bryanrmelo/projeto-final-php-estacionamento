<?php
include_once('estacionamentoDao.php');

    date_default_timezone_set('America/Sao_Paulo');


    $id_placa = $_POST['id_placa'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $ano_modelo = $_POST['ano_modelo'];
    $cor = $_POST['cor'];

    $data = date("y-m-d H:i:s");

    $placa = $_POST['id_placa'];

    insereCarro($id_placa, $marca, $modelo, $ano_modelo, $cor);

    insereEntrada($placa, $data);

    echo  "<script>alert('Registrada entrada: $data');</script>";

    echo '<a class="botoes cor-gradiente text-white" href="estacionamento.html" role="button">Voltar</a>';
