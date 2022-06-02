<?php
  $inicio = true;
  include 'includes/templates/header.php'; 
?>

  <main class="contenedor seccion">
    <h1>Más Sobre Nosotros</h1>
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

  <section class="seccion contenedor">
    <h2>Casas y Depas en Venta</h2>

    <div class="contenedor__anuncios">

      <div class="anuncio">
        <picture>
          <source srcset="build/img/anuncio1.webp" type="image/webp">
          <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
          <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio uno">
        </picture>

        <div class="contenido__anuncio">
          <h3>Casa de Lujo en el Lago</h3>
          <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
          <p class="precio">$3,000,000</p>

          <ul class="iconos__caracteristicas">
            <li>
              <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
              <p>3</p>
            </li>

            <li>
              <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
              <p>3</p>
            </li>

            <li>
              <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
              <p>4</p>
            </li>
          </ul><!-- .iconos__caracteristicas -->

          <a class="boton__amarillo" href="anuncios.php">Ver Propiedad</a>
        </div><!-- .contenido__anuncio -->
      </div><!-- .anuncio -->

      <div class="anuncio">
        <picture>
          <source srcset="build/img/anuncio2.webp" type="image/webp">
          <source srcset="build/img/anuncio2.jpg" type="image/jpeg">
          <img loading="lazy" src="build/img/anuncio2.jpg" alt="anuncio uno">
        </picture>

        <div class="contenido__anuncio">
          <h3>Casa terminados de Lujo</h3>
          <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
          <p class="precio">$3,000,000</p>

          <ul class="iconos__caracteristicas">
            <li>
              <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
              <p>3</p>
            </li>

            <li>
              <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
              <p>3</p>
            </li>

            <li>
              <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
              <p>4</p>
            </li>
          </ul><!-- .iconos__caracteristicas -->

          <a class="boton__amarillo" href="anuncios.php">Ver Propiedad</a>
        </div><!-- .contenido__anuncio -->
      </div><!-- .anuncio -->

      <div class="anuncio">
        <picture>
          <source srcset="build/img/anuncio3.webp" type="image/webp">
          <source srcset="build/img/anuncio3.jpg" type="image/jpeg">
          <img loading="lazy" src="build/img/anuncio3.jpg" alt="anuncio uno">
        </picture>

        <div class="contenido__anuncio">
          <h3>Casa con alberca</h3>
          <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
          <p class="precio">$3,000,000</p>

          <ul class="iconos__caracteristicas">
            <li>
              <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
              <p>3</p>
            </li>

            <li>
              <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
              <p>3</p>
            </li>

            <li>
              <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
              <p>4</p>
            </li>
          </ul><!-- .iconos__caracteristicas -->

          <a class="boton__amarillo" href="anuncios.php">Ver Propiedad</a>
        </div><!-- .contenido__anuncio -->
      </div><!-- .anuncio -->

    </div><!-- .contenedor__anuncios -->

    <div class="alinear__derecha">
      <a class="boton__verde" href="anuncios.php">Ver Todas</a>
    </div><!-- .alinear__derecha -->
  </section><!-- .seccion .contenedor -->

  <section class="imagen__contacto">
    <h2>Encuentra la casa de tus sueños</h2>
    <p>Llena el formulario de contacto y un asesor se pondra en contacto contigo a la brevedad</p>
    <a class="boton__amarillo--inline" href="contacto.php">Contactános</a>
  </section><!-- .imagen__contacto -->

  <div class="contenedor seccion seccion__inferior">
    <section class="blog">
      <h3>Nuestro Blog</h3>

      <article class="entrada__blog">
        <div class="imagen">
          <picture>
            <source srcset="build/img/blog1.webp" type="image/webp">
            <source srcset="build/img/blog1.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/blog1.jpg" alt="Texto entrada blog">
          </picture>
        </div><!-- .imagen -->

        <div class="texto__entrada">
          <a href="entrada.php">
            <h4>Terraza en el techo de tu casa</h4>
            <p class="informacion__meta">Escrito el: <span>20/10/2021 </span>por: <spam>Admin</spam></p>
          </a>

          <p class="parrafo__blog">Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero</p>
        </div><!-- .texto__entrada -->
      </article>

      <article class="entrada__blog">
        <div class="imagen">
          <picture>
            <source srcset="build/img/blog2.webp" type="image/webp">
            <source srcset="build/img/blog2.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/blog2.jpg" alt="Texto entrada blog">
          </picture>
        </div><!-- .imagen -->

        <div class="texto__entrada">
          <a href="entrada.php">
            <h4>Guia para la decoracion de tu hogar</h4>
            <p class="informacion__meta">Escrito el: <span>20/10/2021 </span>por: <spam>Admin</spam></p>
          </a>

          <p>Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a tu espacio</p>
        </div><!-- .texto__entrada -->
      </article>
    </section><!-- .blog -->

    <section class="testimonios">
      <h3>Testimonios</h3>

      <div class="testimonio">
        <blockquote>
          El personal se comportó de una excelente forma, muy buena atención y la casa que me ofrecierón cumple con todas las expectativas.
        </blockquote>
        <p>- Oscar Cantor Bernal</p>

      </div><!-- .testimonio -->

    </section><!-- .testimonios -->
  </div><!-- .contenedor .seccion -->
  
  <script src="build/js/bundle.min.js"></script>
</body>

<?php include 'includes/templates/footer.php'; ?>

</html>
