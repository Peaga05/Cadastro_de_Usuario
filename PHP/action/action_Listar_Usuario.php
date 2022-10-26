<?php

    require_once "../controller/usuario_Controller.php";
    require_once "../view/lista_usuario.php";

    $listar = controller_Usuario::buscar_usuario();

    if($listar != null){
        

    }else{
        echo "<div id='alert' class='alert alert-danger alert-dismissible w-25 justify-content-start'>
                     <button class='btn-close' data-dismiss='alert'></button>
                     <strong>Erro: </strong>Usuário não está cadastrado!
              </div>";
    }


?>