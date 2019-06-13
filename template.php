<?php
      $titulo = 'Nombre Página';
      include 'templates/header.php';
      include 'templates/navegacion.php';
?>

  <div class="container pt-4">
    <div class="row no-gutters">
      <div class="col-12 hero">
        <img src="img/nosotros.jpg" class="img-fluid" alt="">
        <h2 class="text-uppercase d-none d-md-block py-3 px-5">
          Titulo aqui
        </h2>
      </div>
    </div>
  </div>
  <div class="container pt-4">
    <div class="row">
      <main class="col-lg-8 contenido principal">
        <h2 class="d-block d-md-none text-uppercase text-center">
            Titulo aqui
        </h2>
      </main>
      <aside class="col-lg-4 pt-4 pt-lg-0">
        <div class="sidebar">
          <h2 class="text-center text-uppercase mt-4">
            Algo aqui
          </h2>
        </div>
      </aside>
    </div>
  </div>
  <footer class="footer-sitio pt-3 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h3 class="text-uppercase text-center pb-4">
            Nosotros
          </h3>
          <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias voluptatibus voluptates quisquam, a,
            incidunt veniam quas tempora voluptate id animi magni? Quia culpa minus maxime dolores ex voluptates
            consequatur autem! </p>
        </div>
        <div class="col-md-4 text-center">
          <h3 class="text-uppercase  pb-4">
            Horario
          </h3>
          <p>Lun - Vie: 9AM - 7PM</p>
          <p>Sábado: 10AM - 2PM</p>
          <p>Domingo: Cerrado</p>
        </div>
        <div class="col md-4 text-center">
          <h3 class="text-uppercaso pb-4">Contacto</h3>
          <p>Direccion 1</p>
          <p>Direccion 2</p>
          <nav class="sociales text-center">
            <ul>
              <li>
                <a href="http://facebook.com">
                  <!-- con la clase sr-only indicas que el texto solo estará disponible para screen-reader -->
                  <span class="sr-only"> Facebook</span></a>
              </li>
              <li>
                <a href="http://twitter.com">
                  <span class="sr-only"> Twitter</span></a>
              </li>
              <li>
                <a href="http://instagram.com">
                  <span class="sr-only"> Instragram</span></a>
              </li>
              <li>
                <a href="http://pinterest.com">
                  <span class="sr-only"> Pinteres</span></a>
              </li>
              <li>
                <a href="http://youtube.com">
                  <span class="sr-only"> Youtube</span></a>
              </li>
            </ul>
          </nav>
        </div><!--col md-4-->
        <hr class="w-100">
        <p class="text-center copyright w-100">Carolina Spa & Salon 2019</p>
      </div><!--row-->
    </div><!--container-->
<?php
      include 'templates/footer.php';
?>