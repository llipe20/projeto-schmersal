<?php

    // TRATAMENTO DE DADOS PARA NOVOS CARTÕES
    
    // conexão
    include_once 'conexao.php';
    session_start();

    if(isset($_POST['button']))
    {   
        // verificando se os dados vinheram preenchidos
        if(empty($_POST['nome']) or empty($_POST['numero']) or empty($_POST['vale']) or empty($_POST['cvc']) or empty($_POST['limite']) or empty($_POST['senha']))
        {
            header("Location: ../formularios/novoCartao.php");
        }
        else
        {
            // verificando se o cartão já existe no banco
            $numero = mysqli_escape_string($conn,$_POST['numero']);

            $sql = "SELECT * FROM credito WHERE numero = '$numero'";
            $resultado = mysqli_query($conn,$sql);

            if(mysqli_fetch_row($resultado) != 0)
            {
                echo '<script>alert("Erro: cartão existente")</script>';
                echo "<script>window.location.href = '../formularios/novoCartao.php'</script>";   
            }
            else
            {
                // limpando dados 
                $nome = mysqli_escape_string($conn,$_POST['nome']);
                $validade = mysqli_escape_string($conn,$_POST['vale']);
                $cvc = mysqli_escape_string($conn,$_POST['cvc']);
                $limite = mysqli_escape_string($conn,$_POST['limite']);
                $senha = mysqli_escape_string($conn,$_POST['senha']);

                // inserindo o cartão no banco 
                $sql = "INSERT INTO credito VALUES (DEFAULT,'$nome','$numero','$validade',$cvc,$limite,'$senha',$_SESSION[idHospede])";
                $resultado = mysqli_query($conn,$sql);

                if(isset($resultado))
                {
                    // confirmação da operação 
                    mysqli_close($conn);
                    echo '<script>alert("Cartão adicionado com sucesso!")</script>';
                    echo "<script>window.location.href = '../formularios/pagamento.php'</script>";
                }
                else
                {
                    echo 'erro: ../tratamento/novoCartao-Ln.36'. mysqli_error($conn);
                }
            }
        }

    }

?>