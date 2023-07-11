<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleforms.css">
    <title>Schmersal - editar</title>
</head>
<body>
<?php
    // FORMULARIO DE EDITAR RESERVA;
    
    // conexão;
    include_once '../tratamentos/conexao.php';
    session_start();

    // Trazendo os dados que podem ser modificados;
    if (empty($_SESSION['idReserva']))
    {
        header('Location: ../fomrularios/consulta.php');
    }
    else
    { 
        // consulta com INNER JOIN;
        $sql = "SELECT h.idHospede, h.nome, h.cpf, h.sexo, h.email, h.telefone,
                       q.idQuarto, q.andar, q.tipo, q.descricao,
                       r.checkin, r.checkout, r.fatura,
                       c.idCredito, c.cartao
                FROM reserva AS r
                INNER JOIN hospedes AS h ON r.cliente = h.idHospede
                INNER JOIN quartos AS q ON r.quarto = q.idQuarto
                INNER JOIN credito AS c ON r.cartao = c.idCredito
                WHERE r.idReserva = '$_SESSION[idReserva]'";
        $resultado = mysqli_query($conn,$sql);

        // Colocando os dados em uma matriz;
        if(mysqli_num_rows($resultado) > 0)
        {
            while ($row = mysqli_fetch_assoc($resultado)) 
            {
                $dados[] = $row;
            }
        }
        $_SESSION['idHospede'] = $dados[0]['idHospede'];
        $_SESSION['idQuarto'] = $dados[0]['idQuarto'];
        $_SESSION['tipo'] = $dados[0]['tipo'];
        $_SESSION['fatura'] = $dados[0]['fatura'];
        $_SESSION['idCredito'] = $dados[0]['idCredito'];
        $_SESSION['in'] = $dados[0]['checkin'];
    }

    // CONDIÇÕES PARA EDITAR;

        // 1. Não tiver atingido a data de inicio;

         $in = strtotime($dados[0]['checkin']);
         $atual = strtotime(date('Y-m-d')); // data atual;
         $diaI = $in - $atual;

        if($diaI <= 0)
        {
            echo '<script>alert("A reserva não pode ser alterada, pois, já esta em andamento")</script>';
            echo "<script>window.location.href = '../formularios/consultar.php'</script>";
        }

        //2. Não tiver encerrada

        $sql = "SELECT statu FROM reserva WHERE idReserva = '$_SESSION[idReserva]'";
        $resultado = mysqli_query($conn,$sql);
        $status = mysqli_fetch_assoc($resultado);

        if($status == 'off')
        {
            echo '<script>alert("A reserva não pode ser alterada, pois, já esta encerrada e concluida")</script>';
            echo "<script>window.location.href = '../formularios/consultar.php'</script>";
        }

    // APRESENTANDO DADOS ALTERAVEIS NOS FORMULARIOS;
?>

    <img class="background-image" src="imagem/forms.jpg" alt="Imagem de Fundo">

    <div class="container">
        <div class="form-image">
            <img src="imagem/hotel (2).png" alt="">
        </div>
  
         <!-- FORMULÁRIO 'informações pessoais' -->
        <div class="form">
            <form action="../tratamentos/editar.php" method="POST">
                <div class="title">
                    <h1>Modificando Reserva</h1>
                    <h3>Informações Pessoais</h3>
                </div>
  
                <div class="input-group">
                    <div class="input-box">
                        <label for="nome">Nome Completo:</label>
                        <input type="text" name="nome" value="<?php echo $dados[0]['nome'];?>">
                    </div>
                </div>
  
                <div class="input-group-s">
                    <div class="input-box-s">
                        <label for="cpf">CPF:</label>
                        <input type="text" name="cpf" value="<?php echo $dados[0]['cpf'];?>">
                    </div>
                </div>
                

                <div class="input-group">
                    <div class="input-box">
                        <label>
                            <input type="radio" name="sexo" value="masculino" <?php if ($dados[0]['sexo'] == 'masculino') echo 'checked'; ?>>
                            Masculino
                            </label>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label>
                            <input type="radio" name="sexo" value="feminino" <?php if ($dados[0]['sexo'] == 'feminino') echo 'checked'; ?>>
                            Feminino
                            </label>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="email">Email:</label>
                        <input type="email" name="email" value="<?php echo $dados[0]['email'];?>">
                    </div>
                </div>
  
                <div class="input-group">
                    <div class="input-box">
                        <label for="fone">Telefone:</label>
                        <input type="text" name="fone" value="<?php echo $dados[0]['telefone'];?>">
                    </div>
                </div>
  

                    <!-- FORMULÁRIO 'informações reserva' -->
                    <h3>Informações da Reserva</h3> <br>

                    <div class="input-group">
                        <div class="input-box">
                            <label for="quarto">Tipo de quarto</label>
                            <select id="quarto" name="quarto">
                                <option value="null">-----</option>
                                <option value="individual" <?php if ($dados[0]['tipo'] == 'individual') echo 'selected'; ?>>Individual</option>
                                <option value="duplo_individual" <?php if ($dados[0]['tipo'] == 'duplo_individual') echo 'selected'; ?>>Duplo Individual</option>
                                <option value="trio_individual" <?php if ($dados[0]['tipo'] == 'trio_individual') echo 'selected'; ?>>Trio Individual</option>
                                <option value="casal" <?php if ($dados[0]['tipo'] == 'casal') echo 'selected'; ?>>Casal</option>
                                <option value="familia" <?php if ($dados[0]['tipo'] == 'familia') echo 'selected'; ?>>Família</option>
                            </select>
                        </div>
                    </div>

                    <div class="input-group">
                        <div class="input-box">
                            <label for="date_i">Data de inicio:</label>
                            <input type="date" name="in" value="<?php echo $dados[0]['checkin']; ?>">
                        </div>
                    </div>

                    <div class="input-group">
                        <div class="input-box">
                            <label for="date_e">Data de Encerramento:</label>
                            <input type="date" name="out" value="<?php echo $dados[0]['checkout']; ?>">
                        </div>
                    </div>

                    <div class="butoes">
                        <div class="back-button" style="display: inline-block; margin-right: 10px;">
                            <a href="../formularios/consultar.php" class="button">Voltar</a>
                        </div>
      
                        <div class="continue-button">
                            <div class="button">
                                <input type="submit" name="button" value="Confirmar">
                            </div>
                        </div>

                </div>
            </form>
        </div>
    </div>

</body>
</html>
