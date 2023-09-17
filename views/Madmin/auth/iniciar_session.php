<?php
         include "../../../conexion/core_db/core.php";

// Verifica si se enviaron los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    // Obtiene los valores del formulario
    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);

    // Obtén y limpia el valor del campo "password" del formulario
   $passwordUsuario = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

// Obtener el nombre de usuario o correo electrónico y la contraseña del formulario de inicio de sesión
$stmt = $conn->prepare("SELECT * FROM m_users WHERE Username = :usuario ");
$stmt->bindParam(':usuario', $usuario);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
//var_dump($result);
// Buscar el registro del saltoda la password en la base de datos

$saltAlmacenadoEnDB=$result['salto_password']; 
// buscar la password de la db
$contraseñaAlmacenadaEnDB=$result['Password']; 

$level = $result['Level'];
$userok = $result['Username'];
$ids = $result['Id_user'];
// Buscar el registro del usuario en la base de datos
// Recuperar el salt almacenado junto con otros datos del usuario

// Cifrar la contraseña proporcionada por el usuario con el mismo salt y pepper
$contraseñaCifrada = hash('sha512', $passwordUsuario . $saltAlmacenadoEnDB);

// Comparar $contraseñaCifrada con la contraseña almacenada en la base de datos
if ($contraseñaCifrada === $contraseñaAlmacenadaEnDB) {
    // La contraseña es correcta, permite el inicio de sesión
    ini_set('session.cookie_lifetime', 60 * 60 * 24 * 7);
            
              $session_expire = time()+1000; //expira en 15 dias
              $session_id = uniqid(); //id de session unica


              //asignar cookies 
              setcookie("session_user_id", $ids, $session_expire);
              setcookie("session_user_name", $userok, $session_expire);
              setcookie("session_id", $session_id, $session_expire,);
              setcookie("session_expire", $session_expire, $session_expire);

            session_start();
            $_SESSION['logueado'] = TRUE;
            $_SESSION['usuario'] = $userok;
            $_SESSION['ids'] = $ids;
           $_SESSION['admin'] = $level;
            //header("Location: index.php");
    echo "exito";
} else {
    // La contraseña es incorrecta, muestra un mensaje de error
    echo "error";
}

    
}
?>