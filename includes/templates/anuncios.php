<?php 

   // importar conexion
    require __DIR__ . '/../config/database.php';
    $db = conectarDB();

    //Consulta
    

    $consulta = "SELECT * FROM propiedades LIMIT ${limite} ; ";
    
    

    $resultado = mysqli_query($db, $consulta);

    //$propiedad = mysqli_fetch_assoc($resultado);
    // while($propiedad = mysqli_fetch_assoc($resultado)){
    // echo '<pre>';
    // var_dump($propiedad);
    // echo '</pre>';
    // }
    // exit;
    //Obtener resultado 

?>


<?php while($propiedad = mysqli_fetch_assoc($resultado)): ?>

    <div class="anuncio">
        <picture>
            <!-- <source srcset="build/img/anuncio1.webp" type="image/webp">
            <source srcset="build/img/anuncio1.jpeg" type="image/jpeg"> -->
            <img loading='lazy' src= "imagenes/<?php echo $propiedad['imagen']; ?>" alt="anuncio">
        </picture>
        <div class="contenido-anuncio">
            <h3><?php echo $propiedad['titulo']; ?></h3>
            <p><?php echo $propiedad['descripcion']; ?></p> 
            <p class="precio"><?php echo $propiedad['precio'] ?></p>

            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading='lazy' src="build/img/icono_wc.svg" alt="icono icono_wc">
                    <p><?php echo $propiedad['wc'] ?></p>
                </li>
                <li>
                    <img class="icono" loading='lazy' src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p><?php echo $propiedad['estacionamiento'] ?></p>
                </li>
                <li>
                    <img class="icono" loading='lazy' src="build/img/icono_dormitorio.svg" alt="icono habitacion">
                    <p><?php echo $propiedad['habitaciones'] ?></p>
                </li>
                
            </ul>

            <a class="boton-amarillo-block" href="anuncio.php?id=<?php echo $propiedad['id'];?>">
                Ver Propiedad
            </a>

        </div> <!--.contenido-anuncio-->
                 
    </div><!--Anuncio-->

<?php 
    endwhile;  
    //Cerrar conexion
    mysqli_close($db); 
?>

