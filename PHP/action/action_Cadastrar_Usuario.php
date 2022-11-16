<?php
    require_once "../controller/usuario_Controller.php";

    function cadastrar_Usuario(){
        $value = $_POST['btnCadastrar'];
        if ($value == "Cadastrar") {

            $nome = $_POST['txtNome'];
            $email = $_POST['txtEmail'];
            $senha = $_POST['txtSenha'];
            $confSenha = $_POST['txtConfSenha'];
            $cpf = $_POST['txtCPF'];

            $insert = controller_Usuario::adicionar_Usuario($nome, $email, $senha, $confSenha, $cpf);
            return $insert;
 
        }
    }

?>