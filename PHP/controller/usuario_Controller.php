<?php

require_once "../model/usuario_DAO.php";
require_once "../classes/class_Usuario.php";
require_once "../view/forms/frm_Cad_Usuario.php";

class controller_Usuario
{

     public static function adicionar_Usuario()
     {
          $nome = $_POST['txtNome'];
          $email = $_POST['txtEmail'];
          $senha = $_POST['txtSenha'];
          $confSenha = $_POST['txtConfSenha'];
          $cpf = $_POST['txtCPF'];

          if ($nome == "") {
               return "vazio";
          }

          if ($email == "") {
               return "vazio";
          }

          if ($senha == "" || $confSenha == "") {
               return "vazio";
          }

          if($cpf == ""){
               return "vazio";
          }

          if ($senha != $confSenha) {
               return "senha";

          }

          $usuario = new Usuario();
          $usuario->setNome($nome);
          $usuario->setEmail($email);
          $usuario->setSenha($senha);
          $usuario->setCpf($cpf);

          $insert = usuario_DAO::cadastrar_Usuario($usuario);

          if ($insert) {
               return "sucesso";
          } else {
               return "erro";
          }
     }
}


