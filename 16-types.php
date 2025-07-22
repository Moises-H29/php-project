<?php declare(strict_types=1);
include 'includes/header.php';

function usuarioAutenticado(bool $autenticado) : string|int {  // Unión del tipo de retorno de valor
    if($autenticado){
        return "El usuario esta autenticado";
    }else{
        return 6;
    }
}

$usuario = usuarioAutenticado(false);
echo $usuario;



include 'includes/footer.php';