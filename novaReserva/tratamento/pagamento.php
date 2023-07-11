<?php

    // TRATAMENTO DE DADOS DO CARTÃO 

    // conexao
    include 'conexao.php';
    session_start();

    if(isset($_POST['button']))
    {
        
        // verificando se os dados foram preenchidos
        if(empty($_POST['numero']) or empty($_POST['vale']) or empty($_POST['cvc']))
        {
            header("Location: ../formularios/pagamento.php");
        }
        else
        {
            // limpando dados contra possiveis ataques
            $numero = mysqli_escape_string($conn,$_POST['numero']);
            $validade = mysqli_escape_string($conn,$_POST['vale']);
            $cvc = mysqli_escape_string($conn,$_POST['cvc']);

            // buscando o cartão no banco 
            $sql = "SELECT * FROM credito WHERE numero = '$numero'";
            $resultado = mysqli_query($conn,$sql);

            // verificação do numero
            if(mysqli_num_rows($resultado) != 1)
            {
                echo '<script>alert("Erro: cartão não indentificado")</script>';
                echo "<script>window.location.href = '../formularios/pagamento.php'</script>";
            }
            else
            {
                $dados = mysqli_fetch_array($resultado);
                
                if($dados['limite'] < $_SESSION['fatura'])
                {
                    echo '<script>alert("Limite não suficiente!")</script>';
                    echo "<script>window.location.href = '../formularios/pagamento.php'</script>";
                }
                else
                {
                    // verificando validade do cartão
                    if($dados['validade'] != $validade)
                    {
                        echo '<script>alert("Erro: Validade errada")</script>';
                        echo "<script>window.location.href = '../formularios/pagamento.php'</script>";
                    }
                    else
                    {
                        // verificando cvc do cartão
                        if($dados['cvc'] != $cvc)
                        {
                            echo '<script>alert("Erro: CVC incorreto")</script>';
                            echo "<script>window.location.href = '../formularios/pagamento.php'</script>";
                        }
                        else
                        {
                            $_SESSION['idCartao'] = $dados['idCredito']; // identificar o cartão para o usar na proxima pagina
                            mysqli_close($conn); // fechando conexão
                            header('Location: ../formularios/senha.php');
                        }
                    }
                }
            }
        }
    }
?>