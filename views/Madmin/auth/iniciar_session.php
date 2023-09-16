<?php
// Verifica si se enviaron los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    // Obtiene los valores del formulario
    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);

    // Obtén y limpia el valor del campo "password" del formulario
   $passwordUsuario = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    // Obtener el nombre de usuario o correo electrónico y la contraseña del formulario de inicio de sesión

// Buscar el registro del usuario en la base de datos
// Recuperar el salt almacenado junto con otros datos del usuario

// Cifrar la contraseña proporcionada por el usuario con el mismo salt y pepper
$contraseñaCifrada = saltPepper($passwordUsuario, $saltAlmacenadoEnDB, $pepper);

// Comparar $contraseñaCifrada con la contraseña almacenada en la base de datos
if ($contraseñaCifrada === $contraseñaAlmacenadaEnDB) {
    // La contraseña es correcta, permite el inicio de sesión
    echo "exito";
} else {
    // La contraseña es incorrecta, muestra un mensaje de error
    echo "error";
}

    
}
?>
