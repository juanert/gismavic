<?php

$url = Ruta::ctrRuta();

?>

<!--=====================================
RESULTADO PARA LOS USUARIOS
======================================-->

<!--=====================================
BUSCADOR
======================================-->

<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
	
</div>
				
<div class="input-group col-lg-6 col-md-6 col-sm-6 col-xs-6" id="buscador">
					
	<input type="search" name="buscar" class="form-control" placeholder="Buscar...">	

	<span class="input-group-btn">
						
		<a href="<?php echo $url; ?>clientes/1/recientes">

		<button class="btn btn-default backColor" type="submit">
								
			<i class="fa fa-search"></i>

		</button>

		</a>

	</span>

</div>

<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
	
</div>

<br>

<!--=====================================
BARRA PRODUCTOS
======================================-->

<div class="container-fluid well well-sm barraProductos" style="height: 52px;">

	<div class="container">
		
		<div class="row">

			<div class="col-sm-6 col-xs-12">
				
				<div class="pull-left">
					<ul class="breadcrumb fondoBreadcrumb text-uppercase">
				
						<li><a href="<?php echo $url;  ?>">INICIO</a></li>
						<li class="active pagActiva">Clientes</li>

					</ul>
				</div>

			</div>
			
			<div class="col-sm-6 col-xs-12 organizarProductos">

				<div class="btn-group pull-right">

					 <button type="button" class="btn btn-default btnList" id="btnList0">
					 	
						<i class="fa fa-list" aria-hidden="true"></i> 

						<span class="col-xs-0 pull-right">LISTA</span>

					 </button>
					
				</div>		

			</div>

		</div>

	</div>

</div>

<!--=====================================
LISTAR PRODUCTOS
======================================-->

