<?php
  require 'includes/funciones.php';
  
  incluirTemplate('header');
?>

  <main class="contenedor seccion contenido__centrado">
    <h1>Guia para la decoracion de tu hogar</h1>
    
    <picture>
      <source srcset="build/img/destacada2.webp" type="image/webp">
      <source srcset="build/img/destacada2.jpg" type="image/jpeg">
      <img src="build/img/destacada2.jpg" alt="imagen de la propiedad" loading="lazy">
    </picture>
    
    <p class="informacion__meta">Escrito el: <span>20/10/2021 </span>por: <spam>Admin</spam></p>

    <div class="resumen__propiedad">    

      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis aliquid illo incidunt repellendus ratione debitis atque numquam, explicabo perspiciatis enim ab alias vitae quod, optio eveniet architecto ut? Eaque laudantium voluptas dolor repellendus numquam hic enim voluptatibus, optio qui dolore, rerum illo nam totam magnam, aperiam perspiciatis! Voluptatem voluptatibus fugiat unde? Tempore sint sed minima soluta sapiente neque alias repudiandae!</p>

      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores ducimus, odit recusandae dignissimos quaerat totam reprehenderit impedit est quia quos assumenda ex esse sint. Explicabo, modi! Ipsum perspiciatis est voluptatum.</p>

    </div><!-- .resumen__propiedad -->
  </main><!-- .contenedor .seccion-->

  <?php incluirTemplate('footer'); ?>

  <script src="build/js/bundle.min.js"></script>
</body>
</html>
