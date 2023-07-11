<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleforms.css">
    <title>Schmersal - deletar</title>

       <script>
        function exibirAviso() {
            alert("Por motivos de segurança, a reserva será cancelada após a confirmação da senha do cartão usada no pagamento. Vale ressaltar que para reembolso entre em contato com o suporte.");
        }
    </script>

</head>
<body>

  <img class="background-image" src="imagem/forms.jpg" alt="Imagem de Fundo">

  <div class="container">
      <div class="form-image">
          <img src="imagem/hotel (2).png" alt="">
      </div>

      <!-- FORMULARIO PARA DELETAR RESERVA -->

      <div class="form">
          <form action="../tratamentos/deleta.php" method="POST">
              <div class="title">
                  <h1>Deletar Reserva</h1>
                  <h3>Senha de confirmação</h3>
              </div>

              <div class="input-group">
                  <div class="input-box">
                      <label for="senha">Senha:</label>
                      <input type="text" name="senha" placeholder="Digite sua senha" onclick="exibirAviso()">
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