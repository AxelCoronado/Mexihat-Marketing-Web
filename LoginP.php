<?php
session_start();
require_once 'databaseP.php';

if(isset($_SESSION['user_id'])){
	header("Location: /Usuario.php");
}

if (!empty($_POST['nombre_C']) && !empty($_POST['contra_C'])) {
	$records = $conn->prepare('SELECT id_cliente, nombre_C, contra_C FROM Cliente WHERE nombre_C = :nombre_C');
	$records->bindParam(':nombre_C', $_POST['nombre_C']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	$message = '';

	if ($results != null) {
		if ($_POST['contra_C'] == $results['contra_C']) {
			$_SESSION['user_id'] = $results['id_cliente'];
			header("Location: /Usuario.php");
		} else {
			echo "<script>javascript:alert('Contraseña incorrecta');</script>";
		}
	} else {
		echo "<script>javascript:alert('Usuario no encontrado. Crea tu cuenta');</script>";
	}
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<link href="img/logos/logoPes.png" type="image/x-icon" rel="shortcut icon" />
	<title>Login</title>
	<link rel="stylesheet" href="css/EstiloLogin.css">
</head>

<body>
	<div class="login-box">
		<img class="avatar" src="img/logos/logologin.png" alt="">
		<h1>Ingrese aquí</h1>
		<form action="LoginP.php" method="POST">
			<!--USERNAME-->
			<label for="username">Usuario</label>
			<input name="nombre_C" type="text" placeholder="Ingrese nombre de usuario" required>
			<!--Password-->
			<label for="password">Contraseña</label>
			<input name="contra_C" type="password" placeholder="Ingrese contraseña" required>
			<!--Botón-->
			<input name= "sum" type="submit" value="Entrar"><br><br>
			<a href="RegistroP.php">No tengo una cuenta</a>
		</form>
	</div>
</body>

<?php if (!empty($message)) : ?>
	<p> <?= $message ?></p>
<?php endif; ?>

</html>
