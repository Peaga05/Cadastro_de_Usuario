<?php

require_once "../model/usuario_DAO.php";
require_once "../classes/class_Usuario.php";

class controller_Usuario
{

     public static function adicionar_Usuario($pNome, $pEmail, $pSenha, $pConfSenha, $pCpf)
     {
          if ($pNome == "") {
               return "vazio";
          }

          if ($pEmail == "") {
               return "vazio";
          }

          if ($pSenha == "" || $pConfSenha == "") {
               return "vazio";
          }

          if ($pCpf == "") {
               return "vazio";
          }

          if ($pSenha != $pConfSenha) {
               return "senha";
          }

          $usuario = new Usuario();
          $usuario->setNome($pNome);
          $usuario->setEmail($pEmail);
          $usuario->setSenha($pSenha);
          $usuario->setCpf($pCpf);

          $insert = usuario_DAO::cadastrar_Usuario($usuario);

          if ($insert) {
               return "sucesso";
          } else {
               return "erro";
          }
     }

     public static function buscar_usuario($value, $campoBusca)
     {
          if ($value == "nome") {
               $buscar = usuario_DAO::buscar_usuario("nome", $campoBusca);

          } else if ($value == "email") {
               $buscar = usuario_DAO::buscar_usuario("email", $campoBusca);

          } else if ($value == "cpf") {
               $buscar = usuario_DAO::buscar_usuario("cpf", $campoBusca);

          }

          if(!is_null($buscar)){
               $list = array();
               foreach ($buscar as $user) {
                    $usuario = new Usuario();
                    $usuario->setNome($user['nome']);
                    $usuario->setEmail($user['email']);
                    $usuario->setCpf($user['cpf']);
                    array_push($list, $usuario);
                }
             
               return $list;
          }else{
               return null;
          }
          
     }
}
