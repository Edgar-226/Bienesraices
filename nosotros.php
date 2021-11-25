<?php
    require 'includes/funciones.php';
    incluirTemplate('header'); 
?>
    <main class="contenedor seccion" >
        <h1>Conoce Sobre Nosotros</h1>

        <div class="seccion-nosotros">
            <div class="imagen imagen-nosotros">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading='lazy' src="build/img/nosotros.jpg" alt="imagen Nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <h3>25 Años de Experiencia</h3>

                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore beatae id laboriosam illo odit ipsum natus, non esse tempore tenetur repudiandae, aliquid necessitatibus harum deserunt dolor deleniti, dolore impedit excepturi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam aceat ea eius suscipit odio sequi <br> Sed placeat laboriosam nisi consectetur, explicabo voluptas sunt excepturi accusantium! Sint veritatis quas aspernatur nesciunt aut! mollitia, quis eaque illum, alias nobis laudantium asperiores facilis dolores nulla, accusamus expedita hic dolorem.</p>

                
            </div>
        </div>
    </main>

    <section class="contenedor seccion" >
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
    </section>
    <?php incluirTemplate('footer'); ?>