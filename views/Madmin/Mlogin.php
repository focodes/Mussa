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

   </head>
   <body>
  <!-- Encabezado -->
        <!-- incluir el menu para que no se este repitiendo el codigo -->
        <?php include "menu.php";?>
        <!-- incluir el menu para que no se este repitiendo el codigo -->
      
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-md-4 login-form">
               <h2 class="heading">Iniciar Sesión</h2>
               <div class="logo">
                  <center> <img src="../../Sena_Colombia_logo 2.svg" alt="Sena_Colombia_logo" class="logo" /></center>
               </div>
               <form action="../../auth/config/iniciar_sesion.php" method="POST">
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
               <div class="coolinput text-center">
                  <a href="#">¿Olvidaste tu contraseña?</a>
               </div>
            </div>
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
        // Obtener referencias a los campos y al botón
        const usuarioInput = document.getElementById('usuario');
        const passwordInput = document.getElementById('password');
        const submitButton = document.getElementById('submitButton');

        // Función para verificar y habilitar/deshabilitar el botón
        function validarCampos() {
            const usuarioValue = usuarioInput.value.trim();
            const passwordValue = passwordInput.value.trim();

            // Verificar si los campos están vacíos
            if (usuarioValue === '' || passwordValue === '') {
                submitButton.disabled = true;
            } else {
                submitButton.disabled = false;
            }
        }

        // Agregar oyentes de eventos para los campos de entrada
        usuarioInput.addEventListener('input', validarCampos);
        passwordInput.addEventListener('input', validarCampos);

        // Llamar a la función inicialmente para deshabilitar el botón si los campos están vacíos
        validarCampos();
    </script>
   </body>
</html>