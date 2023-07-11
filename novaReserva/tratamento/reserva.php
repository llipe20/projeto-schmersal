<?php
    
    // TRATAMENTO DE DADOS RELACIONADO A RESERVA;

    // conexão;
    include 'conexao.php';
    session_start();

        if (isset($_POST['button']))
        {
            if(!empty($_POST['in']))
            {
                $in = strtotime($_POST['in']);
                $out = strtotime($_POST['out']);
                $atual = strtotime(date('Y-m-d')); // data atual;
                $diaI = $in - $atual;
                $diferenca = $out - $in;
            }
            // verificando se os dados foram preenchidos;
            if (empty($_POST['quarto']) or empty($_POST['in']) or $diaI < 0 or $diferenca <= 0 or empty($_POST['out']))
            {
                header('Location: ../formularios/reserva.php');
            }
            else
            {
                // SELECIONANDO O QUARTO;
        
                $tipo = mysqli_escape_string($conn,$_POST['quarto']);  

                $sql = "SELECT idQuarto FROM quartos WHERE tipo = '$tipo' AND situacao = 'disponivel'";
                $resultado = mysqli_query($conn,$sql);

                if(mysqli_num_rows($resultado) == 0)
                {
                    echo "Erro ao salvar: ../tratamento/reserva-Ln.30".mysqli_error($conn);
                }
                else
                {   
                    $dados = mysqli_fetch_array($resultado);

                    // sorteando o quarto;
                    $quarto = $dados[array_rand($dados)];

                    // TORNANDO O QUARTO SELECIONADO 'indisponivel';

                    $sql = "UPDATE quartos SET situacao = 'indisponivel' WHERE idQuarto = '$quarto'";
                    $resultado = mysqli_query($conn,$sql);

                    if(!isset($resultado))
                    {
                        echo 'error ../tratamento/reserva.php-ln.37';
                    }

                    // CALCULANDO FATURA;

                    // pegando o valor do quarto;

                    $sql = "SELECT * FROM quartos WHERE idQuarto = '$quarto'";
                    $resultado = mysqli_query($conn,$sql);

                    if(mysqli_num_rows($resultado) == 1)
                    {
                        $dados = mysqli_fetch_assoc($resultado);
                        $valor = $dados['valor'];
                    }
                    else
                    {
                        echo 'erro: ../tratamento/reserva-Ln.52';
                    }

                    // pegando CHECKIN-OUT;

                    $in = mysqli_escape_string($conn,$_POST['in']);
                    $out = mysqli_escape_string($conn,$_POST['out']);

                    $fatura = ((strtotime($out) - strtotime($in)) / (60*60*24)) * $valor;  // formula;

                    // guardando para add no banco depois do pagamento;
                    $_SESSION['fatura'] = $fatura;
                    $_SESSION['quarto'] = $quarto;
                    $_SESSION['in'] = $in;
                    $_SESSION['out'] = $out;
                    
                    mysqli_close($conn); // fechando conexão
                    header('Location: ../formularios/pagamento.php');
                }
            }
        }
?>