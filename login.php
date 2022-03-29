
<?php

session_start();
//Conexión con Base de Datos 
include("conexion_bd.php");

//Obtenemos los datos 
$usuario = $_POST['usuario'];
$pass = $_POST['contra'];

//coonsultamos si hay un usuario con el mismo usuario y  contrasela 
$query = "SELECT * FROM usuario WHERE usuario='$usuario' AND password='$pass'";

$result = mysqli_query($con,$query);

//recorremos la respuesta
if(!is_null($row =mysqli_fetch_array($result))){

    //agregamos el nombre y el rol como variables de sesion 
     $_SESSION['nombre']  = $row['nombre'];  
     $_SESSION['rol']  = $row['rol'];  
 
  //revolvemos 1
   echo "1";
}else{
  //devolvemos 2
    echo "2";
}

?>