<?php
      $titulo = 'Sobre Nosotros';
      include 'templates/header.php';
      include 'templates/navegacion.php';
?>

  <div class="container pt-4">
    <div class="row no-gutters">
      <div class="col-12 hero">
        <img src="img/nosotros.jpg" class="img-fluid" alt="">
        <h2 class="text-uppercase d-none d-md-block py-3 px-5">
          Nosotros
        </h2>
      </div>
    </div>
  </div>
  <div class="container pt-4">
    <div class="row">
      <main class="col-lg-8 contenido-principal">
        <h2 class="d-block d-md-none text-uppercase text-center">
          Nosotros
        </h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero ratione, cum dolor fuga error accusantium,
          corrupti commodi veritatis incidunt consequuntur quasi quaerat reprehenderit ea sapiente, architecto dolorum
          amet dignissimos. Itaque.
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias pariatur doloribus, sapiente animi, rem error
          dolorum a facere qui commodi dolorem. Aliquam esse accusantium harum deserunt commodi porro dolore sapiente.
        </p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur sunt, itaque temporibus ratione eligendi
          iure animi quisquam assumenda nihil error deleniti culpa voluptates recusandae! Iure recusandae ipsa veritatis
          earum. Ex. Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat dolores quisquam veritatis magnam
          ipsam velit vel quam quasi. Ea sequi veritatis sed deleniti veniam necessitatibus assumenda modi enim magnam
          quidem.</p>

        <h1 class="text-center text-uppercase mt-4 encabezado">
          <span class="text-lowercase d-block">
            Conoce nuestras
          </span>
          Instalaciones
        </h1>
        <div class="imagenes pt-4">
          <a href="" data-target="#imagen_1" data-toggle="modal">
            <img src="img/galeria_mini_01.jpg" class="img-fluid" alt="">
          </a>
          <a href="" data-target="#imagen_2" data-toggle="modal">
            <img src="img/galeria_mini_02.jpg" class="img-fluid" alt="">
          </a>
          <a href="" data-target="#imagen_3" data-toggle="modal">
            <img src="img/galeria_mini_03.jpg" class="img-fluid" alt="">
          </a>
          <div class="modal fade" id="imagen_1" tab-index="-1" role="dialog" aria-labelledby="imagen 1"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-body">
                  <img src="img/galeria_grande_01.jpg" class="img-fluid" alt="">
                </div>
                <!--modal body-->
              </div>
              <!--modal-content-->
            </div>
            <!--modal-dialog-->
          </div>
          <!--Modal-->
          <div class="modal fade" id="imagen_2" tab-index="-1" role="dialog" aria-labelledby="imagen 3"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-body">
                  <img src="img/galeria_grande_02.jpg" class="img-fluid" alt="">
                </div>
                <!--modal body-->
              </div>
              <!--modal-content-->
            </div>
            <!--modal-dialog-->
          </div>
          <!--Modal-->
          <div class="modal fade" id="imagen_3" tab-index="-1" role="dialog" aria-labelledby="imagen 3"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-body">
                  <img src="img/galeria_grande_03.jpg" class="img-fluid" alt="">
                </div>
                <!--modal body-->
              </div>
              <!--modal-content-->
            </div>
            <!--modal-dialog-->
          </div>
          <!--Modal-->
        </div>
      </main>
      <!-- por defecto un aside se ajusta al tamaño del elemento que tiene a lado. 
        Si quieres que tenga su propio tamaño debes ponerle la 
        clase align-self-start|align-self-end|align-self-center -->
      <aside class="col-lg-4 pt-4 pt-lg-0 align-self-start">
        <div class="sidebar horario">
          <h2 class="text-center text-uppercase mt-4">
            <h2 class="text-center text-uppercase mt-5">Horarios</h2>
            <p class="text-center mt-3 lead">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque eveniet deleniti atque, perspiciatis
              nemo,
              sapiente ipsa labore temporibus cum aliquam neque voluptas ducimus officia odio, natus ad alias impedit
              eos!
            </p>
            <table class="table table-hover text-center mt-3">
              <thead>
                <tr>
                  <th class="text-center">Día</th>
                  <th class="text-center">De</th>
                  <th class="text-center">Hasta</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Lunes</td>
                  <td>09:00</td>
                  <td>19:00</td>
                </tr>
                <tr>
                  <td>Martes</td>
                  <td>09:00</td>
                  <td>19:00</td>
                </tr>
                <tr>
                  <td>Miércoles</td>
                  <td>09:00</td>
                  <td>19:00</td>
                </tr>
                <tr>
                  <td>Jueves</td>
                  <td>09:00</td>
                  <td>19:00</td>
                </tr>
                <tr>
                  <td>Viernes</td>
                  <td>09:00</td>
                  <td>19:00</td>
                </tr>
                <tr>
                  <td>Sábado</td>
                  <td>10:00</td>
                  <td>14:00</td>
                </tr>
                <tr>
                  <td>Domingo</td>
                  <td>Cerrado</td>
                  <td>Cerrado</td>
                </tr>
              </tbody>
            </table>
          </h2>
        </div>
      </aside>
    </div>
  </div>
<?php
      include 'templates/footer.php';
?>