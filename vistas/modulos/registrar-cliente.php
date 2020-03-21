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
            
            <h3 class="text-center" style="font-size: 30px;">REGISTRAR CLIENTE</h3>

        </div>

        <hr>

        <form method="post">
                
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="form-group">
                    
                    <div class="input-group">

                        <span class="input-group-addon">
                            
                            <i class="glyphicon glyphicon-user"></i>
                        
                        </span>

                        <input type="text" class="form-control text-uppercase" id="cliente" name="cliente" placeholder="NOMBRE COMPLETO" required>

                    </div>

                </div>

                <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">
                            
                            <i class="glyphicon glyphicon-barcode"></i>
                        
                        </span>

                        <input type="text" class="form-control text-uppercase" id="cedula" name="cedula" placeholder="CEDULA" required>

                    </div>

                </div>

                <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">
                            
                            <i class="glyphicon glyphicon-earphone"></i>
                        
                        </span>

                        <input type="text" class="form-control text-uppercase" id="telefono" name="telefono" placeholder="TELEFONO">

                    </div>

                </div>

                <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">
                            
                            <i class="glyphicon glyphicon-envelope"></i>
                        
                        </span>

                        <input type="text" class="form-control text-uppercase" id="email" name="email" placeholder="EMAIL">

                    </div>

                </div>

                <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">
                            
                            <i class="glyphicon glyphicon-road"></i>
                        
                        </span>

                        <input type="text" class="form-control text-uppercase" id="auto" name="auto" placeholder="AUTO" required>

                    </div>

                </div>

                <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">
                            
                            <i class="glyphicon glyphicon-registration-mark"></i>
                        
                        </span>

                        <input type="text" class="form-control text-uppercase" id="matricula" name="matricula" placeholder="MATRICULA" required>

                    </div>

                </div>

                <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">
                            
                            <i class="glyphicon glyphicon-exclamation-sign"></i>
                        
                        </span>

                        <input type="text" class="form-control text-uppercase" id="problema" name="problema" placeholder="PROBLEMA" required>

                    </div>

                </div>

                <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">
                            
                            <i class="glyphicon glyphicon-wrench"></i>
                        
                        </span>

                        <input type="text" class="form-control text-uppercase" id="mecanico" name="mecanico" placeholder="MECANICO" required>

                    </div>

                </div>

                </div>

                <!--=====================================
                LLAMADO AL CONTROLADOR
                ======================================-->

                <?php

                    $registro = new ControladorRegistro();
                    $registro -> ctrRegistro();
                    
                ?>

                <!--=====================================
                BOTON DE REGISTRO
                ======================================-->
                
                 <input type="submit" class="btn btn-default backColor btn-block btnRegistro" value="REGISTRAR">

            </form>

            <hr>

        </div>
        
    </div>
    
</div>