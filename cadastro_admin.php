<?php
    include_once('estacionamentoDao_admin.php');
    
    print_r($_POST);

    $id_placa = $_POST['id_placa'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $ano_modelo = $_POST['ano_modelo'];
    $cor = $_POST['cor'];


    insereCarro($id_placa, $marca, $modelo, $ano_modelo, $cor);

    header('Location:home_admin.php');
?>