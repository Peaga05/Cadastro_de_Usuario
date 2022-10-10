<?php

    $email = strtolower($_POST['txtEmail']);
    $senha = $_POST['txtSenha'];
    $emailValido = strtolower("admin@gmail.com");
    $senhaValida = "1234";
    $autenticar = false;

    if($email == $emailValido){
        if($senha == $senhaValida){
            $autenticar = true;
        }
    }

    session_start();
    if($autenticar){
        $_SESSION['txtEmail'] = $emailValido;
        header("Location: ../view/home.php");
    }else{
        $_SESSION['txtEmail'] = null;
        header("Location: ../../index.html");
    }
?>