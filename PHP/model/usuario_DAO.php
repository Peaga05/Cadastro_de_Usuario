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

        public static function buscar_usuario($busca, $item){
            if($busca == "nome"){
                $query = "SELECT * FROM usuario WHERE nome = " .$item . ";";

            }else if($busca == "cpf"){
                $query = "SELECT * FROM usuario WHERE cpf = " .$item . ";";

            }else if($busca == "cpf"){
                $query = "SELECT * FROM usuario WHERE email = " .$item . ";";
            }

            $conexao = new Conexao();
            $conexao::Conectar();
            $user = $conexao::sql_Query($query);

                while($resp = $user->fetch_array()){
                    
                }

            return $user;
        }
    }

?>