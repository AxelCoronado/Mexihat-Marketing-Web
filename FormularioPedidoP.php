<?php
session_start();
require 'databaseP.php';
$Mod = '';
if(!empty($_GET['vari'])){
	$_SESSION['Mod']=$_GET['vari'];
	$Mod = $_GET['vari'];
}else{
	$Mod=$_SESSION['Mod'];
}

$id='';
$nombre='';
$apellido='';
$correo='';
$pais='';
$estado='';
$calle='';
$colonia='';
$numCasa='';
$codigo='';
$tel='';
$nomMode='';
date_default_timezone_set('America/Mexico_City');
$fecha=date('d/m/y');

$men=0;
$may=0;
$total=0;

if (isset($_SESSION['user_id'])) {
	$id = $_SESSION['user_id'];
	$query = "SELECT * FROM Cliente WHERE id_cliente=$id";
	$query2 = "SELECT * FROM Modelo WHERE id_modelo = '$Mod'";
	$stmt = $conn->prepare($query);
	$stmt2 = $conn->prepare($query2);
	$stmt->execute();
	$stmt2->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	$results2 = $stmt2->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
    $nombre=$results['nombre_C'];
	$apellido=$results['apellidos_C'];
	$correo=$results['correo_C'];
	$pais=$results['pais_C'];
	$estado=$results['estado_C'];
	$calle=$results['calle_C'];
	$colonia=$results['colonia_C'];
	$numCasa=$results['numCasa_C'];
	$codigo=$results['CP_C'];
	$tel=$results['telefono_C'];
	$nomMode=$results2['nombre_M'];
	$men=intval($results2['precioMen_M']);
	$may=intval($results2['precioMay_M']);
	}
	
	$envio='';
	$cantidad=0;
	$idp = 0;
	$idpi = 0;
	$sql3 = 'select max(id_pedido) AS id_Pedido from Pedido';
	$stmt3 = $conn->prepare($sql3);
	$stmt3->execute();
	$results3 = $stmt3->fetch(PDO::FETCH_ASSOC);
	$idp = intval($results3['id_Pedido']);
	$idpi = $idp + 1;
	
	if (!empty($_POST['cantidadPro_P']) && !empty($_POST['envio'])) {
		if($_POST['cantidadPro_P']>5){
			$total=$_POST['cantidadPro_P']*$may;
		}else{
			$total=$_POST['cantidadPro_P']*$men;
		}
	
		$cantidad=$_POST['cantidadPro_P'];
		$envio=$_POST['envio'];
		$sql4 = "Insert into Pedido (id_pedido, id_clienteP, id_modeloP, fecha_P, cantidadPro_P, total, alcance_P) values ($idpi, '$id', '$Mod', '$fecha', '$cantidad', '$total', '$envio')";
		$stmt4 = $conn->prepare($sql4);
		if ($stmt4->execute()) {
			echo "<script>
				alert('Pedido Realizado');
				window.location= 'CatalogoP.php'
			</script>";
		} else {
			echo "<script>javascript:alert('Error de creación, intentelo de nuevo.');</script>";
		}
	}
}
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<link href="img/logos/logoPes.png" type="image/x-icon" rel="shortcut icon"/> 
    	<title>Pedido</title>
    	<link rel="stylesheet" href="css/EstiloPedido.css">
    </head>
	<body>
		<div class="login-box">
			<img class="avatar" src="img/logos/pedido.jpg" alt="">
			<h1>Mi pedido</h1>
			<form action = "FormularioPedidoP.php" method="POST">
				<!--USERNAME-->
				<label for="username">Nombre</label>
				<input type="text" value="<?php echo $nombre." ".$apellido; ?>" placeholder="Ingrese su nombre">
				<!--Correo-->
				<label for="correo">Correo</label>
				<input type="text" value="<?php echo $correo; ?>" placeholder="Ingrese su correo">
				<!--Serie Modelos-->
				<label for="serie">Serie Modelo</label>
				<input type="text" value="<?php echo $Mod; ?>" placeholder="">
				<!--Modelos-->
				<label for="modelo">Modelo</label>
				<input type="text" value="<?php echo $nomMode; ?>" placeholder="">
				<!--Cantidad-->
				<label for="cantidad">Cantidad</label><br>
				<select name="cantidadPro_P" id="cantidad">
					<option value=1>1</option>
					<option value=2>2</option>
					<option value=3>3</option>
					<option value=4>4</option>
					<option value=5>5</option>
					<option value=6>6</option>
					<option value=7>7</option>
					<option value=8>8</option>
					<option value=9>9</option>
					<option value=10>10</option>
				</select><br>
				<!--Sexo-->
				<label for="envio"><br>Envío</label><br>
				<input type="radio" name="envio" value="León">León Gto
				<input type="radio" name="envio" value="Nacional">Nacional
				<input type="radio" name="envio" value="Internacional">Internacional
				<!--Fecha-->
				<label for="fecha">Fecha del Pedido</label>
				<input type="text" value="<?php echo $fecha; ?>" placeholder="">
				<!--País-->
				<label for="pais">País</label>
				<input type="text" value="<?php echo $pais; ?>" placeholder="Ingrese nombre del país">
				<!--Estado-->
				<label for="estado">Estado</label>
				<input type="text" value="<?php echo $estado; ?>" placeholder="Ingrese nombre del estado">
				<!--calle-->
				<label for="calle">Calle</label>
				<input type="text" value="<?php echo $calle; ?>" placeholder="Ingrese nombre de la calle">
				<!--colonia-->
				<label for="colonia">Colonia</label>
				<input type="text" value="<?php echo $colonia; ?>" placeholder="Ingrese nombre de la colonia">
				<!--numero-->
				<label for="numero">Núm</label>
				<input type="text" value="<?php echo $numCasa; ?>" placeholder="Ingrese número de casa">
				<!--cp-->
				<label for="cp">Código Postal</label>
				<input type="text" value="<?php echo $codigo; ?>" placeholder="Ingrese código postal">
				<!--telefono-->
				<label for="telefono">Teléfono</label>
				<input type="text" value="<?php echo $tel; ?>" placeholder="(ejem. 4771234567)">
				<!--Botón-->
				<input name= "sum" type="submit" value="Confirmar Pedido"><br><br>
			</form>
		</div>
	</body>    
</html>