<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Consulta de Dados</title>
    <link rel="stylesheet" href="styleforms.css">
</head>
<body>


  <img class="background-image" src="imagem/forms.jpg" alt="Imagem de Fundo">

  <div class="container">
    <div class="form-image">
      <img src="imagem/hotel (2).png" alt="">
    </div>

<!-- FORMULÁRIO de consultar dados -->
    <div class="form">
      
      <form action="../tratamentos/consulta.php" method="POST">
    
        <div class="title">
          <h1>Consulta de Dados</h1>
        </div>

        <div class="input-group">
          <div class="input-box">
            <label for="id">ID do Registro:</label>
            <input type="text" id="id" name="id" required>
          </div>
        </div>

        <div class="butoes">
          <div class="back-button" style="display: inline-block; margin-right: 10px;">
            <a href="/schmersal/index.php" class="button">Voltar</a>
          </div>

          <div class="continue-button">
            <div class="button">
              <input type="submit" name="button" value="Consultar">
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
