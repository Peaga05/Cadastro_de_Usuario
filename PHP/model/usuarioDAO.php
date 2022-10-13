<?php

    require_once "../conection/conection.php";
    require_once "../classes/class_Usuario.php";

    class usuario_DAO{

        public static function cadastrar_Usuario(Usuario $usuario){

            $pNome = $usuario->getNome();
            $pEmail = $usuario->getEmail();
            $pSenha = $usuario->getSenha();
            $pCpf = $usuario->getCpf();

            $query = "INSERT INTO usuario(nome, email, senha, cpf) VALUES(
                      '$pNome',
                      '$pEmail',
                      '$pSenha',
                      '$pCpf'
                    );";

            $conexao = new Conexao();
            $conexao::Conectar();

            if($conexao::sql_Query($conexao, $query)){
                echo "<div  class='alert alert-success alert-dismissible'>
                      <button class='btn-close' data-dismiss='alert'></button>
                      <strong>Usuário cadastrado com sucesso!</strong>
                      </div>";
            }else{
                echo "<div  class='alert alert-danger alert-dismissible'>
                     <button class='btn-close' data-dismiss='alert'></button>
                     <strong>Erro:</strong> Usuário não cadastrado!
                     </div>";
            }

        }
    }

?>