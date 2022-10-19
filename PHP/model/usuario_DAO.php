<?php

    require_once "../conection/conection.php";
    require_once "../classes/class_Usuario.php";

    class usuario_DAO{

        public static function cadastrar_Usuario(Usuario $usuario){

            $pNome = $usuario->getNome();
            $pEmail = $usuario->getEmail();
            $pSenha = $usuario->getSenha();
            $pCpf = $usuario->getCpf();

            $query = "INSERT INTO usuario (nome, email, senha, cpf) VALUES(
                      '$pNome',
                      '$pEmail',
                      '$pSenha',
                      '$pCpf'
                    );";

            $conexao = new Conexao();
            $conexao::Conectar();
            $insert = $conexao::sql_Query($query);

            if($insert){
                return true;
            }else{
                return false;
            }
        }
    }

?>