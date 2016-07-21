<?php include('includes/estilos.php');?> 
<div class="container">
         <?php include('includes/cabezera_afuera.php') ?>
    <div class="jumbotron">
        <div class="row">
                <div class="col-md-8">
                  <h1>CompuMAR</h1>
                    <p class="lead">Esta tienda es la mas comercial del mundo</p>
                </div>
                
                <div class="col-md-4">
                    <form class="form-horizontal" action="" method="post" class="login">
                        <div class="form-group">
                            <label>Cedula de Identidad:</label>
                              <input  name="ci" type="text" class="form-control" placeholder="Ingrese su C.I.">
                        </div>
                        <div class="form-group">
                            <label>Clave:</label>
                              <input name="password" type="password" class="form-control" placeholder="Ingrese su clave">
                        </div>
                        <div class="form-group">
                          <center>
                              <input name="login" type="submit" value="INGRESAR" class="btn btn-success">
                          </center>
                        </div>
                    </form>
                </div>
          </div>
    </div>
<?php
include_once "conexion.php";

function verificar_login($ci,$password,&$result) {
    $sql = "SELECT * FROM cliente WHERE ci = '$ci' and password = '$password'";
    $rec = mysql_query($sql);
    $count = 0;

    while($row = mysql_fetch_object($rec))
    {
        $count++;
        $result = $row;
    }

    if($count == 1)
    {
        return 1;
    }

    else
    {
        return 0;
    }
}

if(!isset($_SESSION['userid']))
{
    if(isset($_POST['login']))
    {
        if(verificar_login($_POST['ci'],$_POST['password'],$result) == 1)
        {
            $_SESSION['userid'] = $result->idusuario; 
            header("location:inicio.php"); 
        }
        else
        {
            echo '<div class="alert alert-danger" role="alert">Su C.I. o Clave es incorrecto, intente nuevamente....</div>';
            
        }
    }

}
?>
    <div class="row text-center">
          <div class="col-lg-4">
            <img class="img-circle" src="imagenes/pc.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Computadoras</h2>
            <p>Computadoras de escritorios...</p>
            <p><a class="btn btn-primary" href="mostrar_afuera.php" role="button">Ver detalles &raquo;</a></p>
          </div>
          <div class="col-lg-4">
            <img class="img-circle" src="imagenes/cel.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Celulares</h2>
            <p>Celulares de todo modelo...</p>
            <p><a class="btn btn-primary" href="mostrar_afuera.php" role="button">Ver detalles &raquo;</a></p>
          </div>
          <div class="col-lg-4">
            <img class="img-circle" src="imagenes/ra.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Stereo</h2>
            <p>Equipos de sonido...</p>
            <p><a class="btn btn-primary" href="mostrar_afuera.php" role="button">Ver detalles &raquo;</a></p>
          </div>
    </div>
</div>
<?php include('includes/javascript.php');?> 