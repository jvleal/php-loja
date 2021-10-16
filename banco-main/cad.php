<?php 
    include 'conecta.php';
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $cidade = $_POST['cidade'];
    $data_n = $_POST['data_nacimento'];
    $sql = "INSERT INTO pessoa(nome,email,celular,cidade,data_nacimento) VALUES('$nome','$email','$celular','$cidade','$data_n')";
    if(mysqli_query($conn,$sql))
    {
        echo "<script language='javascript' type='text/javascript'>
                alert('Registro inserido com sucesso!');
                window.location.href='index.php';
                </script>";
    }
    else {
        echo "<script language='javascript' type='text/javascript'>
                alert('Registro não foi inserido com sucesso!');
                window.location.href='index.php';
                </script>";
    }
    mysqli_close($conn);
?>