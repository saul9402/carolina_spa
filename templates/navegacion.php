
  <div class="navegacion mt-3 py-2">
    <!-- la clase navbar-expand-md indica que cuando el dispositivo sea mediano o más grande 
          se muestren todos los iconos menor a eso se eberá mostrar un menu de "hamburguesa"-->
    <nav class="nav-principal navbar navbar-expand-md navbar-light bg-faded">
      <!-- Menu responsive -->
      <!-- Con esto indicas que este boton va a manejar un evento toggle para una barra de navegación -->
      <!-- el data-target te srive para enlazar el contenido que deberá mostrarse o dejarse de mostrar -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav_principal"
        aria-label="Mostrar Navegacion">
        <!-- Con esto pones el icono de menu de hamburguesa -->
        <span class="navbar-toggler-icon"></span>
      </button>
      <a href="" class="navbar-brand d-lg-none">Carolina Spa</a>
      <div class="container">
        <!-- Con este div indicas que este será el contenido a mostrar/no mostrar por el boton de arriba -->
        <div class="collapse navbar-collapse" id="nav_principal">
          <!-- nav-justified permite separar los elementos de este menú cada uno con el mismo espacio y ocupando tdo el espacio disponible -->
          <!-- flex-column indica que se va a ver como columna y flex-sm-row indica que se verá como fila el sm indica a partir de que tamaños se aplicara cada estilo -->
          <ul class="nav nav-justified w-100 flex-column flex-sm-row">
            <li class="nav-item">
              <a href="index.php" class="nav-link">Inicio</a>
            </li>
            <li class="nav-item">
              <a href="nosotros.php" class="nav-link">Nosotros</a>
            </li>
            <li class="nav-item">
              <a href="servicios.php" class="nav-link">Servicios</a>
            </li>
            <li class="nav-item">
              <a href="productos.php" class="nav-link">Productos</a>
            </li>
            <li class="nav-item">
              <a href="contacto.php" class="nav-link">Contacto</a>
            </li>
          </ul>
        </div>
        <!--collapse-->
      </div>
      <!--container-->
    </nav>
  </div>