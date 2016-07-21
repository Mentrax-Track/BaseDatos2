<?php include('includes/estilos.php');?>   
<div class="container">
    <?php include('includes/cabezera_afuera.php');?>

    <div  class="jumbotron">
        <?php
        include_once "conexion.php";
        $result = mysql_query("SELECT * FROM producto");
        echo "<h3>Listado de productos</h3>";
        echo "<table border = '2' class='table table-bordered'> \n";
        echo "<tr class='danger'><td>id</td><td>Nombre</td><td>Precio</td><td>Stock</td></tr> \n";
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
