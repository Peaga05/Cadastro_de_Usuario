<?php

    require_once "../view/forms/frm_Cad_Usuario.php";
    require_once "../controller/usuario_Controller.php";

    $value = $_POST['btnCad'];

    if($value == "Cadastrar"){
        $insert = controller_Usuario::adicionar_Usuario();

        if($insert){
            echo "<div  class='alert alert-danger alert-dismissible'>
            <button class='btn-close' data-dismiss='alert'></button>
            <strong>Erro:</strong> Usuário não cadastrado!
            </div>";
        }else{
            echo "<div  class='alert alert-danger alert-dismissible'>
              <button class='btn-close' data-dismiss='alert'></button>
              <strong>Erro:</strong> Usuário não cadastrado!
              </div>";
        }
    }
?>