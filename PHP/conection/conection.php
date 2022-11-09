<?php

use Conexao as GlobalConexao;

class Conexao
{

    protected static $usuario = "root";
    protected static $senha = "12332118";
    protected static $banco = "projetophp";
    protected static $endereco = "localhost";
    static $bd;

    public static function Conectar()
    {
        $bd = new mysqli(self::$endereco, self::$usuario, self::$senha, self::$banco);

        if (mysqli_connect_error()) {
            echo "Erro na conexão: " . mysqli_connect_error();
        }else{
            return $bd;
        }
    }

    public static function sql_Query($bd, $sql)
    {
        return mysqli_query($bd, $sql);
    }
}

?>
