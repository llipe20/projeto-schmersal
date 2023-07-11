<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleforms.css">
    <title>Schmersal - editar</title>

    <script>
      function exibirAviso() {
          alert("Por motivos de segurança, a reserva será modificada, após a confirmação da senha do cartão usada no pagamento.");
      }
  </script>

</head>
<body>

    <img class="background-image" src="imagem/forms.jpg" alt="Imagem de Fundo">

    <div class="container">
        <div class="form-image">
            <img src="imagem/hotel (2).png" alt="">
        </div>
  
        <!--Formulario de editar pagamento-->

        <div class="form">
            <form action="../tratamentos/editar.pagamento.php" method="POST">
                <div class="title">
                  <h1>Editar Reserva</h1>
                  <h3>Senha de confirmação</h3>
                </div>
  
                <div class="input-group">
                    <div class="input-box">
                        <label for="senha">Senha:</label>
                        <input type="password" name="senha" placeholder="****"  onclick="exibirAviso()">
                    </div>
                </div>

                <div class="input-group">
                  <div class="input-box">

                    <?php 

                    // CONDIÇÕES PARA EXIBIÇÃO DA FATURA DE ACORDO COM O VALOR DA MESMA;
                
                    include_once '../tratamentos/conexao.php';
                    session_start();
                  
                    if($_SESSION['diFatura'] == 'positivo')
                    {
                      echo '<p>Novo valor: '.number_format($_SESSION['fatura'],2).' reais</p>';
                      echo '<p>Diferença a ser paga: '.number_format($_SESSION['dif'],2).' reais</p>';
                    }
                    elseif($_SESSION['diFatura'] == 'negativo')
                    {
                      echo '<p>Novo valor: '.number_format($_SESSION['fatura'],2).' reais</p>';
                      echo '<p>A reserva ficou mais barata, para reembolso entre contato com o suporte!</p>';
                    }
                  ?>  
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