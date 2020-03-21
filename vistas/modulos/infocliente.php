<?php 

    $url = Ruta::ctrRuta();

?>


<!--=====================================
FORMULARIO DE REGISTRO DE CLIENTE
======================================-->

<hr>

<div class="container-fluid">

    <div class="container">

        <div class="container backColor" style="border-radius: 50px;">
            
            <h3 class="text-center" style="font-size: 30px;">ACTUALIZAR</h3>

        </div>

        <hr>

        <?php

        $item =  "ruta";
        $valor = $rutas[0];
        $infoproducto = ControladorRegistro::ctrMostrarInfoProducto($item, $valor);

        echo'

        <form method="post">
                
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="form-group">
                    
                    <div class="input-group">

                        <span class="input-group-addon">
                            
                            <i class="glyphicon glyphicon-user"></i>
                        
                        </span>

                        <input type="text" class="form-control text-uppercase" id="cliente" name="cliente" placeholder="NOMBRE COMPLETO" value="'.$infoproducto["nombre"].'" required>

                    </div>

                </div>

                <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">
                            
                            <i class="glyphicon glyphicon-barcode"></i>
                        
                        </span>

                        <input type="text" class="form-control text-uppercase" id="cedula" name="cedula" placeholder="CEDULA" value="'.$infoproducto["cedula"].'" required>

                    </div>

                </div>

                <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">
                            
                            <i class="glyphicon glyphicon-earphone"></i>
                        
                        </span>

                        <input type="text" class="form-control text-uppercase" id="telefono" name="telefono" placeholder="TELEFONO" value="'.$infoproducto["telefono"].'">

                    </div>

                </div>

                <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">
                            
                            <i class="glyphicon glyphicon-envelope"></i>
                        
                        </span>

                        <input type="text" class="form-control text-uppercase" id="email" name="email" placeholder="EMAIL" value="'.$infoproducto["email"].'">

                    </div>

                </div>

                <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">
                            
                            <i class="glyphicon glyphicon-road"></i>
                        
                        </span>

                        <input type="text" class="form-control text-uppercase" id="auto" name="auto" placeholder="AUTO" value="'.$infoproducto["carro"].'" required>

                    </div>

                </div>

                <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">
                            
                            <i class="glyphicon glyphicon-registration-mark"></i>
                        
                        </span>

                        <input type="text" class="form-control text-uppercase" id="matricula" name="matricula" placeholder="MATRICULA" value="'.$infoproducto["placa"].'" required>

                    </div>

                </div>

                <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">
                            
                            <i class="glyphicon glyphicon-exclamation-sign"></i>
                        
                        </span>

                        <input type="text" class="form-control text-uppercase" id="problema" name="problema" placeholder="PROBLEMA" value="'.$infoproducto["problema"].'" required>

                    </div>

                </div>

                <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">
                            
                            <i class="glyphicon glyphicon-wrench"></i>
                        
                        </span>

                        <input type="text" class="form-control text-uppercase" id="mecanico" name="mecanico" placeholder="MECANICO" value="'.$infoproducto["mecanico"].'" required>

                    </div>

                </div>

                <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">
                            
                            <i class="glyphicon glyphicon-ok-circle"></i>
                        
                        </span>

                        <input type="text" class="form-control text-uppercase" id="solucion" name="solucion" placeholder="SOLUCION" value="'.$infoproducto["solucion"].'" required>

                    </div>

                </div>

                </div>

                ';

                $id = $infoproducto["id"];

                /*<--====================================
                LLAMADO AL CONTROLADOR
                ======================================-->*/

                    $actualizar = new ControladorRegistro();
                    $actualizar -> ctrActualizar($id);
                    
                ?>

                <!--=====================================
                BOTON DE REGISTRO
                ======================================-->
                
                 <input type="submit" class="btn btn-default backColor btn-block btnRegistro" value="ACTUALIZAR">

            </form>

            <hr>

        </div>
        
    </div>
    
</div>