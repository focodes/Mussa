<nav class="navbar navbar-expand-lg navbar-dark">
         <a class="navbar-brand" href="#">
            <div class="logo">
               <img src="../../Sena_Colombia_logo 2.svg" alt="Sena_Colombia_logo" class="logo" />
            </div>
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav movermenu">
        <!-- incluir el menu para que no se este repitiendo el codigo -->
        <li class="nav-item">
            <a class="nav-link" href="index.html">Inicio</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="#">Registro</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="#">Administrador</a>
         </li>         <!-- incluir el menu para que no se este repitiendo el codigo -->

            </ul>
            <ul class="navbar-nav ml-auto">
               <!-- Agregar lógica de inicio de sesión -->
               <!-- Ejemplo de usuario logueado -->
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="userMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="user-image.jpg" alt="Usuario" width="30" height="30">
                  Nombre de Usuario
                  </a>
                  <div class="dropdown-menu" aria-labelledby="userMenu">
                     <a class="dropdown-item" href="#">Perfil</a>
                     <a class="dropdown-item" href="#">Configuración</a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="#">Cerrar Sesión</a>
                  </div>
               </li>
            </ul>
         </div>
      </nav>