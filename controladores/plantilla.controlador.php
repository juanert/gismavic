<?php

class ControladorPlantilla{

	/*=============================================
	LLAMAMOS LA PLANTILLA
	=============================================*/

	public function plantilla(){

		//if the class doesn´t exists then it loads 
		//the document that holds the class in local path mode.

		include "vistas/plantilla.php";
	}

	/*=============================================
	TRAEMOS LOS ESTILOS DINÁMICOS DE LA PLANTILLA
	=============================================*/

	public function ctrEstiloPlantilla(){

		$tabla = "plantilla";

		$respuesta = ModeloPlantilla::mdlEstiloPlantilla($tabla);

		return $respuesta;
	}

}