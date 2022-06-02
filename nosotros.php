<?php include 'includes/templates/header.php'; ?>
  
  <main class="contenedor seccion">
    <h1>Conoce Sobre Nosotros</h1>

    <div class="contenido__nosotros">

      <div class="imagen">
        <picture>
          <source srcset="build/img/nosotros.webp" type="image/webp">
          <source srcset="build/img/nosotros.jpg" type="image/jpeg">
          <img loading='lazy' src="build/img/nosotros.jpg" alt="Sobre nosotros" >
        </picture>
      </div><!-- .imagen -->

      <div class="texto__nosotros">
        <blockquote>
          25 Años de Experiencia
        </blockquote>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque optio doloremque, odit eaque doloribus fuga rem veniam? Voluptates iure cupiditate amet quidem error veritatis inventore ut doloribus reiciendis, tempore ab id quae voluptatem totam consequuntur laudantium impedit nemo dolores hic accusamus. Veritatis maxime eveniet suscipit cumque saepe molestiae quos hic soluta, neque ea doloremque nobis amet consectetur! Incidunt aut, magni possimus quae perspiciatis, tempora doloremque corrupti quisquam animi architecto obcaecati aspernatur molestiae enim commodi facere.</p>

        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum iure natus architecto pariatur molestias quae expedita tempore cumque provident modi in laboriosam, asperiores placeat, error, quidem velit nobis. Possimus eius ab quasi, odio magnam est blanditiis id deserunt atque et libero cum tempora, corporis consectetur.</p>
      </div><!-- .texto__nosotros -->
    </div><!-- .contenido__nosotros -->

    <h2>Más Sobre Nosotros</h2>
    <div class="iconos__nosotros">
      <div class="icono">
        <img src="build/img/icono1.svg" alt="Icono de seguridad" loading="lazy">
        <h3>Seguridad</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias eveniet quam culpa fugiat, quidem perferendis nemo necessitatibus doloremque blanditiis, repellendus consequatur saepe, temporibus omnis facilis?</p>
      </div>

      <div class="icono">
        <img src="build/img/icono2.svg" alt="Icono de dinero" loading="lazy">
        <h3>Precio</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias eveniet quam culpa fugiat, quidem perferendis nemo necessitatibus doloremque blanditiis, repellendus consequatur saepe, temporibus omnis facilis?</p>
      </div>

      <div class="icono">
        <img src="build/img/icono3.svg" alt="Icono del tiempo" loading="lazy">
        <h3>A Tiempo</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias eveniet quam culpa fugiat, quidem perferendis nemo necessitatibus doloremque blanditiis, repellendus consequatur saepe, temporibus omnis facilis?</p>
      </div>
    </div><!-- .iconos__nosotros -->
  </main><!-- .contenedor .seccion-->

  <footer class="footer seccion">
    <div class="contenedor contenedor__footer">
      <nav class="navegacion">
        <a href="nosotros.php">Nosotros</a>
        <a href="anuncios.php">Anuncios</a>
        <a href="blog.php">Blog</a>
        <a href="contacto.php">Contacto</a>
      </nav><!-- .navegacion -->
    </div><!-- .contenedor .contenedor__footer-->
    <p class="copyright">Todos los derechos Reservados 2022 &copy;</p>
  </footer><!-- .footer .seccion-->


  <script src="build/js/bundle.min.js"></script>
</body>
</html>
