<?php

class Conexao
{

    protected static $usuario = "root";
    protected static $senha = "12332118";
    protected static $banco = "projetophp";
    protected static $endereco = "localhost";

    public static function Conectar()
    {
        $conexao = new mysqli(self::$endereco, self::$usuario, self::$senha, self::$banco);

        if (mysqli_connect_error()) {
            echo "Erro na conexão: " . mysqli_connect_error();
        } else {
            return $conexao;
        }
    }

    public static function sql_Query($conexao, $sql)
    {
        mysqli_query($conexao, $sql);
    }
}