<div class="container-fluid productos">

	<div class="container">
		
		<div class="row">

			<?php

			/*=============================================
			LLAMADO DE PAGINACIÓN
			=============================================*/

			if(isset($rutas[1])){

				if(isset($rutas[2])){

					if($rutas[2] == "antiguos"){

						$modo = "ASC";
						$_SESSION["ordenar"] = "ASC";

					}else{

						$modo = "DESC";
						$_SESSION["ordenar"] = "DESC";

					}

				}else{

					$modo = $_SESSION["ordenar"];

				}

				$base = ($rutas[1] - 1)*12;
				$tope = 12;

			}else{

				$rutas[1] = 1;
				$base = 0;
				$tope = 12;
				$modo = "DESC";

			}

			/*=============================================
			LLAMADO DE PRODUCTOS POR BÚSQUEDA
			=============================================*/

			$productos = null;
			$listaProductos = null;
			$ordenar = "id";

			if(isset($rutas[3])){

				$busqueda = $rutas[3];
				$productos = ControladorRegistro::ctrBuscarProductos($busqueda);
				$listaProductos = ControladorRegistro::ctrListarProductosBusqueda($busqueda);
				$social = ControladorPlantilla::ctrEstiloPlantilla();

			}

			if(!$productos){

				echo "<div class='col-xs-12 error404 text-center'>

						 <h1><small>¡Oops!</small></h1>

						 <h2>No hemos encontado nada</h2>

					</div>";

			}else{
	
				echo '

				<ul class="list0">';

				foreach ($productos as $key => $value) {

					echo '<li class="col-xs-12">
					  
				  		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
							   
							<figure>
									
								<img src="'.$url.$social["logo"].'" class="img-responsive">

							</figure>

					  	</div>  	
							  
						<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
							
							<p>
								<span style="color: #418EFD"><b>CARRO:</b></span> '.$value["carro"].'
							</p>
							<p>
								<span style="color: #418EFD"><b>CLIENTE</b></span>: '.$value["nombre"].'
							</p>
							<p>
								<span style="color: #418EFD"><b>CEDULA:</b></span> '.$value['cedula'].'
							</p>
							<p>
								<span style="color: #418EFD"><b>PLACA:</b></span> '.$value['placa'].'
							</p>
							<p>
								<span style="color: #418EFD"><b>MECANICO:</b></span> '.$value['mecanico'].'
							</p>
							<p>
								<span style="color: #418EFD"><b>PROBLEMA:</b></span> '.$value['problema'].' 
							</p>
							<p>
								<span style="color: #418EFD"><b>FECHA DE INGRESO:</b></span> '.$value['fecha_ingreso'].'
							</p>

							
							 ';

							if ($value['telefono'] != null) {
								echo'
								<p>
								<span style="color: #418EFD"><b>TELEFONO:</b></span> '.$value["telefono"].'
								</p>
								';
							}

							if ($value['email'] != null) {
								echo'
								<p>
								<span style="color: #418EFD"><b>EMAIL:</b></span> '.$value["email"].'
								</p>
								';
							}

							if ($value['solucion'] == null) {
								echo'
								<p>
								<span style="color: #418EFD"><b>SOLUCIÓN:</b></span> Por definir
								</p>
								';
							}else if ($value['telefono'] != null) {
								echo'
								<p>
								<span style="color: #418EFD"><b>SOLUCIÓN:</b></span> '.$value["solucion"].'
								</p>
								';
							}

							echo '

							<a href="'.$url.$value['id'].'">

							<div><button class="btn btn-primary">EDITAR</button></div>
							
							</a>

							';

							echo'

						</div>

						<div class="col-xs-12"><hr></div>

					</li>';

				}

				echo '</ul>';
			}

			?>

			<div class="clearfix"></div>

			<center>

			<!--=====================================
			PAGINACIÓN
			======================================-->
			
			<?php

				if(count($listaProductos) != 0){

					$pagProductos = ceil(count($listaProductos)/12);

					if($pagProductos > 4){

						/*=============================================
						LOS BOTONES DE LAS PRIMERAS 4 PÁGINAS Y LA ÚLTIMA PÁG
						=============================================*/

						if($rutas[1] == 1){

							echo '<ul class="pagination">';
							
							for($i = 1; $i <= 4; $i ++){

								echo '<li id="item'.$i.'"><a href="'.$url.$rutas[0].'/'.$i.'/'.$rutas[2].'/'.$rutas[3].'">'.$i.'</a></li>';

							}

							echo ' <li class="disabled"><a>...</a></li>
								   <li id="item'.$pagProductos.'"><a href="'.$url.$rutas[0].'/'.$pagProductos.'/'.$rutas[2].'/'.$rutas[3].'">'.$pagProductos.'</a></li>
								   <li><a href="'.$url.$rutas[0].'/2/'.$rutas[2].'/'.$rutas[3].'"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>

							</ul>';

						}

						/*=============================================
						LOS BOTONES DE LA MITAD DE PÁGINAS HACIA ABAJO
						=============================================*/

						else if($rutas[1] != $pagProductos && 
							    $rutas[1] != 1 &&
							    $rutas[1] <  ($pagProductos/2) &&
							    $rutas[1] < ($pagProductos-3)
							    ){

								$numPagActual = $rutas[1];

								echo '<ul class="pagination">
									  <li><a href="'.$url.$rutas[0].'/'.($numPagActual-1).'/'.$rutas[2].'/'.$rutas[3].'"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li> ';
							
								for($i = $numPagActual; $i <= ($numPagActual+3); $i ++){

									echo '<li id="item'.$i.'"><a href="'.$url.$rutas[0].'/'.$i.'/'.$rutas[2].'/'.$rutas[3].'">'.$i.'</a></li>';

								}

								echo ' <li class="disabled"><a>...</a></li>
									   <li id="item'.$pagProductos.'"><a href="'.$url.$rutas[0].'/'.$pagProductos.'/'.$rutas[2].'/'.$rutas[3].'">'.$pagProductos.'</a></li>
									   <li><a href="'.$url.$rutas[0].'/'.($numPagActual+1).'/'.$rutas[2].'/'.$rutas[3].'"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>

								</ul>';

						}

						/*=============================================
						LOS BOTONES DE LA MITAD DE PÁGINAS HACIA ARRIBA
						=============================================*/

						else if($rutas[1] != $pagProductos && 
							    $rutas[1] != 1 &&
							    $rutas[1] >=  ($pagProductos/2) &&
							    $rutas[1] < ($pagProductos-3)
							    ){

								$numPagActual = $rutas[1];
							
								echo '<ul class="pagination">
								   <li><a href="'.$url.$rutas[0].'/'.($numPagActual-1).'/'.$rutas[2].'/'.$rutas[3].'"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li> 
								   <li id="item1"><a href="'.$url.$rutas[0].'/1/'.$rutas[2].'/'.$rutas[3].'">1</a></li>
								   <li class="disabled"><a>...</a></li>
								';
							
								for($i = $numPagActual; $i <= ($numPagActual+3); $i ++){

									echo '<li id="item'.$i.'"><a href="'.$url.$rutas[0].'/'.$i.'/'.$rutas[2].'/'.$rutas[3].'">'.$i.'</a></li>';

								}


								echo '  <li><a href="'.$url.$rutas[0].'/'.($numPagActual+1).'/'.$rutas[2].'/'.$rutas[3].'"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
									</ul>';
						}

						/*=============================================
						LOS BOTONES DE LAS ÚLTIMAS 4 PÁGINAS Y LA PRIMERA PÁG
						=============================================*/

						else{

							$numPagActual = $rutas[1];

							echo '<ul class="pagination">
								   <li><a href="'.$url.$rutas[0].'/'.($numPagActual-1).'/'.$rutas[2].'/'.$rutas[3].'"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li> 
								   <li id="item1"><a href="'.$url.$rutas[0].'/1/'.$rutas[2].'/'.$rutas[3].'">1</a></li>
								   <li class="disabled"><a>...</a></li>
								';
							
							for($i = ($pagProductos-3); $i <= $pagProductos; $i ++){

								echo '<li id="item'.$i.'"><a href="'.$url.$rutas[0].'/'.$i.'/'.$rutas[2].'/'.$rutas[3].'">'.$i.'</a></li>';

							}

							echo ' </ul>';

						}

					}else{

						echo '<ul class="pagination">';
						
						for($i = 1; $i <= $pagProductos; $i ++){

							echo '<li id="item'.$i.'"><a href="'.$url.$rutas[0].'/'.$i.'/'.$rutas[2].'/'.$rutas[3].'">'.$i.'</a></li>';

						}

						echo '</ul>';

					}

				}

			?>

			</center>

</div>

</div>

</div>

