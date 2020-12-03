<?php

class ControladorPlantilla{

	/*------- llamamos la pantilla --------*/
	public function plantilla(){
		include "vistas/plantilla.php";
	}

	/*------- traemos los estilos dinamicos de la plantilla --------*/
	public function ctrEstiloPlantilla(){

		$tabla = "plantilla";

		$respuesta = ModeloPlantilla::mdlEstiloPlantilla($tabla);

		return $respuesta;

	}

	/*------- TRAEMOS LAS CABECERAS --------*/
	static public function ctrTraerCabeceras($ruta){

		$tabla = "cabeceras";

		$respuesta = ModeloPlantilla::mdlTraerCabeceras($tabla, $ruta);

		return $respuesta;	

	}

}