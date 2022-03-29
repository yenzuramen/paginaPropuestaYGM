
<?php

//Conexión con Base de Datos 
include("conexion_bd.php");
//Recibimos la variable de usuario
$usuario = $_POST['usuario'];

//Se hace una consulta para saber si el usuario existe
$query = mysqli_query($con, "SELECT * FROM usuario WHERE usuario='$usuario'");

//se ejecuta el query
if (!$query)
{
    die('Error: ' . mysqli_error($con));
}
//Si hay mas de una fila en la respuesta
if(mysqli_num_rows($query) > 0){
//devolvemos un 1
echo "1";

}else{ //de lo contrario hacemos el registro nuevo 
//Se obtiene el id mas alto y se le suma uno 
    $query2 = "SELECT(MAX(id))+1 AS 'maximo' FROM usuario";

    $result2 = mysqli_query($con,$query2);
    //lo ponemos en una variable 
    while($row = mysqli_fetch_array($result2)){
    $idmax= $row['maximo'];
    }
    //obtenemos las variables de js
    $usuario = $_POST['usuario'];
    $nombre = $_POST['nombre'];
    $pass = $_POST['contra'];

    //agregamos un nuevo usuario
    $query3 = "INSERT INTO usuario VALUES ('$idmax', '$usuario','$nombre', '$pass','1');";

    if (!$result3 = mysqli_query($con, $query3)) {
      exit(mysqli_error($con));
    }
    //devolvemos un 0
    echo "0";
}


?>