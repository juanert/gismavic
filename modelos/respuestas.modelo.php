<?php

require_once "conexion.php";

class ModeloRegistro{

	/*=============================================
	REGISTRO DE RESPUESTAS
	=============================================*/

	static public function mdlRegistro($tabla,$nombre,$cedula,$carro,$placa,$problema,$mecanico,$telefono,$email){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, cedula, carro, placa, problema, mecanico, telefono, email) VALUES (:nombre, :cedula, :carro, :placa, :problema, :mecanico, :telefono, :email)");

		$stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
		$stmt->bindParam(":cedula", $cedula, PDO::PARAM_STR);
		$stmt->bindParam(":carro", $carro, PDO::PARAM_STR);
		$stmt->bindParam(":placa", $placa, PDO::PARAM_STR);
		$stmt->bindParam(":problema", $problema, PDO::PARAM_STR);
		$stmt->bindParam(":mecanico", $mecanico, PDO::PARAM_STR);
		$stmt->bindParam(":telefono", $telefono, PDO::PARAM_STR);
		$stmt->bindParam(":email", $email, PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	ACTUALIZAR TRABAJO
	=============================================*/

	static public function mdlActualizar($id,$tabla,$nombre,$cedula,$carro,$placa,$problema,$mecanico,$telefono,$email,$solucion){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, cedula = :cedula, carro = :carro, placa = :placa, problema = :problema, mecanico = :mecanico, telefono = :telefono, email = :email, solucion = :solucion WHERE id = :id");

		$stmt -> bindParam(":nombre", $nombre, PDO::PARAM_STR);
		$stmt -> bindParam(":cedula", $cedula, PDO::PARAM_STR);
		$stmt -> bindParam(":carro", $carro, PDO::PARAM_STR);
		$stmt -> bindParam(":placa", $placa, PDO::PARAM_STR);
		$stmt -> bindParam(":problema", $problema, PDO::PARAM_STR);
		$stmt -> bindParam(":mecanico", $mecanico, PDO::PARAM_STR);
		$stmt -> bindParam(":telefono", $telefono, PDO::PARAM_STR);
		$stmt -> bindParam(":email", $email, PDO::PARAM_STR);
		$stmt -> bindParam(":solucion", $solucion, PDO::PARAM_STR);
		$stmt -> bindParam(":id", $id, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";

		}else{

			return "error";

		}

		$stmt-> close();

		$stmt = null;

	}

	/*=============================================
	MOSTRAR INFOPRODUCTO
	=============================================*/

	static public function mdlMostrarInfoProducto($tabla, $item, $valor){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

		$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	BUSCADOR
	=============================================*/

	static public function mdlBuscarProductos($tabla, $busqueda){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE nombre like '%$busqueda%' OR cedula like '%$busqueda%' OR carro like '%$busqueda%' OR placa like '%$busqueda%' OR telefono like '%$busqueda%' OR email like '%$busqueda%' ORDER BY id DESC");

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	LISTAR PRODUCTOS
	=============================================*/

	static public function mdlListarProductosBusqueda($tabla, $busqueda){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE nombre like '%$busqueda%' OR cedula like '%$busqueda%' OR carro like '%$busqueda%' OR placa like '%$busqueda%' OR telefono like '%$busqueda%' OR email like '%$busqueda%' ORDER BY id DESC");

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

		$stmt = null;

	}

}