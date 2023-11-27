<?php
require_once 'databaseP.php';

$nombre = '';
$apellido = '';
$correo = '';
$contra = '';
$edad = 0;
$sexo = '';
$pais = '';
$estado = '';
$calle = '';
$colonia = '';
$numcasa = 0;
$cp = 0;
$tel = '';

$idc = 0;
$idci = 0;
$sql1 = "SELECT MAX(id_cliente) FROM Cliente";
$stmt = $conn->prepare($sql1);
$stmt->execute();
$results = $stmt->fetch(PDO::FETCH_ASSOC);
$idc = intval($results['id_Cliente']);
$idci = $idc + 1;

if (!empty($_POST['nombre_C']) && !empty($_POST['contra_C'])) {
	$nombre=$_POST['nombre_C'];
	$apellido=$_POST['apellidos_C'];
	$correo=$_POST['correo_C'];
	$contra=$_POST['contra_C'];
	$edad=$_POST['edad_C'];
	$sexo=$_POST['sexo_C'];
	$pais=$_POST['pais_C'];
	$estado=$_POST['estado_C'];
	$calle=$_POST['calle_C'];
	$colonia=$_POST['colonia_C'];
	$numcasa=$_POST['numCasa_C'];
	$cp=$_POST['CP_C'];
	$tel=$_POST['telefono_C'];
	$sql = "INSERT INTO Cliente (id_cliente, nombre_C, apellidos_C, correo_C, contra_C, edad_C, sexo_C, pais_C, estado_C, calle_C, colonia_C, numCasa_C, CP_C, telefono_C) VALUES ($idci, '$nombre', '$apellido', '$correo', '$contra', $edad, '$sexo', '$pais', '$estado', '$calle', '$colonia', $numcasa, $cp, '$tel')";
	$stmt2 = $conn->prepare($sql);
	
	if($_POST['contra_C']==$_POST['confirmPass']){
		if ($stmt2->execute()) {
			echo "<script>
				alert('Usuario Creado Exitosamente');
    				window.location= 'LoginP.php';
			</script>";
		} else {
			echo "<script>alert('Error de creación, intentelo de nuevo.');</script>";
		}
	}else{
		echo "<script>alert('Las contraseñas no coinciden');</script>";
	}
}
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<link href="img/logos/logoPes.png" type="image/x-icon" rel="shortcut icon"/> 
    	<title>Registro</title>
    	<link rel="stylesheet" href="css/EstiloRegistro.css">
    </head>
	<body>
		<div class="login-box">
			<img class="avatar" src="img/logos/logologin.png" alt="">
			<h1>Registrarse ahora</h1>
			<form action="RegistroP.php" Method="POST">
				<!--USERNAME-->
				<label for="username">Nombre de Usuario</label>
				<input name="nombre_C" type="text" placeholder="Ingrese nombre de usuario" required>
				
				<label for="apellidos">Apellidos</label>
				<input name="apellidos_C" type="text"  placeholder="Ingrese apellidos" required>
				
				<!--Correo-->
				<label for="correo">Correo</label>
				<input name="correo_C" type="text" placeholder="Ingrese su correo" required>
				<!--Password-->
				<label for="password">Contraseña</label>
				<input name="contra_C" type="password" placeholder="Ingrese contraseña" required>
				<!--Password-->
				<label for="password">Confirmar contraseña</label>
				<input name="confirmPass" type="password" placeholder="Ingrese contraseña" required>
				<!--Edad-->
				<label for="edad">Edad</label><br>
				<select name="edad_C" id="edad_C">
					<option value=16>16</option>
					<option value=17>17</option>
					<option value=18>18</option>
					<option value=19>19</option>
					<option value=20>20</option>
					<option value=21>21</option>
					<option value=22>22</option>
					<option value=23>23</option>
					<option value=24>24</option>
					<option value=25>25</option>
					<option value=26>26</option>
					<option value=27>27</option>
					<option value=28>28</option>
					<option value=29>29</option>
					<option value=30>30</option>
				</select>
				<!--Sexo-->
				<label for="sexo"><br>Sexo</label><br>
				<select name="sexo_C" id="sexo_C">
					<option value="M">M</option>
					<option value="H">H</option>
				</select>
				
				<br><br><label for="pais">Pais</label>
				<input name="pais_C" type="text" placeholder="Ingrese nombre de usuario" required>
				
				<label for="estado">Estado</label>
				<input name="estado_C" type="text" placeholder="Ingrese nombre de usuario" required>
				
				<!--calle-->
				<label for="calle"><br>Calle</label>
				<input name="calle_C" type="text" placeholder="Ingrese nombre de la calle" required>
				<!--colonia-->
				<label for="colonia">Colonia</label>
				<input name="colonia_C" type="text" placeholder="Ingrese nombre de la colonia" required>
				<!--numero-->
				<label for="numero">Núm</label>
				<input name="numCasa_C" type="text" placeholder="Ingrese número de casa" required>
				<!--cp-->
				<label for="cp">Código Postal</label>
				<input name="CP_C" type="text" placeholder="Ingrese código postal" required>
				<!--telefono-->
				<label for="telefono">Teléfono</label>
				<input name="telefono_C" type="text" placeholder="(ejem. 4771234567)" required>
				<!--Botón-->
				<center>
				<input name= "sum" type="submit" value="Registrarse"><br><br>
				<!--<button type="button" onclick="javascript:void(window.open('LoginP.php'));" title="">Registrarse</button><br><br>-->
				</center>
			</form>
		</div>
	</body>    
</html>
