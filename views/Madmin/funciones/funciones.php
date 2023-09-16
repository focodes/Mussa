<?php

function datos_del_sitio() {

    $theValue = "nombre";

    return $theValue;

}
function nombre_del_usuario($id,$conexion) {

    $theValue = "nombre";

    return $theValue;

}
function lever_del_usuario($id,$conexion) {

    $theValue = "nombre";

    return $theValue;

}

function subir_archivo($documento)
    {
        
            return 0;
            
        
    }
    function limpiarYValidarUsuario($inputName) {
        // Obtén el valor del campo de entrada y límpialo
        $usuario = filter_input(INPUT_POST, $inputName, FILTER_SANITIZE_STRING);
    
        // Define una expresión regular para validar el nombre de usuario
        $patron = "/^[a-zA-Z0-9]+$/";
    
        // Realiza la validación del nombre de usuario
        if (preg_match($patron, $usuario)) {
            // El nombre de usuario es válido
            return $usuario;
        } else {
            // El nombre de usuario no es válido
            return false;
        }
    }
?>