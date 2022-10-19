<?php

    require_once "../view/forms/frm_Cad_Usuario.php";
    require_once "../controller/usuario_Controller.php"; 

    $value = $_POST['btnCad'];
    if($value == "Cadastrar"){
        $insert = controller_Usuario::adicionar_Usuario();

        if($insert){
            echo "<div class='alert alert-success alert-dismissible w-25 justify-content-start'>
                  <button class='btn-close' data-dismiss='alert'></button>
                   Usuário cadastrado com sucesso!
                  </div>";
        }else{
            echo "<div class='alert alert-danger alert-dismissible w-25 justify-content-start'>
                 <button class='btn-close' data-dismiss='alert'></button>
                 <strong>Erro:</strong> Usuário não cadastrado!
                 </div>";
        }
    }
?>