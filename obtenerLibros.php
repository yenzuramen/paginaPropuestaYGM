<?php

//Se abre la sesión
    session_start();

//Conexion
include("conexion_bd.php");
//Se seleccionan los libros 
    $query = "SELECT * FROM libro;";


   if (!$result = mysqli_query($con, $query)) {
       exit(mysqli_error($con));
   }
    
   while($row = mysqli_fetch_array($result)){
    $titulo= $row['titulo'];
    $lanzamiento= $row['lanzamiento'];
    $autor= $row['autor'];
    $categoria= $row['categoria'];
    $sipnosis= $row['sipnosis'];

    //Se agregan los datos a un array de objetos 
    $return_arr[] = array("titulo" => $titulo,"lanzamiento" => $lanzamiento,"autor" => $autor,"categoria" => $categoria,"sipnosis" => $sipnosis);
   }

   // Se mandan en un JSON
  echo json_encode($return_arr);


?>