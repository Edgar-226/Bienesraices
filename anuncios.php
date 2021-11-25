<?php
    require 'includes/funciones.php';
    incluirTemplate('header'); 
?>
    
    <main class="contenedor seccion" >
    </main>

    <section class="seccion">
        <h2>Casas y Depas en Venta</h2>

        
            
        <div class="contenedor-anuncios">
             
             <?php 
                $limite = 100;
                incluirTemplate('anuncios'); 
             ?>
          
          </div><!--contenedor-anuncio-->
            

      
          
    </section>

    <?php incluirTemplate('footer'); ?> 