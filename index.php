<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Proyecto</title>
        <link href="css/globalCSS.css" rel="stylesheet" style type="text/css">
    </head>
    <body> 
    <?php 
        include("header.php");
        ?>
            <nav class="navegacion">
                <ul class="menu">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="#">Cliente</a>
                        <ul class="submenu">
                            <li><a href="cliente.php">Registro de Clientes</a></li>
                            <li><a href="listacliente.php">Listado de Clientes</a></li>
                        </ul>
                    </li>   
                    <li><a href="#">Alquiler de Vehiculos</a>
                        <ul class="submenu">
                            <li><a href="factura.php">Proforma de Calculo</a></li>
                            <li><a href="datosfactura.php">Listado de Factura</a></li>
                        </ul>
                    </li> 
                </ul>
            </nav>
        <div class="mt-Cuerpo"><br><br><br><br><br><br><br>
        <?php
		require("conexion.php");
        $st = $mysqli->query("select * from vehiculos");
        echo '<table style="text-align:center;" width="60%">';
        echo '<caption><h2></h2></caption>';
        echo '<th>Categoria</th>';
        echo '<th>Tipo Vehiculo</th>';
        echo '<th>Costo por dia</th>';
        echo '<th>Descuento hasta 10 dias</th>';
        echo '<th>Descuento desde 11 dias</th>';
        while ($rows = $st-> fetch_assoc()) {
            echo '<tr>';
            echo '<td>';
            print ($rows['categoria']);
            echo '</td>';
            echo '<td>';
            print ($rows['tipovehiculo']);
            echo '</td>';
            echo '<td>';
            print ($rows['costodia']);
            echo '</td>';
            echo '<td>';
            print ($rows['descuentome']);
            echo '</td>';
            echo '<td>';
            print ($rows['descuentoma']);
            echo '</td>';
            echo '</tr>';
            
        }
        ?>
        </div>
        <marquee direction=""><img src="imagenes/vans"/ width="200" align="right"></marquee>
        <marquee direction=""><img src="imagenes/camion"/ width="300" align="right"></marquee>
    </body>
</html>
