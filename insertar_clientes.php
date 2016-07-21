<?php include('includes/estilos.php');?>   
<div class="container">
    <?php  include('includes/cabezera_afuera.php');?>
    <div  class="jumbotron">
    <h2>Datos del Factura</h2>
        <form class="form-horizontal" method="post"  action="mostrare.php">
            <div class="row">
                <div class="col-xs-4"></div>
                <div class="form-group form-group-lg col-xs-4"  >
                    <label class="col-sm-1 control-label" for="formGroupInputLarge">Nombre</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Ingrese nombre del producto">
                    <label class="col-sm-1 control-label" for="formGroupInputLarge">Apellido</label>
                    <input type="text" name="apellido" class="form-control" placeholder="Ingrese nombre del producto">
                    <label class="col-sm-1 control-label" for="formGroupInputLarge">C.I.</label>
                    <input type="number" name="ci" class="form-control" placeholder="Ingrese nombre del producto">
                    <label class="col-sm-1 control-label" for="formGroupInputLarge">Clave</label>
                    <input type="number" name="password" class="form-control" placeholder="Ingrese nombre del producto">
                </div>        
                <div class="col-xs-4"></div>
            </div>
            <input type="submit" name="enviar" value="Guardar" class="btn btn-success">
        </form>
    </div>
    <center><?php include('includes/footer.php'); ?></center>
</div>
<?php include('includes/javascript.php');?> 