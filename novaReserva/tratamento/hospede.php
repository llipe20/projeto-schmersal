<?php

    // TRATAMENTO DE DADOS RELACIONADO A HOSPEDES;

   // conexão;
   include_once 'conexao.php';
   session_start();

   if (isset ($_POST['button'])) 
   { 
      // verificando o preenchimento de dados;
      if (empty($_POST['cpf']) or empty($_POST['nome']) or empty($_POST['sexo'])
         or empty($_POST['email']) or empty($_POST['fone']))
      {
        header("Location: ../formularios/hospede.php");
      }
      else
      {
        // limpando dados do formulario;
        $cpf =  mysqli_escape_string($conn,$_POST['cpf']);
        $nome =  mysqli_escape_string($conn,$_POST['nome']);
        $sexo =  mysqli_escape_string($conn,$_POST['sexo']);
        $email = mysqli_escape_string($conn,$_POST['email']);
        $fone = mysqli_escape_string($conn,$_POST['fone']);
    
        // inserindo os dados de hospedes no banco;
        $sql = "INSERT INTO hospedes VALUES (DEFAULT,'$cpf','$nome','$sexo','$email','$fone')";
        $resultado = mysqli_query($conn,$sql);

        if (isset($resultado)) 
        {
          // recuperando id do hospede recém inserido no banco para usar depois;
         $_SESSION['idHospede'] = mysqli_insert_id($conn);

          mysqli_close($conn); // fechando conexão;
          header("Location: ../formularios/reserva.php"); // formulario de reserva;
        } 
        else
        {
          echo "Erro ao salvar: ".mysqli_error($conn);
        }
      }
    } 

?>
    