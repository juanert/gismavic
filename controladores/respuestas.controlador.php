<?php

class ControladorRegistro{

	/*=============================================
	REGISTRANDO DE CLIENTE
	=============================================*/

	public function ctrRegistro(){

		if((isset($_POST["cliente"])) && (isset($_POST["cedula"])) && (isset($_POST["auto"])) && (isset($_POST["matricula"])) && (isset($_POST["problema"])) ){

			if(preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["cliente"]) &&
				preg_match('/^[a-zA-Z0-9 ]+$/', $_POST["cedula"]) &&
				preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["auto"]) &&
				preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ0-9 ]+$/', $_POST["matricula"]) &&
				preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["cliente"]) &&
				preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ0-9 -]+$/', $_POST["problema"])){

				$nombre = $_POST["cliente"];
				$cedula = $_POST["cedula"];
				$carro = $_POST["auto"];
				$placa = $_POST["matricula"];
				$problema = $_POST["problema"];
				$mecanico = $_POST["mecanico"];
				$telefono = $_POST["telefono"];
				$email = $_POST["email"];

				$tabla = "clientes";

				$respuesta = ModeloRegistro::mdlRegistro($tabla,$nombre,$cedula,$carro,$placa,$problema,$mecanico,$telefono,$email);

				return $respuesta;

			}

		}

	}

	/*=============================================
	ACTUALIZAR TRABAJO
	=============================================*/

	static public function ctrActualizar($id){

		if((isset($_POST["cliente"])) && (isset($_POST["cedula"])) && (isset($_POST["auto"])) && (isset($_POST["matricula"])) && (isset($_POST["problema"])) ){

			if(preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["cliente"]) &&
				preg_match('/^[a-zA-Z0-9 ]+$/', $_POST["cedula"]) &&
				preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["auto"]) &&
				preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ0-9 ]+$/', $_POST["matricula"]) &&
				preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["cliente"]) &&
				preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ0-9 -]+$/', $_POST["problema"])){

				$nombre = $_POST["cliente"];
				$cedula = $_POST["cedula"];
				$carro = $_POST["auto"];
				$placa = $_POST["matricula"];
				$problema = $_POST["problema"];
				$mecanico = $_POST["mecanico"];
				$telefono = $_POST["telefono"];
				$email = $_POST["email"];
				$solucion = $_POST["solucion"];

				$tabla = "clientes";

				$respuesta = ModeloRegistro::mdlActualizar($id,$tabla,$nombre,$cedula,$carro,$placa,$problema,$mecanico,$telefono,$email,$solucion);

				return $respuesta;

			}

		}

	}


	/*=============================================
	MOSTRAR INFOPRODUCTO
	=============================================*/

	static public function ctrMostrarInfoProducto($item, $valor){

		$tabla = "clientes";

		$respuesta = ModeloRegistro::mdlMostrarInfoProducto($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	BUSCADOR
	=============================================*/

	static public function ctrBuscarProductos($busqueda){

		$tabla = "clientes";

		$respuesta = ModeloRegistro::mdlBuscarProductos($tabla, $busqueda);

		return $respuesta;

	}

	/*=============================================
	LISTAR CLIENTES
	=============================================*/

	static public function ctrListarProductosBusqueda($busqueda){

		$tabla = "clientes";

		$respuesta = ModeloRegistro::mdlListarProductosBusqueda($tabla, $busqueda);

		return $respuesta;

	}

}

