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

    if ($id==1) {
        $nivel= "Maestro";
    }elseif ($id==0) {
    $nivel= "Estudiante";

    }elseif ($id==3) {
    $nivel= "Colaborador";

    }else{
    $nivel= "Administrador";

    }

    return $nivel;

}

function imagen_del_usuario($id,$conexion) {

// Verificar si el id ya existen y le manda la imagen si no le muestra la defaul
        $stmt = $conexion->prepare("SELECT * FROM m_users WHERE Id_user = :id ");
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
       $Imagen = $result["Imagen"];

    return $Imagen;

}

function mostrar_todo_lo_usuario($conexion) {
    // Inicializar un array para almacenar todos los usuarios
    $usuarios = array();

    // Realizar la consulta para obtener todos los usuarios
    $stmt = $conexion->prepare("SELECT * FROM m_users");
    $stmt->execute();

    // Obtener todos los resultados y agregarlos al array de usuarios
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $usuarios[] = $row;
    }

    // Devolver el array de usuarios
    return $usuarios;
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


      function imageResize($imageResourceId, $width, $height) {
    $targetWidth = 200;
    $targetHeight = 200; // Hacemos la altura igual que el ancho para obtener una imagen circular
    $targetLayer = imagecreatetruecolor($targetWidth, $targetHeight);
    
    // Crear un fondo transparente
    $transparent = imagecolorallocatealpha($targetLayer, 0, 0, 0, 127);
    imagefill($targetLayer, 0, 0, $transparent);
    imagesavealpha($targetLayer, true);
    
    // Copiar y redimensionar la imagen
    imagecopyresampled($targetLayer, $imageResourceId, 0, 0, 0, 0, $targetWidth, $targetHeight, $width, $height);
    
    // Crear una máscara para hacer la imagen circular
    $mask = imagecreatetruecolor($targetWidth, $targetHeight);
    $maskTransparent = imagecolorallocate($mask, 255, 255, 255);
    imagecolortransparent($mask, $maskTransparent);
    imagefilledellipse($mask, $targetWidth / 2, $targetHeight / 2, $targetWidth, $targetHeight, $maskTransparent);
    imagecopymerge($targetLayer, $mask, 0, 0, 0, 0, $targetWidth, $targetHeight, 100);

    return $targetLayer;
}

function registrouser() {
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';

    $formulario = '<div class="col-md-4 login-form">
        <h2 class="heading">Registro</h2>
        <div class="logo">
            <center><img src="../../Sena_Colombia_logo 2.svg" alt="Sena_Colombia_logo" class="logo" /></center>
        </div>
        <form id="registroForm" action="" method="POST" enctype="multipart/form-data">
            <div class="coolinput">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" class="input" id="nombre" value="' . htmlspecialchars($nombre) . '" required>
            </div>
            <div class="coolinput">
                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" class="input" id="apellido" value="' . htmlspecialchars($apellido) . '" required>
            </div>
            <div class="coolinput">
                <label for="email">Correo Electrónico:</label>
                <input type="email" name="email" class="input" id="email" value="' . htmlspecialchars($email) . '" required>
            </div>
            <div class="coolinput">
                <label for="usuario">Usuario:</label>
                <input type="text" name="usuario" class="input" id="usuario" value="' . htmlspecialchars($usuario) . '" required>
            </div>
            <div class="coolinput">
                <label for="password">Contraseña:</label>
                <input type="password" name="password" class="input" id="password" required>
            </div>
            <div class="coolinput">
                <label for="imagen">Imagen:</label>
                <input type="file" name="imagen" class="input" id="imagen" required>
            </div>
            <div class="coolinput">
                <label class="recordar">
                    <input type="checkbox" name="recordar"> Acepto los términos y condiciones
                </label><br>
            </div>
            <div class="coolinput text-center">
                <input class="boton-amarillo-block" id="submitButton" type="submit" value="Registrarse">
            </div>
        </form>
        <div id="alerta"></div>

        <div class="coolinput text-center">
            <a href="Mlogin.php">¿Ya tienes una cuenta? Inicia sesión</a>
        </div>
    </div>';
    
    return $formulario;
}

function login(){

    $formulariologin = '   <div class="col-md-4 login-form">
               <h2 class="heading">Iniciar Sesión</h2>
               <div class="logo">
                  <center> <img src="../../Sena_Colombia_logo 2.svg" alt="Sena_Colombia_logo" class="logo" /></center>
               </div>
               <form id="loginForm" action="" method="POST">
                  <div class="coolinput">
                     <label for="usuario">Usuario:</label>
                     <input type="text" name="usuario" class="input" id="usuario" required>
                  </div>
                  <div class="coolinput">
                     <label for="password">Contraseña:</label>
                     <input type="password" name="password" class="input" id="password" required>
                  </div>
                  <div class="coolinput">
                     <label class="recordar">
                     <input type="checkbox" name="recordar"> Recordar Sesión
                     </label><br>
                  </div>
                  <div class="coolinput text-center">
                     <input class="boton-amarillo-block" id="submitButton" type="submit" value="Iniciar Sesión">
                  </div>
               </form>
               <div id="alerta"></div>

               <div class="coolinput text-center">
                  <a href="#">¿Olvidaste tu contraseña?</a>
               </div>
               <div class="coolinput text-center boton-amarillo-block" style="background-color: black;">
                  <a href="Mregistro.php">Registate</a>
               </div>
            </div>';
                return $formulariologin;

}

// Función para cerrar sesión
function cerrarSesion() {
    // Iniciar sesión (asegúrate de hacerlo al comienzo de tus scripts)
     session_start();
    // Destruir todas las variables de sesión
    session_unset();
    // Destruir la sesión
    session_destroy();
    // Redirigir al usuario a la página de inicio de sesión
    header("Location: Mlogin.php");
    exit; // Asegura que el script se detenga después de redirigir
}

// Verificar si el usuario quiere cerrar la sesión
if (isset($_GET['doLogout']) && $_GET['doLogout'] == "true") {
    cerrarSesion();
}
?>