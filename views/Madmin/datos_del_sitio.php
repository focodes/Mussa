<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Panel Administrativo - datos del sitio</title>
      <!-- Agregar los estilos de Bootstrap para la estructura básica -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
      <script type="text/javascript" src="ckfinder/ckfinder.js"></script>  
      <!-- Estilos personalizados -->
      <link rel="stylesheet" href="admincss/cssadmin.css">

   </head>
   <body>
     <!-- Encabezado -->
        <!-- incluir el menu para que no se este repitiendo el codigo -->
        <?php include "menu.php";?>
        <!-- incluir el menu para que no se este repitiendo el codigo -->


<div class="container content">
    <div class="row">
        <!-- Barra lateral de administración -->
        <?php include "menu_de_administracion.php";?>
        <!-- Barra lateral de administración -->

        <!-- Contenido principal -->
        <div class="col-md-9 admin-content">
            
<br>
            <div class="container mt-5">
        <h2>Formulario de Administración</h2>
        <form>
            <div class="form-group">
                <label for="nombreSitio">Nombre del Sitio Web:</label>
                <input type="text" class="form-control" id="nombreSitio" placeholder="Ingrese el nombre del sitio">
            </div>
            <div class="form-group">
                <label for="urlSitio">URL del Sitio Web:</label>
                <input type="url" class="form-control" id="urlSitio" placeholder="Ingrese la URL del sitio">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea class="form-control" id="descripcion" rows="4" placeholder="Ingrese una descripción"></textarea>
                <script type="text/javascript">
                var editor=CKEDITOR.replace('descripcion',{customConfig : 'myconfig.js'});
                CKFinder.setupCKEditor(editor, 'ckfinder/') ;
            </script>
            </div>
            <div class="form-group">
                <label for="redesSociales">Redes Sociales:</label>
                <input type="text" class="form-control" id="redesSociales" placeholder="Ingrese las redes sociales">
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="tel" class="form-control" id="telefono" placeholder="Ingrese el número de teléfono">
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" class="form-control" id="email" placeholder="Ingrese la dirección de correo electrónico">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>

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
