<html>

<head>
      <title> Controle de estoque</title>
      <meta charset="utf-8">
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="deletar.css">
      <link rel="stylesheet" href="//use.fontawesome.com/releases/v6.4.2/css/all.css">
</head>

<body style="background-color: #000;">
      <nav class="navbar navbar-expand-lg" style="background-color: #262626;">
            <div class="container-fluid" style="justify-content: center;">
                  <a class="navbar-brand" style="color: #fff;">DELETAR UM PRODUTO <i class="fa-solid fa-triangle-exclamation" style="color: #e4f609;"></i></i></a>
            </div>
      </nav>

      <center>
            <div class="conteudo_deletar" style="color: #fff;">

                  <h1>Deletar Produto</h1>
                  <fieldset>
                        <form action="deletarProdutos.php" method="post" class="formulario">
                              <label> Qual id deseja deletar:</label>
                              <input type="text" name="id"><br />

                              
                                    <button type="submit" value="Apagar" class="deletar">Apagar</button>
                        </form>
                  </fieldset>
            </div>
      </center>