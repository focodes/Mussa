<nav class="navbar navbar-expand-lg navbar-dark">
         <a class="navbar-brand" href="#">
            <div class="logo">
               <img src="../../Sena_Colombia_logo 2.svg" alt="Sena_Colombia_logo" class="logo" />
            </div>
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa-sharp fa-solid fa-bars fa-lg" style="color: #000000;"></i>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav movermenu">
        <!-- incluir el menu para que no se este repitiendo el codigo -->
        <li class="nav-item">
            <a class="nav-link" href="index.php">Inicio</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="registro.php">Registro</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="index.php">Administrador</a>
         </li>         <!-- incluir el menu para que no se este repitiendo el codigo -->

            </ul>

 <ul class="navbar-nav ml-auto">
              
<!-- esto se mostrara cuando el usuario no este logueado -->

   <?php   
// esto se mostrar
if(!isset($_SESSION['usuario'])){          ?>
<li class="nav-item">
<a href="Mlogin.php" class="btn btn-outline-light">Iniciar Sesión</a>
</li>
<!-- esto se mostrara cuando el usuario no este logueado -->

 <?php    }else{   ?>
           
               <!-- Agregar lógica de inicio de sesión -->
               <!-- Ejemplo de usuario logueado -->
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="userMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="user-image.jpg" alt="Usuario" width="30" height="30">
                  <?php echo $_SESSION['usuario']; ?>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="userMenu">
                     <a class="dropdown-item" href="#">Perfil</a>
                     <a class="dropdown-item" href="#">Configuración</a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="#">Cerrar Sesión</a>
                  </div>
               </li>
            </ul>
         <?php    }      ?>

         </div>
      </nav>