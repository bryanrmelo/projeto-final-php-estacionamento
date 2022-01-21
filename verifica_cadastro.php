<?php

date_default_timezone_set('America/Sao_Paulo');

include_once("conexao.php");

include_once('estacionamentoDao.php');

$conexao = criaConexao();

$placa = $_POST['ID-CAR'];

$listaCarros = buscaTodosCarros();

$listahoras = buscaEntradaSaida();

$data = date("y-m-d H:i:s");

$exist = FALSE;

$hr_de_entrada = FALSE;

$hr_de_saida = FALSE;

foreach ($listaCarros as $value) {
    if ($placa == $value['id_placa']){
            //echo("ok");
            $exist = TRUE;
            //print_r($listaCarros);
            break;
    }
  
}

if ($exist == TRUE){
    foreach ($listahoras as $value) {
        if ($placa == $value['veiculo']){
            $hr_de_entrada = TRUE;
            break;
        }
    }

    foreach ($listahoras as $value) {
        if ($placa == $value['veiculo']){
            if ($value['hr_saida'] != NULL){
                    //echo("ok");
                    $hr_de_saida = TRUE;
                    //print_r($listaCarros);
                    break;
            }
        }
    }

    if($hr_de_saida == FALSE){
        if ($hr_de_entrada == TRUE){
            $placa = $_POST['ID-CAR'];
            $date = $data;

            insereSaida($placa, $date);
            header('Location: valor.php');
            

        }else {
            include_once('estacionamentoDao.php');

            $placa = $_POST['ID-CAR'];
            $date = $data;

            insereEntrada($placa, $date);

            echo  "<script>alert('Registrada entrada: $data');</script>"; 

            echo '<a class="botoes cor-gradiente text-white" href="estacionamento.html" role="button">Voltar</a>';

        }
    } else{

        $sql = "DELETE FROM estacionamento.entrada_saida WHERE veiculo = :veiculo;";

        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(":veiculo", $placa);

        try {
            if ($stmt->execute()) {
                echo('
                <section>  
                <a class="btn btn-primary" href="estacionamento.html"> Tentar Novamente</a>
                </section>');
            } else {
                print_r($stmt->errorInfo());
            }
        } catch (PDOException $e) {
            echo "Erro na conexão. Erro gerado: " . $e->getMessage();
        }
    }

} else {

    echo '<form action="cadastro.php" method="POST"> 

    		<h1> <font color="#FF0000	"> Placa Não Cadastrada!</font> </h1>
            <section>  
                <a class="btn btn-primary" href="estacionamento.html"> Tentar Novamente</a>
            </section>

            <section>  
                <a class="btn btn-primary" href="telaAdicionaCarro.php"> Cadastrar Novo Veículo</a>
            </section>

    	</form>';

}