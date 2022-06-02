<?php include 'includes/templates/header.php'; ?>

  <main class="contenedor seccion contenido__centrado">
    <h1>Casa en Venta frente al Bosque</h1>

    <picture>
      <source srcset="build/img/destacada.webp" type="image/webp">
      <source srcset="build/img/destacada.jpg" type="image/jpeg">
        <img src="build/img/destacada.jpg" alt="imagen de la propiedad" loading="lazy">
    </picture>

    <div class="resumen__propiedad">
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

      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis aliquid illo incidunt repellendus ratione debitis atque numquam, explicabo perspiciatis enim ab alias vitae quod, optio eveniet architecto ut? Eaque laudantium voluptas dolor repellendus numquam hic enim voluptatibus, optio qui dolore, rerum illo nam totam magnam, aperiam perspiciatis! Voluptatem voluptatibus fugiat unde? Tempore sint sed minima soluta sapiente neque alias repudiandae!</p>

      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores ducimus, odit recusandae dignissimos quaerat totam reprehenderit impedit est quia quos assumenda ex esse sint. Explicabo, modi! Ipsum perspiciatis est voluptatum.</p>

    </div><!-- .resumen__propiedad -->
  </main><!-- .contenedor .seccion-->

  <?php include 'includes/templates/footer.php'; ?>

  <script src="build/js/bundle.min.js"></script>
</body>
</html>
