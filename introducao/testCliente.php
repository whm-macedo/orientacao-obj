<?php

include "cliente.class.php";

    $obj = new Cliente();
    $obj->nome = "Fernanda";
    $obj->telefone = "21212121";
    $obj->email = "fernanda@email.com";
    $obj->cpf = "138.465.896.63";

    echo $obj->nome;
?>