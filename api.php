<?php
	
	require_once("/object/Viaje.php");
	$filesDir = "./data";
	$filecount = 0;
	$files = [];

	$fila = 0;
	$filaFeos = 0;
	$listViajes = [];
	$listViajesFeos = [];
	$id = "";
	$usuario= "";
	$genero= "";
	$edad= "";
	$inicioViaje= "";
	$finViaje= "";
	$origenId= "";
	$destinoId= "";

	foreach (glob($filesDir."/*") as $file) {
		$filecount++;
		$files[$filecount] = $file;
	}

	$case = $_POST["casa"];
	$init = $_POST["start"];
	$finish = $_POST["end"];

	switch ($case) {
		case '#pr':
			contestarLaPrimera($init, $finish);
			break;
		case '#se':

			break;
		case '#te':

			break;
		case '#cu':

			break;
		case '#qu':

			break;
		case '#bo':

			break;
		default:
			# code...
			break;
	}

	//cargaMes($files[$month]);

	function cargaMes($file) {
		if (($gestor = fopen("$file", "r")) !== FALSE) {
			fgetcsv($gestor, 1000, ",");
			while (($linea = fgetcsv($gestor, 1000, ",")) !== FALSE) {
				
				$numero = count($linea);
				$flag = true;
				$id = "";
				$usuario= "";
				$genero= "";
				$edad= "";
				$inicioViaje= "";
				$finViaje= "";
				$origenId= "";
				$destinoId= "";

				for ($c=0; $c < $numero; $c++) {
					//echo $linea[$c] . "<br />\n";
					switch ($c) {
						case 0:
							$id = $linea[$c];
							if(!validacion($linea[$c]))
								$flag = false;
							break;
						case 1:
							$usuario = $linea[$c];
							if(!validacion($linea[$c]))	
								$flag = false;
							break;
						case 2:
							$genero = $linea[$c];
							if(!validacion($linea[$c]))
								$flag = false;
							break;
						case 3:
							$edad = $linea[$c];
							if(!validacion($linea[$c]))
								$flag = false;
							break;
						case 4:
							$inicioViaje = $linea[$c];
							if(!validacion($linea[$c]))
								$flag = false;
							break;
						case 5:
							$finViaje = $linea[$c];
							if(!validacion($linea[$c]))					
								$flag = false;
							break;
						case 6:
							$origenId = $linea[$c];
							if(!validacion($linea[$c]))		
								$flag = false;
							break;
						case 7:
							$destinoId = $linea[$c];
							if(!validacion($linea[$c]))
								$flag = false;
							break;
					}
				}

				if($flag) {
					$listViajes[] =  new Viaje($id, $genero, $usuario, $edad, $inicioViaje, $finViaje, $origenId, $destinoId);
					$fila ++;
				} else {
					$listViajesFeos[] =  new Viaje($id, $genero, $usuario, $edad, $inicioViaje, $finViaje, $origenId, $destinoId);
					$filaFeos ++;
				}
			}
			fclose($gestor);
		}
	}

	function validacion ($dato) {
		$flag = false;
		
		$dato = trim($dato);
		if( $dato != "NULL" && $dato != ""){
			$flag = true;
		}
		return $flag;
	}

	function contestarLaPrimera($start, $end) {
		
		
		$result[] = $start;
		$result[] = $end;
		echo json_encode($result);
	}
	
?>
