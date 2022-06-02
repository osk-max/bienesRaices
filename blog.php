<?php include 'includes/templates/header.php'; ?>

  <main class="contenedor seccion contenido__centrado">
    <h1>Nuestro Blog</h1>
    
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
    
    <article class="entrada__blog">
      <div class="imagen">
      <picture>
        <source srcset="build/img/blog3.webp" type="image/webp">
        <source srcset="build/img/blog3.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/blog3.jpg" alt="Texto entrada blog">
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

  <article class="entrada__blog">
    <div class="imagen">
      <picture>
        <source srcset="build/img/blog4.webp" type="image/webp">
        <source srcset="build/img/blog4.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/blog4.jpg" alt="Texto entrada blog">
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
</main><!-- .contenedor .seccion .contenido__centrado-->
  
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
