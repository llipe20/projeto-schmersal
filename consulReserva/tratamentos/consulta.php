<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Schmersal - consulta</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      font-size: 16px;
      line-height: 1.5;
      margin: 0;
      padding: 0;
    }
    h1 {
      font-size: 24px;
      margin-bottom: 20px;
    }
    p {
      margin: 10px 0;
    }
    .highlight {
      background-color: #4CAF50;
      padding: 5px;
      display: inline-block;
    }
    .no-data {
      display: inline-block;
      background-color: #4CAF50;
      padding: 5px;
    }
  </style>
</head>
<body>
<?php
  include_once 'conexao.php';
  session_start();

  if ($_SERVER["REQUEST_METHOD"] == "POST") 
  {
      // Obtém o ID do registro enviado pelo formulário
      $idReserva = $_POST["id"];

      // Consulta o dado no banco de dados
      $sql = "SELECT h.nome, h.cpf, h.sexo, h.email, h.telefone,
                    q.idQuarto, q.andar, q.tipo, q.descricao,
                    r.checkin, r.checkout, r.fatura,
                    c.cartao
              FROM reserva AS r
              INNER JOIN hospedes AS h ON r.cliente = h.idHospede
              INNER JOIN quartos AS q ON r.quarto = q.idQuarto
              INNER JOIN credito AS c ON r.cartao = c.idCredito
              WHERE r.idReserva = '$idReserva'";
      $resultado = mysqli_query($conn,$sql);

      if (mysqli_num_rows($resultado) > 0) 
      {
          // Exibe o dado encontrado
          echo "<h1><span class=\"highlight\">Reserva Encontrada</span></h1>";
          while ($row = mysqli_fetch_assoc($resultado)) 
          { 
              echo "<p><strong>Informações Pessoais:</strong></p>";
              echo "<p><strong>Nome:</strong> " . $row["nome"] . "</p>";
              echo "<p><strong>CPF:</strong> " . $row["cpf"] . "</p>";
              echo "<p><strong>Sexo:</strong> " . $row["sexo"] . "</p>";
              echo "<p><strong>E-mail:</strong> " . $row["email"] . "</p>";
              echo "<p><strong>Telefone:</strong> " . $row["telefone"] . "</p>";
              echo '<br>';
              echo "<p><strong>Informações da reserva:</strong></p>";
              echo "<p><strong>Número do quarto:</strong> " . $row["idQuarto"] . "</p>";
              echo "<p><strong>Andar:</strong> " . $row["andar"] . "</p>";
              echo "<p><strong>Tipo do quarto:</strong> " . $row["tipo"] . "</p>";
              echo "<p><strong>Descrição do quarto:</strong> " . $row["descricao"] . "</p>";
              echo "<p><strong>Data de inicio:</strong> " . $row["checkin"] . "</p>";
              echo "<p><strong>Data de término:</strong> " . $row["checkout"] . "</p>";
              echo "<p><strong>Fatura:</strong> " . $row["fatura"] . "<strong> reais</strong></p>";
              echo "<p><strong>Cartão:</strong> " . $row["cartao"] . "</p>";

              // Adicione aqui os outros campos que deseja exibir
          }
          $_SESSION['idReserva'] = $idReserva;
      } 
      else 
      {
        echo '<script>alert("Reserva não encontrada")</script>';
        echo "<script>window.location.href = '../formularios/consultar.php'</script>";
      }
  }
  mysqli_close($conn);
?>
<p><a href="../formularios/editar.php">Editar</a></p>
<p><a href="../formularios/deletar.php">Deletar</a></p>
<p><a href="../formularios/consultar.php">Voltar</a></p>
</body>
</html>
