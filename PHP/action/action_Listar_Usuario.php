<?php

require_once "../controller/usuario_Controller.php";
require_once "../view/lista_usuario.php";
require_once "../classes/class_Usuario.php";

$btn = $_POST['btnBuscar'];
$value = $_POST['radioCheck'];
$campoBusca = $_POST['txtBusca'];

if (!is_null($campoBusca)  && !is_null($value)) {
    if ($btn == "Buscar") {
        $usuario_Busca = controller_Usuario::buscar_usuario($value, $campoBusca);

        if (!is_null($usuario_Busca)) {
            echo '<table class="table table-striped table-dark w-50 m-auto">';
            echo '<thead>';
            echo '<tr>';
            echo '<th scope="col">Nome</th>';
            echo '<th scope="col">Email</th>';
            echo '<th scope="col">CPF</th>';
            echo '</tr>';
            echo '</thead>';
            foreach ($usuario_Busca as $user) {
                echo '<tbody>';
                echo '<tr>';
                echo '<td>' . $user->getNome() . '</td>';
                echo '<td>' . $user->getEmail() . '</td>';
                echo '<td>' . $user->getCpf() . '</td>';
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';
        } else {
            echo "<div id='alert' class='alert alert-danger alert-dismissible w-25 justify-content-start'>
                             <button class='btn-close' data-dismiss='alert'></button>
                             <strong>Erro: </strong>Usuário não está cadastrado!
                      </div>";
        }
    }
} else {
    echo "<div id='alert' class='alert alert-danger alert-dismissible w-25 justify-content-start'>
            <button class='btn-close' data-dismiss='alert'></button>
            <strong>Erro: </strong>Campos de busca vazio!
        </div>";
}
