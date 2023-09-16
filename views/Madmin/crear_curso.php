<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Panel Administrativo - Crear curso</title>
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
        <h2>Formulario para la creacion de curso</h2>
        <form>
    <div class="form-group">
        <label for="nombreCurso">Nombre del Curso:</label>
        <input type="text" class="form-control" id="nombreCurso" placeholder="Ingrese el nombre del curso">
    </div>
   
    <div class="form-group">
        <label for="descripcion">Descripción del Curso:</label>
        <textarea class="form-control" id="descripcion" rows="4" placeholder="Ingrese una descripción del curso"></textarea>
        <!-- Agrega aquí tu configuración para el editor de texto si es necesario -->
        <script type="text/javascript">
                var editor=CKEDITOR.replace('descripcion',{customConfig : 'myconfig.js'});
                CKFinder.setupCKEditor(editor, 'ckfinder/') ;
            </script>
    </div>
    <div class="form-group">
        <label for="telefono">Teléfono de Contacto:</label>
        <input type="tel" class="form-control" id="telefono" placeholder="Ingrese el número de teléfono de contacto">
    </div>
    <div class="form-group">
        <label for="email">Correo Electrónico de Contacto:</label>
        <input type="email" class="form-control" id="email" placeholder="Ingrese la dirección de correo electrónico de contacto">
    </div>
    <div class="form-group">
        <label for="documentoCurso">Documento de requerimiento (PDF):</label>
        <input type="file" class="form-control-file" id="documentoCurso">
    </div>
    <div class="form-group">
        <label for="nivelCurso">Nivel del Curso:</label>
        <select class="form-control" id="nivelCurso">
            <option value="basico">Básico</option>
            <option value="intermedio">Intermedio</option>
            <option value="avanzado">Avanzado</option>
        </select>
    </div>
    <div class="form-group">
        <label for="duracionCurso">Duración del Curso:</label>
        <input type="text" class="form-control" id="duracionCurso" placeholder="Ingrese la duración del curso (por ejemplo, 10 semanas)">
    </div>
    <button type="submit" class="btn btn-primary">Guardar Curso</button>
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
