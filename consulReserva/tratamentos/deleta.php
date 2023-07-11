<?php 
    // conexão
    include_once 'conexao.php';
    session_start();

    if(isset($_POST['button']))
    {
        // CONDIÇÕES PARA DELETAR;

        // 1. Não tiver atingido a data de inicio;

        $in = strtotime($_SESSION['in']);
        $atual = strtotime(date('Y-m-d')); // data atual;
        $diaI = $in - $atual;

        if($diaI <= 0)
        {
            echo '<script>alert("A reserva não pode ser deletada, pois, já esta em andamento")</script>';
            echo "<script>window.location.href = '../formularios/consultar.php'</script>";
        }
        else
        {
            //2. Não tiver encerrada

            $sql = "SELECT statu FROM reserva WHERE idReserva = '$_SESSION[idReserva]'";
            $resultado = mysqli_query($conn,$sql);
            $status = mysqli_fetch_assoc($resultado);

            if($status == 'off')
            {
                echo '<script>alert("A reserva não pode ser deletada, pois, já esta encerrada e concluida")</script>';
                echo "<script>window.location.href = '../formularios/consultar.php'</script>";
            }
            else
            {
                // verificando se os dados vinheram vazios
                if(empty($_POST['senha']))
                {
                    header('Location: ../formularios/deletar.php');
                }
                else
                {
                    // verificando se a senha veio vazia
                    $senha = mysqli_escape_string($conn,$_POST['senha']);

                    // trazendo dados usando INNER JOIN;
                    $sql = "SELECT q.idQuarto, c.senha FROM reserva AS r
                            INNER JOIN quartos AS q ON r.quarto = q.idQuarto
                            INNER JOIN credito AS c ON r.cartao = c.idCredito
                            WHERE r.idReserva = '$_SESSION[idReserva]'";
                    $resultado = mysqli_query($conn,$sql);
                    
                    // Colocando dados em uma matriz;
                    while($row = mysqli_fetch_assoc($resultado))
                    {
                            $dados[] = $row;
                    }
                    // verificando se as senhas estão correta;
                    if($senha != $dados[0]['senha'])
                    {
                        echo '<script>alert("Erro: senha incorreta")</script>';
                        echo "<script>window.location.href = '../formularios/deletar.php'</script>";
                    }
                    else
                    {   
                        // APAGANDO RESERVA;

                        $sql = "DELETE FROM reserva WHERE idReserva = '$_SESSION[idReserva]'";
                        $resultado = mysqli_query($conn,$sql);

                        if (mysqli_affected_rows($conn) == 0) 
                        {
                            echo "Erro ao executar a consulta: reserva" . mysqli_error($conn);
                        }
                        else
                        {
                            // MODIFICANDO QUARTO para DISPONIVEL;

                            $idQuarto = $dados[0]['idQuarto'];
                            $sql = "UPDATE quartos SET situacao = 'disponivel' WHERE idQuarto = '$idQuarto'";
                            $resultado = mysqli_query($conn,$sql);

                            if (!$resultado) 
                            {
                                echo "Erro ao executar a consulta: quarto" . mysqli_error($conn);
                            }
                            else
                            {
                                echo '<script>alert("Reserva deletada com SUCESSO!")</script>';
                                echo "<script>window.location.href = '../formularios/consultar.php'</script>";
                            }
                        }
                    }
                }
            }
        }
    }
    ?>
   