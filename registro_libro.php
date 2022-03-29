
<?php

//Conexión con Base de Datos 
include("conexion_bd.php");
//Se obtiene el id mas alto y se le suma 1
$query = "SELECT(MAX(id))+1 AS 'maximo' FROM libro";

$result = mysqli_query($con,$query);
//obtenemos el valor
while($row = mysqli_fetch_array($result)){
$idmax= $row['maximo'];
}

//obtenemos los valores desde POST
$titulo = $_POST['titulo'];
$lanzamiento = $_POST['lanzamiento'];
$autor = $_POST['autor'];
$categ = $_POST['categ'];
$sipnosis = $_POST['sipnosis'];

//agregamos un nuevo libro
$query = "INSERT INTO libro VALUES ('$idmax', '$titulo','$lanzamiento', '$autor','$categ','$sipnosis');";

if (!$result = mysqli_query($con, $query)) {
  exit(mysqli_error($con));
}


echo $idmax;
?>