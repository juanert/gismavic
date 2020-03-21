<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<title>Sistema de inventario</title>

	<?php

		/*=============================================
		MANTENER LA RUTA FIJA DEL PROYECTO
		=============================================*/
		
		$url = Ruta::ctrRuta();

		$icono = ControladorPlantilla::ctrEstiloPlantilla();

		echo '<link rel="icon" href="'.$url.$icono["icono"].'">'

	?>

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/bootstrap.min.css">

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/font-awesome.min.css">

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plantilla.css">

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/cabezote.css">

	<script src="<?php echo $url; ?>vistas/js/plugins/jquery.min.js"></script>

	<script src="<?php echo $url; ?>vistas/js/plugins/bootstrap.min.js"></script>

</head>

<body>

<?php

/*=============================================
CABEZOTE
=============================================*/

include "modulos/header.php";

/*=============================================
CONTENIDO DINÁMICO
=============================================*/

$rutas = array();
$ruta = null;
$infoProducto = null;

if(isset($_GET["ruta"])){

	$rutas = explode("/", $_GET["ruta"]);
	$item = "ruta";
	$valor =  $rutas[0];

	/*=============================================
	URL'S AMIGABLES DE PRODUCTOS
	=============================================*/

	$rutaProductos = ControladorRegistro::ctrMostrarInfoProducto($item, $valor);
	
	if($rutas[0] == $rutaProductos["ruta"]){

		$infoProducto = $rutas[0];

	}

	/*=============================================
	LISTA BLANCA DE URL'S AMIGABLES
	=============================================*/

	if($infoProducto != null){

		include "modulos/infocliente.php";

	}else if($rutas[0] == "clientes" || $rutas[0] == "registrar-cliente"){

		include "modulos/".$rutas[0].".php";

	}else{

		include "modulos/error404.php";

	}

}else{

	header('Location: http://localhost/gismavic/clientes/1/recientes/');

}

?>

<script src="<?php echo $url; ?>vistas/js/plantilla.js"></script>
<script src="<?php echo $url; ?>vistas/js/buscador.js"></script>

</body>
</html>