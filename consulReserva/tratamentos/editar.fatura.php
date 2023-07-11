<?php 
    include_once 'editar.php';
    
    // CALCULANDO FATURA;

    //valor do quarto;

    $sql = "SELECT * FROM quartos WHERE idQuarto = '$_SESSION[idQuarto]'";
    $resultado = mysqli_query($conn,$sql);

    if($resultado)
    {
        $dados = mysqli_fetch_assoc($resultado);
        $valor = $dados['valor'];
    }
    else
    {
        echo 'erro: ../tratamento/editar.fatura.php-Ln.18';
    }

    // Calculando nova fatura;
     $fatura = ((strtotime($_SESSION['out']) - strtotime($_SESSION['in'])) / (60*60*24)) * $valor;  // formula;
    
    // Comparando a nova fatura com a atual fatura;
    $dif = $fatura - $_SESSION['fatura'];

    $_SESSION['fatura'] = $fatura;
    $_SESSION['dif'] = $dif;

    if($dif == 0)
    {
        // FATURA SEJA A MESMA;

        $_SESSION['diFatura'] = 'neutro';
        echo "<script>window.location.href = '../formularios/editar.pagamento.php'</script>";
    }
    elseif ($dif < 0)
    {
        // FATURA NEGATIVA;

        $_SESSION['diFatura'] = 'negativo';
        echo "<script>window.location.href = '../formularios/editar.pagamento.php'</script>";
    }
    else
    {
        // FATURA POSITIVA: 
        $_SESSION['diFatura'] = 'positivo';
        echo "<script>window.location.href = '../formularios/editar.pagamento.php'</script>";
    }
?>
