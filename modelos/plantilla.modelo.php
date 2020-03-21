<?php

require_once "conexion.php";

class ModeloPlantilla{

	static public function mdlEstiloPlantilla($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();

	}

	static public function mdlPreguntas($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

	}

	static public function mdlPreguntasvpi($tabla, $listapreguntas, $listprof){
		try{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE listapregunta = ? AND listprof = ?");

			$stmt -> bindParam(1,$listapreguntas,PDO::PARAM_STR);
			$stmt -> bindParam(2,$listprof,PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetchAll();

			$stmt -> db = null; //PDO Conexion cannot be close with close(); function

		}

		catch (mysqli_sql_exception $exception){

			echo ("An exception happened " + $exception);

		}

		finally{

			$stmt -> db = null; 
		}

	}

	static public function mdlNplPreguntas($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

	}

	static public function mdlNplNumeracion($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

	}

	static public function mdlStQuestions($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

	}

	static public function mdlQuestions($prueba,$tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE test = '$prueba'");

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

	}

}//class ModeloPlantilla