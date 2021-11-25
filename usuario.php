<?php 

//importar conexion

require "includes/config/database.php";

$db = conectarDB();

//Crear email
$email = "mail@mail";
$password = "root";

//var_dump(md5($password));

$passwordhash = password_hash($password, PASSWORD_BCRYPT);



//Query db

$query = "INSERT INTO usuarios (email, password) VALUES ('${email}', '${passwordhash}');";

//echo $query;
//Agregar a la base de tados 



mysqli_query($db, $query);