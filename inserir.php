<html>

<head>
    <title> Controle de estoque</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="adicionado.css">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v6.4.2/css/all.css">
</head>

<body style="background-color: #000;">
    <nav class="navbar navbar-expand-lg" style="background-color: #32CD30">
        <div class="container-fluid" style="justify-content: center;">
            <a class="navbar-brand">SITUAÇÃO DO PRODUTO</a>
        </div>
    </nav>

    <div class="alert" role="alert">
        Parabéns  <i class="fa-solid fa-hands-clapping"></i>  , sua compra foi adicionada com sucesso!!<a href="index.html" class="alert-link"> Deseja fazer mais compras ? <i class="fa-solid fa-cart-shopping"></i></a>. Clique na frase sublinhada para voltar 
    </div>

    <div class="imagem">
        <img src="assests/mercado.svg" alt="">
    </div>
    <?php include 'conexao.php' ?>
    <?php

    $nome = $_POST['nome'];
    $tipo = $_POST['tipo'];
    $quantidade = $_POST['quantidade'];

    function insere($conexao, $nome, $tipo, $quantidade)
    {
        $sql = "insert into produtos(nome, tipo, quantidade)
    values('$nome', '$tipo', $quantidade)";

        $resultado = mysqli_query($conexao, $sql);
        return $resultado;
    }

    if (insere($conexao, $nome, $tipo, $quantidade)) { ?>

    <?php
    } else {
        echo "ERRO!";
        echo mysqli_error($conexao);
    }
    ?>

</body>

</html>