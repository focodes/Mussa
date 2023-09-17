<?php

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        

        // Recuperar datos del formulario
        $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
        $apellido = filter_input(INPUT_POST, 'apellido', FILTER_SANITIZE_STRING);
        $correo = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $email = filter_var($correo, FILTER_VALIDATE_EMAIL);
        $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
        $imagen = filter_input(INPUT_POST, 'imagen', FILTER_SANITIZE_STRING);
        //crear SALT unico
        $random_salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));
        $passwordh = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        // Crea una contraseña con SALT. 
        $password = hash('sha512', $passwordh . $random_salt);
        $aceptaTerminos = isset($_POST["recordar"]) ? 1 : 0; // 1 si se marca, 0 si no se marca

        // Verificar si el usuario o el correo ya existen
        $stmt = $conn->prepare("SELECT * FROM m_users WHERE Username = :usuario OR email = :email");
        $stmt->bindParam(':usuario', $usuario);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            if ($result['usuario'] === $usuario) {
     echo "<script>
            Swal.fire({
              icon: 'error',
              title: 'Oops...!',
              text: 'El usuario ya está registrado.',  
              }) </script>";
               
            }
            if ($result['email'] === $email) {
     echo "<script>
            Swal.fire({
              icon: 'error',
              title: 'Oops...!',
              text: 'El correo electrónico ya está registrado.',  
              }) </script>";
            }
        } else {
            // Verificar si se aceptaron los términos y condiciones
            if ($aceptaTerminos == 1) {

$nombre = str_replace(array('?', '!', '¡', '¿', '(', ')', '/', ';', ':',',','.',' '),
        '-',
        $usuario);
/*PROCESADOR DE IMAGENES*/
        if(is_array($_FILES)) {
            /*IMAGEN PORTADA*/

            $file = $_FILES['imagen']['tmp_name']; 
            $sourceProperties = getimagesize($file);
            $fileNewName = $nombre. "_". date('Y-m-d');
            $folderPath = "../../img/user/";
            $ext = pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION);
            $ext_webpI = "jpg";
            $imageType = $sourceProperties[2];
            switch ($imageType) {
                case IMAGETYPE_PNG:
                    $imageResourceId = imagecreatefrompng($file); 
                    $targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
                    imagejpeg($targetLayer,$folderPath. $fileNewName. "_thump.". $ext_webpI,70);
                    break;
                case IMAGETYPE_GIF:
                    $imageResourceId = imagecreatefromgif($file); 
                    $targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
                    imagejpeg($targetLayer,$folderPath. $fileNewName. "_thump.". $ext_webpI,70);
                    break;
                case IMAGETYPE_JPEG:
                    $imageResourceId = imagecreatefromjpeg($file); 
                    $targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
                    imagejpeg($targetLayer,$folderPath. $fileNewName. "_thump.". $ext_webpI,70);
                    break;
                default:
                    echo "Las imagenes solo puedes ser: .JPG .PNG o .GIF";
                    exit;
                    break;
            }
            
            /*FUNCIONES*/
            // move_uploaded_file($file, $folderPath. $fileNewName. ".". $ext);

            $imagen = $folderPath. $fileNewName. "_thump.". $ext_webpI;
            }
        

                // Insertar los datos en la base de datos
                $insert_sql = "INSERT INTO m_users (Username, Nombre, Apellidos,email, Imagen, Password, salto_password,acepta_terminos) VALUES (:usuario, :nombre, :apellido,:email, :imagen, :password,:random_salt, :aceptaTerminos)";
                $insert_stmt = $conn->prepare($insert_sql);
                $insert_stmt->bindParam(':nombre', $nombre);
                $insert_stmt->bindParam(':apellido', $apellido);
                $insert_stmt->bindParam(':email', $email);
                $insert_stmt->bindParam(':usuario', $usuario);
                $insert_stmt->bindParam(':password', $password);
                $insert_stmt->bindParam(':imagen', $imagen);
                $insert_stmt->bindParam(':random_salt', $random_salt);
                $insert_stmt->bindParam(':aceptaTerminos', $aceptaTerminos, PDO::PARAM_INT);

                if ($insert_stmt->execute()) {
        echo "<script>
            Swal.fire({
              icon: 'success',
              title: 'Oops...!',
              text: 'Registro exitoso.',  
              }) </script>";
                } else {
    echo "<script>
            Swal.fire({
              icon: 'error',
              title: 'Oops...!',
              text: 'Error al registrar.',  
              }) </script>";
                    
                }
            } else {
    echo "<script>
            Swal.fire({
              icon: 'error',
              title: 'Oops...!',
              text: 'Debes aceptar los términos y condiciones para registrarte.',  
              }) </script>";
            }
        }
    } catch (PDOException $e) {
        echo "Error de conexión: " . $e->getMessage();
    }


}
?>