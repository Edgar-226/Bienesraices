<?php

    
    require '../../includes/funciones.php';
    $auth = estaAutenticado();
    if(!$auth){
        header('Location: /');
    }

    require '../../includes/config/database.php ';

    $db = conectarDB();

    //Consultar para obtenr vendedore
    $consulta = "SELECT * FROM vendedores;";
    $resultado = mysqli_query($db, $consulta);


    //Arreglo con mensajes de errores

    $errores =[]; 

    $titulo = '';
    $precio = '';
    $descripcion = '';
    $habitaciones = '';
    $wc = '';
    $estacionamiento = '';
    $vendedorId = '';

    //Ejecuta el codigo despúes de que el usario envia el formulario
    if($_SERVER['REQUEST_METHOD'] === 'POST'){




        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";
        
        //  echo "<pre>";
        //  var_dump($_FILES);
        //  echo "</pre>";

        
    
        $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
        $precio = mysqli_real_escape_string($db, $_POST['precio']);
        $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
        $habitaciones = mysqli_real_escape_string($db, $_POST['habitaciones']);
        $wc = mysqli_real_escape_string($db, $_POST['wc']);
        $estacionamiento = mysqli_real_escape_string($db, $_POST['estacionamiento']);
        $vendedorId = mysqli_real_escape_string($db, $_POST['vendedor']);
        $creado = date('Y/m/d');
    
        //asignar files hacia una variable
        $imagen = $_FILES['imagen'];

        
       
       

        if(!$titulo) {
            $errores[] = "Debes añadir un titulo";
        }
    
        if(!$precio) {
            $errores[] = "El precio es obligatorio";
        }
        if(strlen( $descripcion ) < 50) {
            $errores[] = "La descripcion es obligatoria y debe tener almeno 50 caracteres";
        }
        if(!$habitaciones) {
            $errores[] = "El numero de habitaciones obligatorio";
        }
        if(!$wc) {
            $errores[] = "El numero de baños obligatorio";
        }
        if(!$estacionamiento) {
            $errores[] = "El numero lugares de estacionamiento obligatorio";
        }
        if(!$vendedorId) {
            $errores[] = "Elige un vendedor";
        }
        if(!$imagen['name'] || $imagen['error']){
            $errores[] = "La imagen es obligatoria";
        }

        //Validar por tamaño
          $medida = 1000 * 200;        
          if($imagen['size'] > $medida){
              $errores[] = "La imagen muy pesada";
          }



        // echo "<pre>";
        // var_dump($errores);
        // echo "</pre>";

        // exit;

        // Revisar que el arreglo de errores este vacio

        if(empty($errores)){

            /** Subida de archivos */
            //Crear carpeta

            $carpetaImagenes = '../../imagenes/';

            if(!is_dir($carpetaImagenes)){
            mkdir($carpetaImagenes);
            }

            //generar un nombre unico
            $nombreImagen = md5(uniqid(rand(),true)) .'.jpg';
            var_dump($nombreImagen);

            //Subir la imagem
            move_uploaded_file($imagen['tmp_name'],$carpetaImagenes .$nombreImagen);

            


            //insertar en la base de datos
            $query = "INSERT INTO propiedades (titulo, precio, imagen, descripcion, habitaciones, wc, estacionamiento, creado, vendedorId ) VALUES('$titulo', '$precio', '$nombreImagen', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$creado', '$vendedorId');";
            $resultado = mysqli_query($db, $query);
            
            // echo $query;
        

            if($resultado){
                //Redirecconar al usuario

                header('Location: /admin?resultado=1');
            }
        }
    }

    
    incluirTemplate('header'); 
?>

    <main class="contenedor seccion" >
        <h1>CREAR</h1>

        <a href="/admin" class="boton boton-verde">Volver</a>

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

        <form class="formulario" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">
            <fieldset>
                <legend>Informacion General</legend>
 
                <label for="titulo">Titulo:</label>
                <input 
                    type="text" 
                    id="titulo" 
                    name="titulo" 
                    placeholder="Titulo Propiedad" 
                    value="<?php echo $titulo; ?>">
                
                <label for="precio">Precio:</label>
                <input 
                    type="number" 
                    id="precio" 
                    name="precio" 
                    placeholder="Precio Propiedad " 
                    value="<?php echo $precio; ?>">
                
                <label for="Imagen">Imagen:</label>
                <input 
                    type="file" 
                    id="imagen" 
                    accept="image/jpeg, image/png"
                    name="imagen" >

                <label for="descripcion">descripcion:</label>
                <textarea id="descripcion" name="descripcion" >
                        <?php echo $descripcion; ?>
                </textarea>

            </fieldset>

            <fieldset>
                <legend>Informacion Propiedad</legend>

                <label for="habitaciones">habitaciones:</label>
                <input 
                    type="number" 
                    id="habitaciones" 
                    name="habitaciones" 
                    placeholder="Ej: 3 " 
                    min = '1' 
                    max = '9' 
                    value="<?php echo $habitaciones; ?>">
                
                <label for="baños">baños:</label>
                <input 
                    type="number" 
                    id="wc" name="wc" 
                    placeholder="Ej: 3 " 
                    min = '1' 
                    max = '9' 
                    value="<?php echo $wc; ?>">
                
                <label for="estacionamiento">estacionamiento:</label>
                <input 
                    type="number" 
                    id="estacionamiento" 
                    name="estacionamiento" 
                    placeholder="Ej: 3 " 
                    min = '1' 
                    max = '9' 
                    value="<?php echo $estacionamiento; ?>">
                
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <select name="vendedor">
                    <option value="">-- Seleccione un Vendedor --</option>
                    <?php while($vendedor = mysqli_fetch_assoc($resultado)):  ?>
                    
                        <option  
                        <?php echo $vendedorId === $vendedor['id'] ? 'selected': ''; ?> value="<?php echo $vendedor['id']; ?>"><?php echo $vendedor['nombre']. " ".$vendedor['apellido']; ?></option>

                    <?php endwhile ?>
                    
                </select>
            </fieldset>

            <input type="submit" value="Crear Propiedad" class="boton boton-verde">

        </form>
    </main>

<?php 
    incluirTemplate('footer'); 
?>