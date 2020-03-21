<?php

$url = Ruta::ctrRuta();

?>

<!--=====================================
TOP
======================================-->

<div class="container-fluid barraSuperior" id="top">
	
	<div class="container">
		
		<div class="row">
	
			<!--=====================================
			SOCIAL
			======================================-->

			<div class="col-lg-7 col-md-7 col-sm-5 col-xs-12 social">
				
				<ul>	

					<?php

					$social = ControladorPlantilla::ctrEstiloPlantilla();

					$jsonRedesSociales = json_decode($social["redesSociales"],true);		

					foreach ($jsonRedesSociales as $key => $value) {

						echo '<li>
								<a href="'.$value["url"].'" target="_blank">
									<i class="fa '.$value["red"].' redSocial '.$value["estilo"].'" aria-hidden="true"></i>
								</a>
							</li>';
					}

					?>
			
				</ul>

			</div>

			<!--=====================================
			REGISTRO
			======================================-->

			<div class="col-lg-5 col-md-5 col-sm-7 col-xs-12 registro">
				
				<ul>

					<?php

					echo'
					
					<li><a href="'.$url.'registrar-cliente">Nuevo Cliente</a></li>
					<li>|</li>
					<li><a href="'.$url.'clientes/1/recientes/">Clientes</a></li>

					';

					?>

				</ul>

			</div>	

		</div>	

	</div>

</div>

<!--=====================================
HEADER
======================================-->

<header class="container-fluid">
	
	<div class="container">
		
		<div class="row" id="cabezote">

			<!--=====================================
			LOGOTIPO
			======================================-->
			
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="logotipo">

				<div class="container">
					<img style="width: 300px;padding: 35px;height: 200px;padding-left: 47px;margin-left: auto;margin-right: auto; " src="<?php echo $url.$social["logo"]; ?>" class="img-responsive">
				</div>
				
				
				
			</div>

		</div>

	</div>

</header>


