<?php 
include "../../conexion/core_db/core.php";
include "funciones/funciones.php";
include "auth/validar_session.php";
        ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Panel Administrativo</title>
      <!-- Agregar los estilos de Bootstrap para la estructura básica -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <!-- Estilos personalizados -->
      <link rel="stylesheet" href="admincss/cssadmin.css">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   </head>
   <body>
      <!-- Encabezado -->
        <!-- incluir el menu para que no se este repitiendo el codigo -->
              <?php include "menu.php";?>
                <!-- incluir el menu para que no se este repitiendo el codigo -->

<div class="container content">
    <div class="row">
        <!-- Barra lateral de administración -->
        <?php include "menu_de_adminitracion.php";?>
        <!-- Barra lateral de administración -->


        <!-- Contenido principal -->
        <div class="col-md-9 admin-content">
            <!-- Botón de acción -->
            <div class="text-right">
                <a href="crear_curso.php" class="btn btn-primary" target="_blank"><i class="fa-solid fa-circle-plus"></i> Acción</a>
            </div>
<br>
            <!-- Tabla de administración -->
            <div class="alert alert-success" role="alert">
                Ultimos cursos creados
               </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Correo Electrónico</th>
                        <th>Acción</th>
                        <!-- Agrega más encabezados de tabla según sea necesario -->
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>informatica</td>
                        <td>usuario1@example.com</td>
                        <!-- Agrega más filas de tabla según sea necesario -->
                        <td>
                           <form style="display: inline-block; margin-right: 5px;" method="post" action="" >                           

                            <button type="submit" class="btn btn-primary btn-sm" ><i class="fa-solid fa-pen-to-square"></i> Editar</button>
                           </form>
                           <form style="display: inline-block;" method="post" action="">
                            <button type="submit" class="btn btn-danger btn-sm" ><i class="fa-solid fa-trash"></i> Eliminar</button>             </form>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>ingles</td>
                        <td>usuario1@example.com</td>
                        <!-- Agrega más filas de tabla según sea necesario -->
                        <td>
                     <form style="display: inline-block; margin-right: 5px;" method="post" action="">
                         <button type="submit" class="btn btn-primary btn-sm" ><i class="fa-solid fa-pen-to-square"></i> Editar</button>
                           </form>
                    <form style="display: inline-block;" method="post" action="">
                        <button type="submit" class="btn btn-danger btn-sm" ><i class="fa-solid fa-trash"></i> Eliminar</button>        </form>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>ciencias</td>
                        <td>usuario1@example.com</td>
                        <!-- Agrega más filas de tabla según sea necesario -->
                        <td>
                           <form style="display: inline-block; margin-right: 5px;" method="post" action="">
                        <button type="submit" class="btn btn-primary btn-sm" ><i class="fa-solid fa-pen-to-square"></i> Editar</button>
                           </form>
                           <form style="display: inline-block;" method="post" action="">
                            <button type="submit" class="btn btn-danger btn-sm" ><i class="fa-solid fa-trash"></i> Eliminar</button>             </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<br />
    <!-- Footer  -->
       <?php include "footer_administracion.php";?>
    <!-- Footer  -->

    <!-- Agregar los scripts de Bootstrap (jQuery y Popper.js) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
