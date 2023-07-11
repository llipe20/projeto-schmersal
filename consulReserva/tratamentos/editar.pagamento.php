<?php 

    // CONFERINDO A SENHA E FAZENDO O UPDATE DA RESERVA;

    include_once 'conexao.php';
    session_start();

    if(isset($_POST['button']))
    {
        // verificando se os dados vinheram vazios
        if(empty($_POST['senha']))
        {
            header('Location: ../formularios/editar.pagamento.php');
        }
        else
        {
            // verificando se a senha está identica ao do banco
            $senha = mysqli_escape_string($conn,$_POST['senha']);

            $sql = "SELECT * FROM credito WHERE idCredito = '$_SESSION[idCredito]'";
            $resultado = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($resultado);
            $senhaD = $row['senha'];

            if($senha != $senhaD)
            {
                echo '<script>alert("Erro: senha incorreta")</script>';
                echo "<script>window.location.href = '../formularios/editar.pagamento.php'</script>";
            }
            else
            {
                // atualizando dados da reserva no banco;
                $sql = "UPDATE reserva SET checkin = '$_SESSION[in]', checkout = '$_SESSION[out]', 
                        fatura = '$_SESSION[fatura]', quarto = '$_SESSION[idQuarto]'";
                $resultado = mysqli_query($conn,$sql);

                if($resultado)
                {
                    mysqli_close($conn); // fechando conexão
                    echo '<script>alert("Reserva atualizada com SUCESSO!")</script>';
                    echo "<script>window.location.href = '../formularios/consultar.php'</script>";
                }
            }
        }
    }
?> 