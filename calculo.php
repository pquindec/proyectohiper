<!DOCTYPE html>
<html>
<head>
	<title>calculo</title>
	<meta charset="utf-8">
	<link href="css/globalCSS.css" rel="stylesheet" style type="text/css">
	<script type="text/javascript" src='jquery-1.7.1.min.js' ></script>
	<script type="text/javascript">
	$(function(){
			$("#cedula").change(
				function(){
						$.ajax({
							type: "POST",
							url: "querys.php?accion=cargarUsuario",
							data: $("#datos").serialize(),
							success: cargarUsuario
						});
					return false;
				});
		});
		function cargarUsuario(arg){
			$("#nombre").html("");
			$("#nombre").append(arg);
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
		<?php
		require("conexion.php");
			if(isset($_POST['id_factura']) && !empty($_POST['id_factura']) &&
				isset($_POST['dias_alquiler']) && !empty($_POST['dias_alquiler']) &&
				isset($_POST['costo_dia']) && !empty($_POST['costo_dia']) &&
				isset($_POST['total_descuento']) && !empty($_POST['total_descuento']) &&
				isset($_POST['total_iva']) && !empty($_POST['total_iva']) &&
				isset($_POST['total_pagar']) && !empty($_POST['total_pagar']) &&
				isset($_POST['fecha_ingreso']) && !empty($_POST['fecha_ingreso']) &&
				isset($_POST['fk_vehiculo']) && !empty($_POST['fk_vehiculo']) &&
				isset($_POST['cedula']) && !empty($_POST['cedula']) &&
				isset($_POST['nombre']) && !empty($_POST['nombre'])){
				
				$sql=mysqli_connect($host,$user,$pw,$bd);
				mysqli_query($sql,("insert into facturas(id_factura,dias_alquiler,costo_dia,total_descuento,total_iva,total_pagar,fecha_ingreso,fk_vehiculo,fk_id,fk_nombre) values('$_POST[id_factura]','$_POST[dias_alquiler]','$_POST[costo_dia]','$_POST[total_descuento]','$_POST[total_iva]','$_POST[total_pagar]','$_POST[fecha_ingreso]','$_POST[fk_vehiculo]','$_POST[cedula]','$_POST[nombre]')"));
			 
				echo"datos ingresados";
			} else {
				echo"<div style='margin-left:1%'>";
				if($_POST['cot'] == "A" && $_POST['des'] == "me"){
					echo "Automovil el costo total es: 90<br>";
					$iva = (90*12)/100;
					echo "El valor del iva es: ".$iva; echo "<br>";
					$tiva = (90+$iva);
					echo "Total con iva: ".$tiva; echo "<br>";
					$des = ((90*2)/100);
					echo "El descuento por 3 a 10 dias es: ".$des; echo "<br>";
					$desc = ($tiva-$des);
					echo"EL valor total con descuento es:".$desc; echo "<br><br>";
				}else{
					if($_POST['cot'] == "A" && $_POST['des'] == "ma"){
						echo "Automovil el costo total es: 90<br>";
						$iva = (90*12)/100;
						echo "El valor del iva es: ".$iva; echo "<br>";
						$tiva = (90+$iva);
						echo "Total con iva: ".$tiva; echo "<br>";
						$des = ((90*3)/100);
						echo "El descuento por mas de 10 dias es: ".$des; echo "<br>";
						$desc = ($tiva-$des);
						echo"EL valor total con descuento es:".$desc; echo "<br><br>";
					}
				}
				if($_POST['cot'] == "B" && $_POST['des'] == "me"){
					echo "Camioneta el Costo total: 120<br>";
					$iva = (120*12)/100;
					echo "El valor del iva es: ".$iva; echo "<br>";
					$tiva = (120+$iva);
					echo "Total con iva: ".$tiva; echo "<br>";
					$des = ((120*2.5)/100);
					echo "El descuento por 3 a 10 dias es: ".$des; echo "<br>";
					$desc = ($tiva-$des);
					echo"EL valor total con descuento es:".$desc; echo "<br><br>";
				} else {
					if($_POST['cot'] == "B" && $_POST['des'] == "ma"){
						echo "Camioneta el Costo total: 120<br>";
						$iva = (120*12)/100;
						echo "El valor del iva es: ".$iva; echo "<br>";
						$tiva = (120+$iva);
						echo "Total con iva: ".$tiva; echo "<br>";
						$des = ((120*3.5)/100);
						echo "El descuento es por mas 10 dias: ".$des; echo "<br>";
						$desc = ($tiva-$des);
						echo"EL valor total con descuento es:".$desc; echo "<br><br>";
					}
				}
				if($_POST['cot'] == "C" && $_POST['des'] == "me"){
						echo "Vans el Costo total: 150<br>";
						$iva = (150*12)/100;
						echo "El valor del iva es: ".$iva; echo "<br>";
						$tiva = (150+$iva);
						echo "Total con iva: ".$tiva; echo "<br>";
						$des = ((150*3)/100);
						echo "El descuento es por 3 a 10 dias: ".$des; echo "<br>";
						$desc = ($tiva-$des);
						echo"EL valor total con descuento es:".$desc; echo "<br><br>";
					}else{
					if($_POST['cot'] == "C" && $_POST['des'] == "ma"){
						echo "Vans el Costo total: 150<br>";
						$iva = (150*12)/100;
						echo "El valor del iva es: ".$iva; echo "<br>";
						$tiva = (150+$iva);
						echo "Total con iva: ".$tiva; echo "<br>";
						$des = ((150*4)/100);
						echo "El descuento por mas de 10 dias: ".$des; echo "<br>";
						$desc = ($tiva-$des);
						echo"EL valor total con descuento es:".$desc; echo "<br><br>";
					}
				}
				if($_POST['cot'] == "D" && $_POST['des'] == "me"){
						echo "Camion el Costo total: 250<br>";
						$iva = (250*12)/100;
						echo "El valor del iva es: ".$iva; echo "<br>";
						$tiva = (250+$iva);
						echo "Total con iva: ".$tiva; echo "<br>";
						$des = ((250*3.5)/100);
						echo "El descuento por 3 a 10 dias: ".$des; echo "<br>";
						$desc = ($tiva-$des);
						echo"EL valor total con descuento es:".$desc; echo "<br><br>";
					}else{
					if($_POST['cot'] == "D" && $_POST['des'] == "ma"){
						echo "Camion el Costo total: 250<br>";
						$iva = (250*12)/100;
						echo "El valor del iva es: ".$iva; echo "<br>";
						$tiva = (250+$iva);
						echo "Total con iva: ".$tiva; echo "<br>";
						$des = ((250*4.5)/100);
						echo "El descuento por mas de 10 dias: ".$des; echo "<br>";
						$desc = ($tiva-$des);
						echo"EL valor total con descuento es:".$desc; echo "<br><br>";
					}
				}
				echo"</div>";
			}
		?>
		<form id ="datos" action="calculo.php" method="post">
		<label style="margin-left:1%">NUMERO DE FACTURA: <input style="margin-left:1.1%" type="text" name="id_factura"><br><br>
        <label style="margin-left:1%">DIAS DE ALQUILER :<input style="margin-left:2.5%" type="text" name="dias_alquiler"><br><br>
        <label style="margin-left:1%">COSTO SIN DESCUENTO:<input style="margin-left:1.%" type="text" name="costo_dia"><br><br>
        <label style="margin-left:1%">TOTAL DE DESCUENTO: <input style="margin-left:1.%" type="text" name="total_descuento"><br><br>
        <label style="margin-left:1%">TOTAL DE IVA 12%:   <input style="margin-left:3%" type="text" name="total_iva"><br><br>
        <label style="margin-left:1%">TOTAL A PAGAR:<input style="margin-left:4.5%" type="text" name="total_pagar"><br><br>
        <label style="margin-left:1%">FECHA DE INGRESO: <input style="margin-left:2%" type="text" name="fecha_ingreso"><br><br>
        <label style="margin-left:1%">TIPO DE VEHICULO : <select style="margin-left:1.5%" name="fk_vehiculo">
				<option value="0">Seleccione</option>
				<?php
				$sql = $mysqli->query("select * from vehiculos");
				while ($row = $sql->fetch_assoc()) {
					echo '<option value="'.$row['tipovehiculo'].'">'.$row['tipovehiculo'].'</option>';
				}
				?>
			</select><br><br>
		<label style="margin-left:1%">NUMERO DE CEDULA: <select style="margin-left:0.5%" id="cedula" name="cedula">
				<option value="0">Seleccione</option>
				<?php
				$sql = $mysqli->query("select * from cliente");
				while ($row = $sql->fetch_assoc()) {
					echo '<option value="'.$row['id'].'">'.$row['id'].'</option>';
				}
				?>
			</select><br><br>	
		<label style="margin-left:1%">NOMBRE DEL CLIENTE: <select style="margin-left:0.5%" id="nombre" name="nombre">
				<option value="0">Seleccione</option>
				<?php
				$sql = $mysqli->query("select nombre from cliente");
				while ($row = $sql->fetch_assoc()) {
					echo '<option value="'.$row['nombre'].'">'.$row['nombre'].'</option>';
				}
				?>
			</select><br><br>	  

        <input type="submit" name="Insertar">
		
	  
	  </form>
</body>
</html>