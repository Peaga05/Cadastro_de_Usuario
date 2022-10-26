<?php

require_once "../view/forms/frm_Cad_Usuario.php";
require_once "../controller/usuario_Controller.php";

$value = $_POST['btnCadastrar'];
if ($value == "Cadastrar") {
    $insert = controller_Usuario::adicionar_Usuario();

    if ($insert == "sucesso") {

        echo "<div id='alert'class='alert alert-success alert-dismissible w-25 justify-content-start'>
                     <button class='btn-close' data-dismiss='alert'></button>
                      Usuário cadastrado com sucesso!
                  </div>";
    } else if ($insert == "vazio") {

        echo "<div id='alert' class='alert alert-danger alert-dismissible w-25 justify-content-start'>
                    <button class='btn-close' data-dismiss='alert'></button>
                    <strong>Erro: </strong>Campos vazios!
                 </div>";
    } else if ($insert == "senha") {

        echo "<div id='alert' class='alert alert-danger alert-dismissible w-25 justify-content-start'>
                    <button class='btn-close' data-dismiss='alert'></button>
                    <strong>Erro: </strong>Senhas são diferentes!
                 </div>";

    } else if ($insert == "erro") {

        echo "<div id='alert' class='alert alert-danger alert-dismissible w-25 justify-content-start'>
                     <button class='btn-close' data-dismiss='alert'></button>
                     <strong>Erro: </strong>Usuário não cadastrado!
                  </div>";
    }
    
}