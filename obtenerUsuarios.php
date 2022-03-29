<?php

//Se abre la sesión
    session_start();

	//Archivo de conexión
	include("conexion_bd.php");

	//Diseño del header de la tabla
	$data = '<table id="tabla_datos" name="tabla_datos" class="cell-border display">  <thead>
						<tr>
							<th>Id Usuario</th>
							<th>Usuario</th>
							<th>Nombre</th>
							';

			
		$data.=	'</tr>  </thead><tbody> ';
			//Se muestran todos los registros de la BD.		
						$query = "SELECT * FROM usuario";

				
	if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
$conta=1;
    // Si los resultados del query tienen más de 0 filas
    if(mysqli_num_rows($result) > 0)
    {
    	
    	while($row = mysqli_fetch_assoc($result))
    	{
    		$data .= '<tr>
			    <td>'.$row['id'].'</td>
				<td>'.$row['usuario'].'</td>
				<td>'.$row['nombre'].'</td>
				
	';


				$data.='</tr>';
			$conta+=1;
    	}
    }
    else
    {//No se encontraron registros. 
    	$data .= '';
    }

    $data .= '</tbody></table>';
//Devolvemos la variable data que contiene la tabla
    echo $data;
?>
