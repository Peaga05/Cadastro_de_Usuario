<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./style/main.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Home</title>
</head>

<?php
  session_start();
  $user = $_SESSION['txtEmail'];

  if(is_null($user)){
    header("Location: ../../index.html");
  }
?>

<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="navbar-brand ps-2">Inventário de Usuário</div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end pe-1" id="myNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="#home" data-toggle="tab">
            Home</a></li>
        <li class="nav-item"><a class="nav-link" href="./forms/frm_Cad_Usuario.php" data-toggle="tab">
            Cadastrar</a></li>
        <li class="nav-item"><a class="nav-link" href="./buscar_Usuario.php" data-toggle="tab">
            Listar</a>
        </li>
        <li class="nav-item"><a class="nav-link" href="../validations/validations_Logoff.php" data-toggle="tab">
            Sair</a></li>
      </ul>
    </div>
  </nav>

  <div class="container text-center mt-5">

    <div class="card-group">
      <div class="card p-1 me-2">
        <img class="card-img-top" src="../../assents/images/error.png" alt="Error 404">
        <div class="card-body">
          <h5 class="card-title">Cadastrar</h5>
          <p class="card-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus laboriosam nam, molestiae vitae explicabo
            quis natus consequatur quas similique eos eaque tempora voluptate culpa dolorum officiis aliquid architecto
            inventore consectetur.
          </p>
          <p class="card-text"><small class="text-muted"><a class="page-link" href="./forms/frm_Cad_Usuario.php">Acessar</a></small></p>
        </div>
      </div>
      <div class="card p-1 me-2">
        <img class="card-img-top" src="../../assents/images/error.png" alt="Error 404">
        <div class="card-body">
          <h5 class="card-title">Listar</h5>
          <p class="card-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus laboriosam nam, molestiae vitae explicabo
            quis natus consequatur quas similique eos eaque tempora voluptate culpa dolorum officiis aliquid architecto
            inventore consectetur.
          </p>
          <p class="card-text"><small class="text-muted"><a class="page-link" href="./busca_Usuario.php">Acessar</a></small></p>
        </div>
      </div>
      <div class="card p-1 me-2">
        <img class="card-img-top" src="../../assents/images/error.png" alt="Error 404">
        <div class="card-body">
          <h5 class="card-title">Alterar/Excluir</h5>
          <p class="card-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus laboriosam nam, molestiae vitae explicabo
            quis natus consequatur quas similique eos eaque tempora voluptate culpa dolorum officiis aliquid architecto
            inventore consectetur.
          </p>
          <p class="card-text"><small class="text-muted"><a class="page-link" href="#">Acessar</a></small></p>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>
</body>

</html>