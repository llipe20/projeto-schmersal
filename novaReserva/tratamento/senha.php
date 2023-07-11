<?php

   // TRATAMENTO DE DADOS DA SENHA

   // conexão
    include_once 'conexao.php';
    session_start();

    if(isset($_POST['button']))
    {
        // verificando se os dados vinheram vazios
        if(empty($_POST['senha']))
        {
            header('Location: ../formularios/senha.php');
        }
        else
        {
            // verificando se a senha está identica ao do banco
            $senha = mysqli_escape_string($conn,$_POST['senha']);

            $sql = "SELECT * FROM credito WHERE idCredito = '$_SESSION[idCartao]'";
            $resultado = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($resultado);
            $senhaBD = $row['senha'];

            $_SESSION['senha'] = $senhaBD;
            if($senha != $senhaBD)
            {
                echo '<script>alert("Erro: senha incorreta")</script>';
                echo "<script>window.location.href = '../formularios/senha.php'</script>";
            }
            else
            {
                // inserindo dados da reserva no banco;
                $sql = "INSERT INTO reserva VALUES (DEFAULT,'$_SESSION[in]','$_SESSION[out]',$_SESSION[fatura],$_SESSION[idHospede],$_SESSION[quarto],$_SESSION[idCartao],'on')";
                $resultado = mysqli_query($conn,$sql);

                if(isset($resultado))
                {
                    $idReserva = mysqli_insert_id($conn);
                    mysqli_close($conn); // fechando conexão
                    echo '<script>alert("Reserva realizada com sucesso! Guarde o token a seguir...")</script>';
                    echo "<script>alert('" . $idReserva . "');</script>";
                    echo "<script>window.location.href = '../index.php'</script>";
                }
            }
        }
    }
?> 