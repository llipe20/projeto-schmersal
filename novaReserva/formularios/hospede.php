<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schmersal - nova reserva</title>
    <link rel="stylesheet" href="css/styleforms.css">
</head>

<body>

    
  <img class="background-image" src="imagem/forms.jpg" alt="Imagem de Fundo">

  <div class="container">
    <div class="form-image">
      <img src="imagem/hotel (2).png" alt="">
    </div>

    <div class="form">
      
      <form action="../tratamento/hospede.php" method="POST">
    
        <div class="title">
          <h1>Nova Reserva</h1>
          <h3>Informações Pessoais</h3>
        </div>

        <div class="input-group">
          <div class="input-box">
            <label for="nome">Nome Completo:</label>
            <input type="text" name="nome" placeholder="Nome Completo:">
          </div>
        </div>

        <div class="input-group">
          <div class="input-box">
            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" placeholder="CPF">
          </div>
        </div>

        <div class="input-group">
          <div class="input-box">
            <label for="sexo">Sexo:</label>
            <select name="sexo">
              <option value="masculino">Masculino</option>
              <option value="feminino">Feminino</option>
            </select>
          </div>
        </div>

        <div class="input-group">
          <div class="input-box">
            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="email">
          </div>
        </div>

        <div class="input-group">
          <div class="input-box">
            <label for="telefone">Telefone:</label>
            <input type="text" name="fone" placeholder="(00) 0000-0000">
          </div>
        </div>

        <div class="butoes">
          <div class="back-button" style="display: inline-block; margin-right: 10px;">
            <a href="..schmersal/index.html" class="button">Voltar</a>
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