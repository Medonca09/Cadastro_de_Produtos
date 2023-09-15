<html>

<head>
    <title> Controle de estoque</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="produtoDeletado.css">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v6.4.2/css/all.css">
</head>

<body style="background-color: #000;">
    <nav class="navbar navbar-expand-lg" style="background-color: #f63f09">
        <div class="container-fluid" style="justify-content: center;">
            <a class="navbar-brand">LIXEIRA <i class="fa-solid fa-trash-can"></i></a>
        </div>
    </nav>
    <?php include 'conexao.php' ?>
    <?php

    $id = $_POST['id'];
    function delatar($conexao, $id)
    {
        $sql = "delete from produtos where id = '$id'";
        $resultado = mysqli_query($conexao, $sql);
        return $resultado;
    }

    if (delatar($conexao, $id)) { ?>

       <div class="alert" role="alert">
        Seu produto foi removido !! <i class="fa-solid fa-xmark"></i>,  <a href="index.html" class="alert-link"> Deseja voltar a página incial ?</a>. Clique na frase sublinhada para voltar 
    </div>
    <?php
    } else {
        echo "ERRO!";
        echo mysqli_error($conexao);
    }

    ?>

</body>

</html>