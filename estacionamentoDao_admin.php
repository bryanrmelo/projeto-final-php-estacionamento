<?php

    include_once("conexao_admin.php");

    function insereCarro($id_placa, $marca, $modelo, $ano_modelo, $cor)
    {
        $conexao_admin = criaConexao();

        $sql = "INSERT INTO carro (id_placa, marca, modelo, ano_modelo, cor) VALUES (:id_placa, :marca, :modelo, :ano_modelo, :cor)";

        $stmt = $conexao_admin->prepare($sql);
        $stmt->bindParam(":id_placa", $id_placa);
        $stmt->bindParam(":marca", $marca);
        $stmt->bindParam(":modelo", $modelo);
        $stmt->bindParam(":ano_modelo", $ano_modelo);
        $stmt->bindParam(":cor", $cor);

        try {
            if ($stmt->execute()) {
            } else {
                print_r($stmt->errorInfo());
            }
        } catch (PDOException $e) {
            echo "Erro na conexão. Erro gerado: " . $e->getMessage();
        }
    }

    function insereEntrada($placa, $data)
    {
        $conexao_admin = criaConexao();
       
        $sql = "INSERT INTO entrada_saida (veiculo, hr_entrada) VALUES (:placa, :date)";

        $stmt = $conexao_admin->prepare($sql);
        $stmt->bindParam(":placa", $placa);
        $stmt->bindParam(":date", $data);

        try {
            if ($stmt->execute()) {
            } else {
                print_r($stmt->errorInfo());
            }
        } catch (PDOException $e) {
            echo "Erro na conexão. Erro gerado: " . $e->getMessage();
        }
    }

    function insereSaida($placa, $data)
    {
        $conexao_admin = criaConexao();
       
        $sql = "INSERT INTO entrada_saida (hr_saida) VALUES (:date)";
        $sql = "UPDATE entrada_saida SET hr_saida = :date WHERE veiculo = :placa";

        $stmt = $conexao_admin->prepare($sql);
        $stmt->bindParam(":placa", $placa);
        $stmt->bindParam(":date", $data);

        try {
            if ($stmt->execute()) {
            } else {
                print_r($stmt->errorInfo());
            }
        } catch (PDOException $e) {
            echo "Erro na conexão. Erro gerado: " . $e->getMessage();
        }
    }


    function buscaTodosCarros()
    {
        $conexao_admin = criaConexao();

        $sql = "SELECT * FROM carro";

        $stmt = $conexao_admin->prepare($sql);
        $stmt->execute();

        $carros = array();

        while ($resultado = $stmt->fetch(PDO::FETCH_ASSOC)) {
            array_push($carros, $resultado);
        }

        return $carros;
    }


    function buscaCarroPorId($carro)
    {
        $conexao_admin = criaConexao();

        $sql = "SELECT * FROM carro WHERE id_placa = :id_placa";

        $stmt = $conexao_admin->prepare($sql);
        $stmt->bindParam(":id_placa", $id_placa);

        try {
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    
    function buscaEntradaSaida()
    {
        $conexao_admin = criaConexao();
        $sql = "SELECT * FROM entrada_saida";

        $stmt = $conexao_admin->prepare($sql);
        $stmt->execute();

        $hrs = array();

        while ($resultado = $stmt->fetch(PDO::FETCH_ASSOC)) {
            array_push($hrs, $resultado);
        }

        return $hrs;
    }
