<?php
    require 'includes/funciones.php';
    incluirTemplate('header', true); 
?>
    
    <main class="contenedor seccion" >
        <h1>Mas Sobre Nosotros</h1>

        <div class='icono-nosotros'>
            <div class='icono'>
                <img src='build/img/icono1.svg' alt="incono seguridad" loading='lazi'>
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum suscipit velit voluptas repellat, ex, perspiciatis unde maiores eaque deleniti saepe nesciunt iusto explicabo error neque! Saepe perferendis optio atque magni!</p>
            </div>
            <div class='icono'>
                <img src='build/img/icono2.svg' alt="incono Precio" loading='lazi'>
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum suscipit velit voluptas repellat, ex, perspiciatis unde maiores eaque deleniti saepe nesciunt iusto explicabo error neque! Saepe perferendis optio atque magni!</p>
            </div>
            <div class='icono'>
                <img src='build/img/icono3.svg' alt="incono tiempo" loading='lazi'>
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum suscipit velit voluptas repellat, ex, perspiciatis unde maiores eaque deleniti saepe nesciunt iusto explicabo error neque! Saepe perferendis optio atque magni!</p>
            </div>
        </div>   
     </main>

     <section class="seccion">
         <h2>Casas y Depas en Venta</h2>

         <div class="contenedor-anuncios">
             
            <?php 
                $limite = 3;
                incluirTemplate('anuncios',false, 3); 
            ?>
         
         </div><!--contenedor-anuncio-->

            <div class="alinear-derecha">
                <a class="boton-verde" href="anuncios.php">Ver Todas</a>
            </div>
     </section>

      <section class="imagen-contacto">
         <h2>Encuentra la casa de tus sueños</h2>
         <p>Llena el formulario de contacto y un asesor se pondra en contacto cotigo a la brevedad</p>
         <a href="contacto.php" class="boton-amarillo">contacto</a>
     </section>

     <div class="contenedor seccion seccion-inferior">
         <section class="blog">
             <h3>Nuestro Blog</h3>

             <article class="entrada-blog">
                 <div class="imagen">
                     <picture>
                         <source srcset="build/img/blog1.webp" type="image/webp">
                         <source srcset="build/img/blog1.jpg" type="image/jpeg">
                         <img loading='lazy' src="build/img/blog1.jpg" alt="Texto entrada blog">
                     </picture>
                 </div>

                 <div class="texto-entrada">
                     <a href="entrada.php">
                         <h4>Terraza en el techo de tu casa</h4>
                         <p class="informacion-meta">Escrito el <span>20/10/2021</span> por: <span>Admin</span></p>

                         <p>
                             Consejos para construir una Terraza en el techo de tui casa con los mejore materiales y ahorrando dinero
                         </p>
                     </a>
                 </div>

             </article>

             <article class="entrada-blog">
                 <div class="imagen">
                     <picture>
                         <source srcset="build/img/blog2.webp" type="image/webp">
                         <source srcset="build/img/blog2.jpg" type="image/jpeg">
                         <img loading='lazy' src="build/img/blog2.jpg" alt="Texto entrada blog">
                     </picture>
                 </div>

                 <div class="texto-entrada">
                     <a href="entrada.php">
                         <h4>Guia para la Decoracion de tu hogar</h4>
                         <p class="informacion-meta">Escrito el <span>20/10/2021</span> por: <span>Admin</span></p>

                         <p>
                             Maximiza el espacio en tu hogar con esta guia  aprende a combinar muebles y colores para darle vida a tu espacio
                         </p>
                     </a>
                 </div>

             </article>
         </section>


         <section class="testimomniales">
             <h3>Testimoniales</h3>

             <div class="testimonial">
                 <blockquote>
                     El personal se comporto de una exelente forma, muy buena atencion y la casa que me ofrecieron cumple con todas mis expectativas. 
                 </blockquote>
                 <p>- Edgar Bastida</p>

             </div>

         </section>
     </div>
<?php incluirTemplate('footer'); ?>