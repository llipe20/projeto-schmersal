<?php

    // MODIFICANDO SITUAÇÃO DO QUARTO APÓS TERMINO DA RESERVA;

    include_once '../tratamento/conexao.php';

    $sql = "SELECT * FROM reserva";  // trazendo todas as reservas do banco;
    $resultado = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($resultado)) { // organizando as reservas em matrizes;
        $reservas[] = $row;
    }

    $dataAtual = strtotime(date('Y-m-d')); // data atual;

    for ($i = 0; $i < count($reservas); $i ++)
    {
        $dataOut = strtotime($reservas[$i]['checkout']);            // data da reserva;
        $diasRestantes = ($dataOut - $dataAtual) / (24 * 60 * 60);  // Calcula a diferença em dias;

        if ($diasRestantes <= 0 AND $reservas[$i]['statu'] == 'on') 
        {
            $quarto = $reservas[$i]['quarto'];
            $sql = "UPDATE quartos SET situacao = 'disponivel' WHERE idQuarto = '$quarto'"; // Atualizando quarto;
            $resultado = mysqli_query($conn, $sql);

            if (mysqli_affected_rows($conn))
            {
                $reserva = $reservas[$i]['idReserva'];
                $sql = "UPDATE reserva SET statu = 'off' WHERE idReserva = $reserva"; // Atualizando reserva;
                $resultado = mysqli_query($conn,$sql);

                if(mysqli_affected_rows($conn))
                {
                    mysqli_close($conn);
                    header('Location: ../formularios/hospede.php');
                }
            }
        }
    }
    header('Location: ../formularios/hospede.php');

?>