<?php
	
	require_once("object/Viaje.php");

	$conn = mysqli_connect("127.0.0.1", "root", "", "mibici");

	$filesDir = "./data";
	$filecount = 0;
	$files = [];

	if (($gestor = fopen($filesDir."/datos_abiertos_2017_01.csv", "r")) !== FALSE) {
		fgetcsv($gestor, 1000, ",");
		while (($linea = fgetcsv($gestor, 1000, ",")) !== FALSE) {

			$id = $linea[0];
			$usuario = $linea[1];
			$genero = $linea[2];
			$edad = $linea[3];
			// $inicioViaje = $linea[4];
			// $finViaje = $linea[5];
			$inicioViaje = date("Y-m-d H:i:s", strtotime($linea[4]));
			$finViaje = date("Y-m-d H:i:s", strtotime($linea[5]));
			$origenId = $linea[6];
			$destinoId = $linea[7];
			$query = "
					INSERT INTO viajes 
					(id,usuario,genero,edad,inicioViaje,finViaje,origenId,destinoId)
					VALUES 
					($id, $usuario, '$genero', '$edad', '$inicioViaje', '$finViaje', $origenId, $destinoId)";

			$res = mysqli_query($conn, $query);
			if(!$res) {
				echo $query;
				echo mysqli_error($conn);
			}
		}
		fclose($gestor);
	}
	
?>
