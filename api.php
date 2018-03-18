<?php
	$d = 0;
	require_once("/object/Viaje.php");
	$fila = 1;
	$listViajes = [];
	$tag = false;
	$id = "";
	$usuario= "";
	$genero= "";
	$edad= "";
	$inicioViaje= "";
	$finViaje= "";
	$origenId= "";
	$destinoId= "";
	if (($gestor = fopen("data/datos_abiertos_2017_01.csv", "r")) !== FALSE) {
		while (($datos = fgetcsv($gestor, 1000, ",")) !== FALSE) {
				$numero = count($datos);
				//echo "<p> $numero de campos en la línea $fila: <br /></p>\n";
				$fila++;
				$flag = true;
				$id = "";
				$usuario= "";
				for ($c=0; $c < $numero; $c++) {
						//echo $datos[$c] . "<br />\n";
						switch ($c) {
							case 0:
							 $id = $datos[$c];
							if(!validacion($datos[$c])){
								$flag = false;
							}		

								break;
							case 1:
							$usuario = $datos[$c];
							if(!validacion($datos[$c])){
								
								$flag = false;
							}
								break;
							case 2:
							$genero = $datos[$c];
								if(!validacion($datos[$c])){
								
								$flag = false;
							}
								break;
							case 3:
							$edad = $datos[$c];
							if(!validacion($datos[$c])){
								
								$flag = false;
							}
								break;
							case 4:
							$inicioViaje = $datos[$c];
							if(!validacion($datos[$c])){
								
								$flag = false;
							}
								break;
							case 5:
							$finViaje = $datos[$c];
							if(!validacion($datos[$c])){
								
								$flag = false;
							}
								break;
							case 6:
							$origenId = $datos[$c];
							if(!validacion($datos[$c])){
								
								$flag = false;
							}
								break;
							case 7:
							$destinoId = $datos[$c];
							if(!validacion($datos[$c])){
								
								$flag = false;
							}
								break;
						}


						

				}
				if($flag)
						{
							$listViajes [] =  new Viaje($id, $usuario, $edad, $inicioViaje, $finViaje, $origenId, $destinoId);

							echo "ID:  " . $listViajes[$d]->getId() . " usuario:  " . $listViajes[$d]->getUsuario() ;
								

							echo "<br>";
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
