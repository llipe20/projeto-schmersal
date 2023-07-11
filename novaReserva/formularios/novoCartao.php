<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schmersal</title>
    <link rel="stylesheet" href="css/styleforms.css">
</head>
<body>

  <img class="background-image" src="imagem/forms.jpg" alt="Imagem de Fundo">

  <div class="container">
    <div class="form-image">
      <img src="imagem/hotel (2).png" alt="">
    </div>

    <div class="form">
      
      <form class="form_2" action="../tratamento/novoCartao.php" method="POST">
    
        <div class="title">
          <h1>Adicionar Cartão</h1>
        </div>

        <div class="input-group">
          <div class="input-box">
            <label for="cartao">Nome do cartão:</label>
            <input type="text" name="nome" placeholder="Nome Completo:">
          </div>
        </div>

        <div class="input-group">
          <div class="input-box">
            <label for="num">Número:</label>
            <input type="text" name="numero" placeholder="0000.0000.0000.0000">
          </div>
        </div>

        <div class="input-group">
          <div class="input-box">
            <label for="validade">Validade:</label>
            <input type="date" name="vale">
          </div>
        </div>

        <div class="input-group">
          <div class="input-box">
            <label for="cvc">CVC:</label>
            <input type="number" name="cvc" placeholder="cvc">
          </div>
        </div>

        <div class="input-group">
          <div class="input-box">
            <label for="limite">Limite:</label>
            <input type="number" name="limite" placeholder="500">
          </div>
        </div>

        <div class="input-group">
            <div class="input-box">
              <label for="senha">senha:</label>
              <input type="password" name="senha">
            </div>
          </div>

        <div class="butoes">
          <div class="back-button" style="display: inline-block; margin-right: 10px;">
            <a href="../formularios/pagamento.php" class="button">Voltar</a>
          </div>

          <div class="continue-button">
            <div class="button">
              <input type="submit" name="button" value="Avançar">
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>

</html>