<?php

	require_once("/object/Viaje.php");
	$fila = 1;
	$listViajes = [];
	$tag = false;
	if (($gestor = fopen("data/datos_abiertos_2017_01.csv", "r")) !== FALSE) {
		while (($datos = fgetcsv($gestor, 1000, ",")) !== FALSE) {
				$numero = count($datos);
				//echo "<p> $numero de campos en la línea $fila: <br /></p>\n";
				$fila++;
				$flag = true;
				for ($c=0; $c < $numero; $c++) {
						//echo $datos[$c] . "<br />\n";
						switch ($c) {
							case 0:
							if(!validacion($datos[$c]))
									$flag = false;
								break;
							case 1:
							if(!validacion($datos[$c]))
									$flag = false;
								break;
							case 2:
								if(!validacion($datos[$c]))
									$flag = false;
								break;
							case 3:
							if(!validacion($datos[$c]))
									$flag = false;
								break;
							case 4:
							if(!validacion($datos[$c]))
									$flag = false;
								break;
							case 5:
							if(!validacion($datos[$c]))
									$flag = false;
								break;
							case 6:
							if(!validacion($datos[$c]))
									$flag = false;
								break;
							case 7:
							if(!validacion($datos[$c]))
									$flag = false;
								break;
						}


						

				}
				if($flag)
						{
							$listViajes [] =  new Viaje($datos[0],$datos[1],$datos[2],$datos[3],$datos[4],$datos[5],$datos[6]);

							echo "1" . $datos[0] . " 2" . $datos[1] . " 3" . $datos[2] . " 4" . $datos[3] . " 5" . $datos[4] . " 6" . $datos[5]. " 7" . $datos[6] . " 8". $datos[7] ;
						}

		}
		fclose($gestor);
	}

	function validacion ($dato) {
		$flag = false;
		
		$dato = trim($dato);
		if( $dato != "NULL" && $dato != ""){
			$flag = true;
		}
		return $flag;
	}

	
	
?>
