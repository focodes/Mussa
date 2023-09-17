<?php 
include "../../conexion/core_db/core.php";
include "funciones/funciones.php";
include "auth/validar_session.php";

//si esta logueado no puede estar aqui
if(isset($logueado) && $logueado == TRUE) {
  header("Location: index.php");
}
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
    <?php include "menu.php";?>
    <!-- incluir el menu para que no se este repitiendo el codigo -->

    <div class="container">
        <div class="row justify-content-center">

            <?php 
       // Luego, puedes imprimir el formulario en tu página PHP donde desees mostrarlo:
         echo login(); ?>
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
    <script>
    $(document).ready(function() {
        $("#loginForm").submit(function(event) {
            // Evita el envío predeterminado del formulario
            event.preventDefault();

            // Obtiene los valores del formulario
            var usuario = $("#usuario").val();
            var password = $("#password").val();

            // Verifica si los campos están vacíos
            if (usuario === "" || password === "") {
                // Muestra una alerta de error y deshabilita el botón de envío
                $("#alerta").html(
                    '<div class="alert alert-danger">Por favor, completa todos los campos.</div>');
                $("#loginForm input[type='submit']").prop("disabled", true);
                return; // Detiene la ejecución de la función
            }

            // Envía la solicitud AJAX al servidor PHP
            $.ajax({
                type: "POST",
                url: "auth/iniciar_session.php",
                data: {
                    usuario: usuario,
                    password: password
                },
                success: function(response) {
                    console.log(response);
                    // Maneja la respuesta del servidor
                    if (response.trim() == "exito") {
                        // Muestra una alerta de éxito

                        $("#alerta").html(
                            '<div class="alert alert-success">Iniciaste sesión con éxito.</div>'
                            );

                        // Muestra una alerta de éxito con SweetAlert2
                        Swal.fire({
                            icon: 'success',
                            title: 'Inicio de sesión exitoso',
                            text: 'Serás redirigido en un minuto...',
                            timer: 10000, // Tiempo en milisegundos (60 segundos = 60000 ms)
                            timerProgressBar: true, // Muestra una barra de progreso del temporizador
                            onBeforeOpen: () => {
                                Swal
                            .showLoading(); // Muestra el indicador de carga
                            },
                            onClose: () => {
                                // Redirige a la página deseada después del inicio de sesión exitoso
                                window.location.href = "index.php";
                            }
                        });
                    } else {
                        // Muestra una alerta de error
                        $("#alerta").html(
                            '<div class="alert alert-danger">Error al iniciar sesión. Verifica tus credenciales.</div>'
                            );
                    }
                }
            });
        });

        // Habilita el botón de envío cuando se ingresa texto en los campos
        $("#usuario, #password").on("input", function() {
            if ($("#usuario").val() !== "" && $("#password").val() !== "") {
                $("#loginForm input[type='submit']").prop("disabled", false);
                $("#alerta").html(""); // Limpia la alerta
            }
        });
    });
    </script>
</body>

</html>