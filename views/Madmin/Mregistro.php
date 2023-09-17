<?php 
         include "../../conexion/core_db/core.php";
         include "funciones/funciones.php";
        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mussa Cafec Login</title>
    <!-- Agregar los estilos de Bootstrap para la estructura básica -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="admincss/cssadmin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


</head>

<body>
    <!-- Encabezado -->
    <!-- incluir el menu para que no se este repitiendo el codigo -->
    <?php 

         include "menu.php";
         include "auth/registro_de_usuario.php";


        ?>
    <!-- incluir el menu para que no se este repitiendo el codigo -->

    <div class="container">
        <div class="row justify-content-center">

            <?php 
       // Luego, puedes imprimir el formulario en tu página PHP donde desees mostrarlo:
         echo registrouser(); ?>

        </div>
    </div>

    <br>
    <!-- Footer  -->
    <?php include "footer_administracion.php";?>
    <!-- Footer  -->
    <!-- Agregar los scripts de Bootstrap (jQuery y Popper.js) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>