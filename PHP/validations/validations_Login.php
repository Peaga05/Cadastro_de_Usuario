<?php

    $email = strtolower($_POST['txtEmail']);
    $senha = $_POST['txtSenha'];
    $emailValido = strtolower("admin@gmail.com");
    $senhaValida = 1234;
    $valiado = false;

    if($email == $emailValido){
        if($senha == $senhaValida){
            $valiado = true;
        }
    }

    session_start();
    if($valiado){
        $_SESSION['txtEmail'] = $emailValido;
        header("Location ../pages/home.php");
    }else{
        $_SESSION['txtEmail'] = null;
        header("Location ../index.html");
    }
?>