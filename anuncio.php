<?php


$id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);
    
    if(!$id) {
        header('Location: /');
    }

    //Base de datos
    require 'includes/config/database.php';
    
    $db = conectarDB();

    // Obtener los datos de la propiedad 
    $consulta = "SELECT * FROM propiedades WHERE id = ${id};";
    $resultado = mysqli_query($db, $consulta);

    $propiedad = mysqli_fetch_assoc($resultado);



    



    require 'includes/funciones.php';
    incluirTemplate('header'); 
?>
    <main class="contenedor seccion contenido-centrado" >
        <h1><?php echo $propiedad['titulo'] ?></h1>

        <picture>
      
            <img loading='lazy' src="imagenes/<?php echo $propiedad['imagen'] ?>" alt="imagen destacada"> 
        </picture>

        <div class="resumen-propiedad ">
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

            <p><?php echo $propiedad['descripcion'] ?></p>
        </div>

        
    </main>


    <?php incluirTemplate('footer'); ?>