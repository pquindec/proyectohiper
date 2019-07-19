<!DOCTYPE html>
<html>
<head>
	<title>Factura</title>
	<meta charset="utf-8">
	<link href="css/globalCSS.css" rel="stylesheet" style type="text/css">
	<script type="text/javascript" src='jquery-1.7.1.min.js' ></script>
	<script type="text/javascript">
		$(function(){
			$("#categoria").change(
				function(){
						$.ajax({
							type: "POST",
							url: "querys.php?accion=cargarTipos",
							data: $("#datos").serialize(),
							success: cargarTipos
						});
					return false;
				});
		});
		
		function cargarTipos(arg){
			$("#tipo").html("");
			$("#tipo").append(arg);
			$.ajax({
				type: "POST",
				url: "querys.php?accion=cargarCosto",
				data: $("#datos").serialize(),
				success: cargarCosto
			});
		}

		function cargarCosto(arg) {
			$("#cot").html("");
			$("#cot").append(arg);
		}
	</script>
</head>
<body>
	<?php
	include("header.php");?>
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
	<h2>Selecionar Tipo de Vehiculo</h2>
	 <?php
		require("conexion.php");

        $st = $mysqli->query("select categoria,tipovehiculo,costodia from vehiculos");
        echo '<table style="text-align:center;" width="60%">';
        echo '<caption><h2></h2></caption>';
        echo '<th>Categoria</th>';
        echo '<th>Tipo Vehiculo</th>';
        echo '<th>Costo por dia</th>';
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
            echo '</tr>';
        }
        ?>
        <form id="datos" action="calculo.php" method="post">
        <select id="categoria" name="categoria">
				<option value="0">Seleccione</option>
				<?php
				
				$sql = $mysqli->query("select * from vehiculos");
				while ($row = $sql->fetch_assoc()) {
					echo '<option value="'.$row['categoria'].'">'.$row['categoria'].'</option>';
				}
				?>
			</select><br>
        <select id="tipo" name="tipo">
				<option value="0">Seleccione</option>
				<?php
					$sql = $mysqli->query("select * from vehiculos");
				while ($row = $sql->fetch_assoc()) {
					echo '<option value="'.$row['categoria'].'">'.$row['tipovehiculo'].'</option>';
				}
				?>
			</select><br>
        <select id="cot" name="cot">
				<option value="0">Seleccione</option>
				<?php
				$sql = $mysqli->query("select * from vehiculos");
				while ($row = $sql->fetch_assoc()) {
					echo '<option value="'.$row['categoria'].'">'.$row['costodia'].'</option>';
				}
				?>
			</select><br>
			<select id="des" name="des">
				<option value="me">De 3 a 10 dias</option>
				<option value="ma">Mas de 10 dias</option>
			</select><br>
			<input type="submit" value="Calcular">
			<br>
		</form>		
</body>
</html>