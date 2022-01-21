<?php
include_once('estacionamentoDao.php');

include_once('conexao.php');

$conexao = criaConexao();

$listaHoras = buscaEntradaSaida();

foreach ($listaHoras as $value)

//$valor1 = $value['hr_entrada'];

//$valor2 = $value['hr_saida'];

$sql = "SELECT timediff(hr_saida, hr_entrada) FROM entrada_saida WHERE veiculo = :veiculo;";

$stmt = $conexao->prepare($sql);
$stmt->bindParam(":veiculo", $value['veiculo']);

try {
    $stmt->execute();
    $tempo = $stmt->fetch(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo $e->getMessage();
}

$h1 = explode(":",$tempo['timediff(hr_saida, hr_entrada)']);

$hora = $h1[0];

$valor = $hora;

if ($hora < 0);{
    $minuto = $h1[1];
    $valor = $minuto / 10;
}

$preco = ($valor * 6) * 3.5;

echo  "<script>alert('O valor a ser pago é de R$$preco.');</script>"; 

echo '<a class="botoes cor-gradiente text-white" href="estacionamento.html" role="button">Voltar</a>';

