<?php
/*este codigo permitirá validar que en la url no se ponga algo que no sean numeros */
/*La funcion isset pregunta si el valor contiene algo, es decir si no es null */
      if(isset($_GET['id'])){
        /*La funcion filter_var valida que el valor que viene en la variable cummpla con 
        el filtro que esta en el segundo parametro, en este caso validamos que sea un int */
       if(filter_var($_GET['id'], FILTER_VALIDATE_INT)){
          $producto_id = $_GET['id'];
        }else{
          /**
           * Con esta funcion rediriges hacia alguna pagina dentro del proyecto
           * y se debe poner un exit siempre que vayas a redirigir
           */
          header('Location: 404.html');
          exit;
        }
      }
      /**Toda la validacoion se pone antes ya que se pretende redireccionar en caso de que algo salga mal */
      include 'templates/header.php';
      include 'templates/navegacion.php';

      include 'inc/funciones.php';
      /**
       * Con estas lineas de codigo muestra los errores en php
       */
      /*ini_set("display_errors", "1");
      error_reporting(E_ALL);*/
      $resultado = obtenerProducto($producto_id);

      if($resultado->num_rows > 0){
        while($producto = $resultado->fetch_assoc()){
  ?>

    <div class="container pt-4">
      <div class="row no-gutters">
        <div class="col-12 hero">
          <img src="img/<?php echo $producto['imagen_completa']; ?>" class="img-fluid" alt="">
          <h2 class="text-uppercase d-none d-md-block py-3 px-5">
            <?php echo $producto['nombre']; ?>
          </h2>
        </div>
      </div>
    </div>
    <div class="container pt-4">
      <div class="row no-gutters">
        <main class="col-lg-8 contenido principal">
          <h2 class="d-block d-md-none text-uppercase text-center">
          <?php echo $producto['nombre']; ?>
          </h2>
          <?php echo $producto['descripcion']; ?>
        </main>
        <aside class="col-lg-4 pt-4 pt-lg-0">
          <div class="sidebar pt-4 descripcion_producto">
            <h2 class="text-center text-uppercase mt-4">
              Descripción
            </h2>
            <p class="text-center px-1"><?php echo $producto['descripcion_corta']; ?></p>
            <h3 class="text-uppercase text-center mt-5">
            <?php echo $producto['precio']; ?>
            </h3>
            <p class="display-4 text-center p-1">$25</p>
          </div>
        </aside>
      </div>
    </div>
  <?php
        } //fin del while
      } else {
        echo '<h2 class="text-center text-uppercase mt-4">
                  Producto no encontrado
              </h2>';
      }
      include 'templates/footer.php';
?>