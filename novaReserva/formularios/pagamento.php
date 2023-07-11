<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schmersal Hotel</title>
    <link rel="stylesheet" href="css/styleforms.css">
</head>
<body>
 

    <img class="background-image" src="imagem/forms.jpg" alt="Imagem de Fundo">

  <div class="container">
    <div class="form-image">
      <img src="imagem/hotel (2).png" alt="">
    </div>


    <div class="form3">
      
      <form class="form_3" action="../tratamento/pagamento.php" method="POST">
    
        <div class="title">
          <h1>Pagamento</h1>
        </div>

        <div class="input-group">
          <div class="input-box">
            <label for="numero">Número:</label>
            <input type="text" name="numero" placeholder="0000.0000.0000.0000">
          </div>
        </div>

        <div class="input-group">
          <div class="input-box">
            <label for="validade">Validade:</label>
            <input type="date" name="vale" placeholder="00/00">
          </div>
        </div>

        <div class="input-group">
          <div class="input-box">
            <label for="CVC">CVC:</label>
            <input type="number" name="cvc" placeholder="074"></p>
          </div>
        </div>
        
        <div class="input-group">
          <div class="input-box">
          <?php 
          session_start(); 
          echo 'Valor: '.number_format($_SESSION['fatura'],2).' reais';
          ?>
          </div>
        </div>
        
        <div class="add_cartao"><p><a href="novoCartao.php">Clique aqui para adicionar um novo cartão</a></p></div>
        <hr><br>

        

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
