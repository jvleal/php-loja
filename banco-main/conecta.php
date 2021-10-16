<?php
    $conn = mysqli_connect("localhost","root","","loja");
    mysqli_set_charset($conn, "utf8");
    if(!$conn){
        echo "Erro: Falha ao conectar-se com o banco de dados MySQL.".PHP_EOL;
        echo "Debug erro:".mysqli_connect_errno().PHP_EOL;
        echo "Debug erro:".mysqli_connect_error().PHP_EOL;
        exit;
    }
?> 