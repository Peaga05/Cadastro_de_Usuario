<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../assents/images/icon_user.png" type="image/png">
    <link rel="stylesheet" href="../../../style/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Cadastrar</title>
</head>

<?php
    session_start();
    $user = $_SESSION['txtEmail'];

    if(is_null($user)){
        header("Location: ../../../index.html");
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
                <li class="nav-item">
                    <a class="nav-link" href="../home.php" data-toggle="tab">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="./frm_Cad_Usuario.php" data-toggle="tab">Cadastrar</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="tab">Listar</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="../../validations/validations_Logoff.php" data-toggle="tab">Sair</a>
                </li>
            </ul>
        </div>
    </nav>

    <main>
        <div class="global-container">
            <div class="card login-form">

                <div class="card-body">
                    <h1 class="card-title text-center">CADASTRO</h1>
                </div>

                <div class="card-text">
                    <form action="../../controller/usuario_Controller.php" method="POST">

                        <div class="mb-1">
                            <label for="txtNome" class="form-label">Nome</label>
                            <input type="text" id="txtNome" name="txtNome" class="form-control">
                        </div>

                        <div class="mb-1">
                            <label for="txtEmail" class="form-label">Email</label>
                            <input type="text" id="txtEmail" name="txtEmail" class="form-control">
                        </div>

                        <div class="mb-1">
                            <label for="txtSenha" class="form-label">Senha</label>
                            <input type="password" id="txtSenha" name="txtSenha" class="form-control">
                        </div>

                        <div class="mb-1">
                            <label for="txtSenha" class="form-label">Confirmar senha</label>
                            <input type="password" id="txtConfSenha" name="txtConfSenha" class="form-control">
                        </div>

                        <div class="mb-1">
                            <label for="txtCPF" class="form-label">CPF</label>
                            <input type="text" id="txtCPF" name="txtCPF" class="form-control">
                        </div>

                        <div class="d-grip gap-2">
                           <input type="submit" class="btn btn-primary w-100" value="Cadastrar" name="btnCad">
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="../../../script/main.js"></script>
</body>

</html>