<?php
    require 'includes/funciones.php';
    incluirTemplate('header'); 
?>

    <main class="contenedor seccion contenido-centrado" >
        <h1>Guia para la decoracion de tu Hogar</h1>


        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp"> 
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img loading='lazy' src="build/img/destacada2.jpg" alt="imagen destacada"> 
        </picture>

        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>

        <div class="resumen-propietario">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore beatae id laboriosam illo odit ipsum natus, non esse tempore tenetur repudiandae, aliquid necessitatibus harum deserunt dolor deleniti, dolore impedit excepturi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam aceat ea eius suscipit odio sequi <br> Sed placeat laboriosam nisi consectetur, explicabo voluptas sunt excepturi accusantium! Sint veritatis quas aspernatur nesciunt aut! mollitia, quis eaque illum, alias nobis laudantium asperiores facilis dolores nulla, accusamus expedita hic dolorem.</p>
        </div>

        
    </main>

    <?php include'includes/templates/footer.php'; ?>