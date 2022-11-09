<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../assents/images/icon_user.png" type="image/png">
    <link rel="stylesheet" href="../../style/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Exibir Usuário</title>
</head>

<?php

    session_start();
    $user = $_SESSION['txtEmail'];

    if (is_null($user)) {
        header("Location: ../../../index.html");
    }

?>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="navbar-brand ps-2">Exibir Usuário</div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end pe-1" id="myNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="./home.php" data-toggle="tab">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="./forms/frm_Cad_Usuario.php" data-toggle="tab">Cadastrar</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="./lista_usuario.php" data-toggle="tab">Listar</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="../validations/validations_Logoff.php" data-toggle="tab">Sair</a>
                </li>
            </ul>
        </div>
    </nav>

    <main>
        <?php

            require_once "../action/action_Buscar_Usuario.php";
            $usuario_Busca = retornar_Usuario();

            if (!is_null($usuario_Busca)) {
                echo '<table class="table table-striped table-dark w-50 m-auto mt-5">';
                echo '<thead>';
                echo '<tr>';
                echo '<th scope="col">Nome</th>';
                echo '<th scope="col">Email</th>';
                echo '<th scope="col">CPF</th>';
                echo '</tr>';
                echo '</thead>';
                foreach ($usuario_Busca as $user) {
                    echo '<tbody>';
                    echo '<tr>';
                    echo '<td>' . $user->getNome() . '</td>';
                    echo '<td>' . $user->getEmail() . '</td>';
                    echo '<td>' . $user->getCpf() . '</td>';
                    echo '</tr>';
                }
                echo '</tbody>';
                echo '</table>';
            } else {
                echo "<div id='alert' class='alert alert-danger alert-dismissible w-25 justify-content-start'>
                                     <button class='btn-close' data-dismiss='alert'></button>
                                     <strong>Erro: </strong>Usuário não está cadastrado ou campos não preenchidos!
                              </div>";
            }

        ?>
        
           
       
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>