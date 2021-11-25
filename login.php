<?php
    //Autenticar al usuario
    require 'includes/config/database.php';
    $db = conectarDB();

    $errores = [];

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";

        $email =mysqli_real_escape_string($db, filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL));
        $password = mysqli_real_escape_string($db, $_POST['password']);

        // echo $email;
        // echo $password;

        if(!$email){
            $errores[] = 'El email es obligatorio o no es valido';
        }
        if(!$password){
            $errores[] = 'El password es obligatorio o no es valido';
        }

        if(empty($errores)){
            // Revisar si el usuario existe
            $query = "SELECT * FROM usuarios WHERE email = '${email}';";

            $resultado = mysqli_query($db,$query);
            //var_dump($resultado);

            if($resultado -> num_rows){
                //Revisar si el password es correcto
                $usuario = mysqli_fetch_assoc($resultado);
                //var_dump($usuario);
                $auth = password_verify($password, $usuario['password']);

                if($auth){
                    //El usuario esta autenticado
                    session_start();

                    //Llenar el arreglo de la sesion
                    $_SESSION['usuario'] = $usuario['email'];
                    $_SESSION['login'] = true;
                    
                    header('Location: /admin');
                    
                }else{
                    $errores[] = 'El password es incorecto';
                }

                //var_dump($auth);
            }else{
                $errores[] = "El usuario no existe";
            }
        }        

    }


    //Incluye el header
    require 'includes/funciones.php';
    incluirTemplate('header'); 
?>

    <main class="contenedor seccion contenido-centrado" >
        <h1>Iniciar Sesión </h1>

        <?php foreach($errores as $error): ?>

            <div class="alerta error">
                <?php echo $error; ?>
            </div>

        <?php endforeach; ?>
    

        <form method="POST" class="formulario">
            <fieldset> 
            
                <legend>Email y Password</legend>

                <label for="email">E-Mail</label>
                <input type="email" name="email"  placeholder="Tu E-Mail" id="email">

                <label for="password">password</label>
                <input type="password" name="password"  placeholder="Tu password" id="password">

            </fieldset>

            <input type="submit" value="Iniciar Sesión" class="boton boton-verde">
        </form>

    </main>

<?php incluirTemplate('footer');  ?>