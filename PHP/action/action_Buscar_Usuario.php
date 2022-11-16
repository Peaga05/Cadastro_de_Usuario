<?php

require_once "../controller/usuario_Controller.php";
// require_once "../view/busca_usuario.php";
require_once "../classes/class_Usuario.php";

function retornar_Usuario()
{

    $value = $_POST['rbtBusca'];
    $campoBusca = $_POST['txtBusca'];
    if($value == "vazio"){
        return null;
    }

    if (!is_null($campoBusca) && !is_null($value)) {
        if ((!$value == "") && (!$campoBusca == "")) {

            $usuario_Busca = controller_Usuario::buscar_usuario($value, $campoBusca);
            if (count($usuario_Busca) > 0) {
                return $usuario_Busca;
            } else {
                return null;
            }
        }
    } else {
        return null;
    }
}
