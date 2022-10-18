<?php

require_once "../model/usuario_DAO.php";
require_once "../classes/class_Usuario.php";
require_once "../view/forms/frm_Cad_Usuario.php";

class controller_Usuario{

    public static function adicionar_Usuario(){
        $nome = $_POST['txtNome'];
        $email = $_POST['txtEmail'];
        $senha = $_POST['txtSenha'];
        $confSenha = $_POST['txtConfSenha'];
        $cpf = $_POST['txtCPF'];

        // if($senha != $confSenha){
        //     return false;
        // }

        $usuario = new Usuario();
        $usuario->setNome($nome);
        $usuario->setEmail($email);
        $usuario->setSenha($senha);
        $usuario->setCpf($cpf);

       $insert =  usuario_DAO::cadastrar_Usuario($usuario);

       if($insert){
            return true;
       }else{
            return false;
       }
        
    }
}

?>