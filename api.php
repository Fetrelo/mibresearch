<?php
	$fila = 1;
	$tag = false;
	if (($gestor = fopen("data/datos_abiertos_2017_01.csv", "r")) !== FALSE) {
		while (($datos = fgetcsv($gestor, 1000, ",")) !== FALSE) {
				$numero = count($datos);
				//echo "<p> $numero de campos en la línea $fila: <br /></p>\n";
				$fila++;

				for ($c=0; $c < $numero; $c++) {
						//echo $datos[$c] . "<br />\n";
						switch ($c) {
							case 1:
								break;
							case 2:
								break;
							case 3:
								$dato[$c] = nacimiento($dato[$c]);
								if(strlen($dato[$c]) > 0) {
									$tag = true;
								}
								break;
							case 4:
								break;
							case 5:
								break;
							case 6:
								break;
							case 7:
								break;
							case 8:
								break;
						}
				}
		}
		fclose($gestor);
	}

	function nacimiento ($anio) {
		$dataCleaned = "";
		$anio = trim($anio);
		if(strlen($anio) == 4 && $anio != "NULL" && $anio != ""){
			$dataClean = $anio;
		}
		return $dataClean;
	}

	function viaje ($viaje) {
		$dataCleaned = "";
		$viaje = trim($viaje);
		if($viaje != "NULL" && $viaje != ""){
			$dataClean = $viaje;
		}
		return $dataClean;
	}
	/*
		if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['name'])) {
			//echo $name = $_POST['name'];


		}*/
?>
