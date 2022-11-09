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

            $bd = Conexao::Conectar();
            $insert = Conexao::sql_Query($bd, $query);

            if($insert){
                return true;
            }else{
                return false;
            }

        }

        public static function buscar_usuario($busca, $item){
            if($busca == "nome"){
                $query = "SELECT * FROM usuario WHERE nome LIKE '%" . $item . "%';";
            }else if($busca == "email"){
                $query = "SELECT * FROM usuario WHERE email = '" . $item . "';";
            }else if($busca == "cpf"){
                $query = "SELECT * FROM usuario WHERE cpf = '" . $item . "';";
            }      

            $bd = Conexao::Conectar();;
            $user = Conexao::sql_Query($bd, $query);

            $list = array();
            while($dado = mysqli_fetch_array($user, MYSQLI_ASSOC)){
                array_push($list, $dado);
            }
            // $user = $conexao::sql_Query($query);
            // $resp = mysqli_fetch_array($list);
               
            return $list;
        }
    }

?>