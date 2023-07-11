<?php
    
    // FAZENDO UPDATE DOS DADOS;

   // conexão;
   include_once 'conexao.php';
   session_start();

   if (isset($_POST['button'])) 
   { 
        // limpando dados do formulario;
        $cpf =  mysqli_escape_string($conn,$_POST['cpf']);
        $nome =  mysqli_escape_string($conn,$_POST['nome']);
        $sexo =  mysqli_escape_string($conn,$_POST['sexo']);
        $email = mysqli_escape_string($conn,$_POST['email']);
        $fone = mysqli_escape_string($conn,$_POST['fone']);
        $in =  mysqli_escape_string($conn,$_POST['in']);
        $out =  mysqli_escape_string($conn,$_POST['out']);
        $tipo =  mysqli_escape_string($conn,$_POST['quarto']);

        if(empty($nome) or empty($cpf) or empty($sexo) or empty($email) or empty($fone) or empty($in) or empty($out) or empty($tipo)) 
        {
            echo "<script>window.location.href = '../formularios/editar.php'</script>";
        }
        else
        {
            // inserindo os dados de hospedes no banco;
            $sql = "UPDATE hospedes SET nome = '$nome', sexo = '$sexo', cpf = '$cpf', email = '$email', telefone = '$fone' WHERE idHospede = '$_SESSION[idHospede]'";
            $resultado = mysqli_query($conn,$sql);

            if (!$resultado) 
            {
                echo "Erro ao salvar: ../tratamento/editar-Ln.27".mysqli_error($conn);
            }
            else
            {
                if($_SESSION['tipo'] != $tipo)
                {
                    //SELECIONANDO UM NOVO QUARTO;

                    $sql = "SELECT idQuarto FROM quartos WHERE tipo = '$tipo' AND situacao = 'disponivel'";
                    $resultado = mysqli_query($conn,$sql);

                    if (!$resultado) 
                    {
                        echo "Error: ../tratamento/editar-Ln.32" . mysqli_error($conn);
                    } 
                    else 
                    {
                        // VERIFICANDO SE HÁ QUARTOS DISPONIVEIS E SORTEANDO;
                        $dados = mysqli_fetch_array($resultado);
                    
                        if (!is_null($dados) && is_array($dados)) 
                        {
                            $quarto = $dados[array_rand($dados)];
                        } 
                        else 
                        {
                            echo '<script>alert("Não foi encontrado quartos disponiveis!")</script>';
                            echo "<script>window.location.href = '../formularios/editar.php'</script>";
                        }
                        // TORNANDO O QUARTO SELECIONADO 'indisponivel';
            
                        $sql = "UPDATE quartos SET situacao = 'indisponivel' WHERE idQuarto = '$quarto'";
                        $resultado = mysqli_query($conn,$sql);

                        if(!$resultado)
                        {
                            echo 'error ../tratamento/editar.php-ln.50';
                        }
                        else
                        {
                            // TORNANDO O QUARTO ANTIGO DISPONIVEL NOVAMENTE;

                            $sql = "UPDATE quartos SET situacao = 'disponivel' WHERE idQuarto = '$_SESSION[idQuarto]'";
                            $resultado = mysqli_query($conn,$sql);

                            if(!$resultado)
                            {
                                echo 'error ../tratamento/editar.php-ln.61';
                            }
                            else
                            {
                                $_SESSION['in'] = $in;
                                $_SESSION['out'] = $out;
                                $_SESSION['idQuarto'] = $quarto;
                                echo "<script>window.location.href = '../tratamentos/editar.fatura.php'</script>";
                            }
                        }
                    }
                } 
                else
                {
                    $_SESSION['in'] = $in;
                    $_SESSION['out'] = $out;
                    echo "<script>window.location.href = '../tratamentos/editar.fatura.php'</script>";
                }
            }
        }
    }
?>