<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scrmersal Hotel</title>
    <link rel="stylesheet" href="css/styleforms.css">
</head>
<body>

<img class="background-image" src="imagem/forms.jpg" alt="Imagem de Fundo">

<div class="container">
  <div class="form-image">
    <img src="imagem/hotel (2).png" alt="">
  </div>

  <div class="form">
    
    <form class="form_3" action="../tratamento/reserva.php" method="POST">
  
      <div class="title">
        <h1>Tipo de quarto</h1>
      </div>


      <div class="input-group">
        <div class="input-box">
          <label for="sexo">Tipo de quarto:</label>
    <select id="quarto" name="quarto">
    <option value="null">-----</option>
    <option value="individual">Individual</option>
    <option value="duplo_individual">Duplo Individual</option>
    <option value="trio_individual">Trio Individual</option>
    <option value="casal">Casal</option>
    <option value="familia">Família</option>
</select>
        </div>
      </div>

      <div class="input-group">
        <div class="input-box">
          <label for="Data_i">Data de Inicio:</label>
          <input type="datetime-local" name="in">
        </div>
      </div>

      <div class="input-group">
        <div class="input-box">
          <label for="data_e">Data de Encerramento:</label>
          <input type="datetime-local" name="out">
        </div>
      </div>

      <div class="butoes">
        <div class="back-button" style="display: inline-block; margin-right: 10px;">
          <a href="index.html" class="button">Voltar</a>
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