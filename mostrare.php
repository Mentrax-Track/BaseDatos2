<?php include('includes/estilos.php');?>   
<div class="container">  
    <?php  include('includes/cabezera.php');?>

    <div  class="jumbotron">

        <?php
        include_once "conexion.php";
        $result = mysql_query("SELECT * FROM cliente");
        echo "<h3>Listado de Clientes</h3>";
        echo "<table border = '2' class='table table-bordered'> \n";
        echo "<tr class='danger'><td>Nro. Cliente</td><td>Nombre</td><td>Apellido</td><td>C.I.</td><td>Clave</td></tr> \n";
        while ($row = mysql_fetch_row($result))
        {
               echo "<tr class='success'><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td></tr> \n";
        }
        echo "</table> \n";
        echo "<br>";

        $result = mysql_query("SELECT f.id_fac, f.id_cliente, f.fecha, d.id_pro, d.cantidad, d.precio FROM factura as f, detalle as d");
        echo "<h3>Listado de Facturas</h3>";
        echo "<table border = '2' class='table table-bordered'> \n";
        echo "<tr class='danger'><td>Nro. Factura</td><td>Cliente</td><td>Fecha</td><td>Producto</td><td>Cantidad</td><td>Precio</td></tr> \n";
        while ($row = mysql_fetch_row($result))
        {
               echo "<tr class='success'><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td></tr> \n";
        }
        echo "</table> \n";
        echo "<br>"; 

        $result = mysql_query("SELECT * FROM producto");
        echo "<h3>Listado de productos</h3>";
        echo "<table border = '2' class='table table-bordered'> \n";
        echo "<tr class='danger'><td>Nro. Producto</td><td>Nombre</td><td>Precio</td><td>Stock</td></tr> \n";
        while ($row = mysql_fetch_row($result))
        {
               echo "<tr class='success'><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr> \n";
        }
        echo "</table> \n";
        echo "<br>";

        ?>
    </div>

  <center><?php include('includes/footer.php'); ?></center>
</div>
<?php include('includes/javascript.php');?> 