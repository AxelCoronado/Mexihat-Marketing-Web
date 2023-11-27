<?php
session_start();
require 'databaseP.php';

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

$idMod='';
$cant='';
$fecha='';
$total=0;
$alcance='';

if (isset($_SESSION['user_id'])) {
	$id = $_SESSION['user_id'];
	$sql = "SELECT * FROM Pedido WHERE id_pedido=(SELECT MAX(id_pedido) FROM Pedido WHERE id_clienteP='$id');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	$query = "SELECT * FROM Cliente WHERE id_cliente='$id';";
	$query2 = "SELECT * FROM Cliente JOIN Pedido ON id_clienteP = id_cliente WHERE id_cliente='$id';";
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
  }
  
	if($results2 > 0){
		$idMod=$results2['id_modeloP'];
		$cant=$results2['cantidadPro_P'];
		$fecha=$results2['fecha_P'];
		$total=$results2['total'];
		$alcance=$results2['alcance_P'];
	}
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <link href="img/logos/logoPes.png" type="image/x-icon" rel="shortcut icon"/> 
    <meta charset="UTF-8">
    <title>Mi cuenta</title>
    <meta name="viewport" content="widht=device-widht, user-scalable=yes, initial-scale=1.0, maximun scale=3.0, minimun-scale=1.0"> 
    <link rel="stylesheet" href="css/Estilo.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:400,700|Pacifico" rel="stylesheet">
    <link href = "https://file.myfontastic.com/G6zCtZr4Fy7AfsRa6YYzdG/icons.css" rel = "stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="description" content="CSS3 Lightbox - A CSS-only lightbox" />
    <meta name="keywords" content="css3, lightbox, overlay, effect, images, thumbnails, navigate" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico"> 
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/style3.css" />

</head>
<body style="background-color:#4C0324;">
    <header class="main-header">
        <div class="container container--flex">
        <div class="logo-container column column--50">
            <h1 class="logo">MexiHat</h1>
            </div>
        <div class="main-header__contactInfo column column--50">
            <p class="main-header__contactInfo__phone">
            <span class="icon-phone">477 592 86 46</span>
            </p>                     
            <p class="main-header__contactInfo__address">
             <span class="icon-location"> León, Guanajuato.</span>
            </p>
            </div>
            </div>
     </header>
    <nav class="main-nav">
      <div class="container container--flex">
        <span class="icon-linea" id="btnmenu"></span>
          <ul class="menu" id="menu">
             <li class="menu__item"><a href="IndexP.php" class="menu__link">Inicio</a></li>
             <li class="menu__item"><a href="NosotrosP.php" class="menu__link">Nosotros</a></li>
             <li class="menu__item"><a href="CatalogoP.php" class="menu__link">Catálogo</a></li>
             <li class="menu__item"><a href="DiseñaP.php" class="menu__link">Diseña</a></li>
          </ul>

        <ul class="social-buttons" id="demo2">
  
            <li>
                <a href="https://www.facebook.com/MexiHat-Bonitos-sombreros-artesanales-102472884698486/" class="brandico-facebook"><img src="img/logos/looface.png"></a>
            </li>
            <li>
                <a href="https://instagram.com/mexihat?utm_medium=copy_link" class="brandico-instagram"><img src="img/logos/logo ins.png"></a>
            </li>
            <li>
                <a href="LoginP.php" class="brandico-usuario"><img src="img/logos/usuario.png"></a>
            </li>
        </ul>


      
      </div>  
    </nav> 
    <section class="Encabezado">
       <ul>
            <li><img src="img/encabezado/1.jpeg" alt="" class="sombrero__img"></li>
            <li><img src="img/encabezado/2.jpeg" alt="" class="sombrero__img"></li>
            <li><img src="img/encabezado/3.jpeg" alt="" class="sombrero__img"></li>
            <li><img src="img/encabezado/4.jpeg" alt="" class="sombrero__img"></li>
            <li><img src="img/encabezado/5.jpeg" alt="" class="sombrero__img"></li>
            <li><img src="img/encabezado/6.jpeg" alt="" class="sombrero__img"></li>
            <li><img src="img/encabezado/8.jpeg" alt="" class="sombrero__img"></li>
            <li><img src="img/encabezado/10.jpeg" alt="" class="sombrero__img"></li>
            <li><img src="img/encabezado/9.jpeg" alt="" class="sombrero__img"></li>
            <li><img src="img/encabezado/11.jpeg" alt="" class="sombrero__img"></li>
            <li><img src="img/encabezado/12.jpeg" alt="" class="sombrero__img"></li>
            <li><img src="img/encabezado/13.jpeg" alt="" class="sombrero__img"></li>
            <li><img src="img/encabezado/14.jpeg" alt="" class="sombrero__img"></li>
            <li><img src="img/encabezado/15.jpeg" alt="" class="sombrero__img"></li>
            <li><img src="img/encabezado/16.jpeg" alt="" class="sombrero__img"></li>
       </ul>
       <div class="Encabezado__content">Bonitos sombreros artesanales</div>
    </section>
     <main class="main">
        <section class="group group--color">
            <div class="container">
                 <h2 class="main__title">Mi cuenta</h2>
                <center><div class="login-box">
                    <h1>Mis datos</h1>
                        <form action="UsuarioP.php">
                            <label for="username">Nombre</label>
                            <input name="nombre" type="text" value="<?php echo $nombre." ".$apellido; ?>" placeholder="">
                            <!--Correo-->
                            <label for="correo">Correo</label>
                            <input name="correo" type="text" value="<?php echo $correo; ?>" placeholder="">
                            <!--País-->
                            <label for="pais">País</label>
                            <input name="pais" type="text" value="<?php echo $pais; ?>" placeholder="">
                            <!--Estado-->
                            <label for="estado">Estado</label>
                            <input name="estado" type="text" value="<?php echo $estado; ?>" placeholder="">
                            <!--calle-->
                            <label for="calle">Calle</label>
                            <input name="calle" type="text" value="<?php echo $calle; ?>" placeholder="">
                            <!--colonia-->
                            <label for="colonia">Colonia</label>
                            <input name="colonia" type="text" value="<?php echo $colonia; ?>" placeholder="">
                            <!--numero-->
                            <label for="numero">Núm</label>
                            <input name="numCasa" type="text" value="<?php echo $numCasa; ?>" placeholder="">
                            <!--cp-->
                            <label for="cp">Código Postal</label>
                            <input name="cp" type="text" value="<?php echo $codigo; ?>" placeholder="">
                            <!--telefono-->
                            <label for="telefono">Teléfono</label>
                            <input name="tel" type="text" value="<?php echo $tel; ?>" placeholder="">
                            <!--Botón
                            <input type="submit" value="Guardar cambios">-->
			    <a href='logoutP.php'> Cerrar Sesión </a>
                        </form>
                    </div></center>
            </div>
        </section>
        <section class="group main__about__description">
            <h3 class="column__title">Último Pedido</h3><br>
            <div class="container container--flex">
                <div class="column column--50">   
                  <img class="contenedor" src="img/catalogo/Mandala1.jpeg" alt="">   
                </div>
                <div class="column column--50">
                    <p class="column__txt">
                        <div class="pedidos-box">
                            <form action="UsuarioP.php">
                                <!--Id Modelo-->
                                <label for="idModelo">Id Modelo</label>
                                <input name="idModelo" type="text" value="<?php echo $idMod; ?>" placeholder=""><br><br>
                                <!--Fecha-->
                                <label for="fecha">Fecha</label>
                                <input name="fecha" type="text" value="<?php echo $fecha; ?>" placeholder=""><br><br>
                                <!--Cantidad-->
                                <label for="cantidad">Cantidad</label>
                                <input name="cantidad" type="text" value="<?php echo $cant; ?>" placeholder=""><br><br>
                                <!--Total-->
                                <label for="total">Total</label>
                                <input name="total" type="text" value="<?php echo $total; ?>" placeholder=""><br><br>
                                <!--Alcance-->
                                <label for="alcance">Tipo de envío</label>
                                <input name="alcance" type="text" value="<?php echo $alcance; ?>" placeholder=""><br><br>
                            </form>
                        </div>
                    </p>
                </div>
            </div>
         </section>
     </main>
      <footer class="main-footer">
        <div class="container container--flex">
            <div class="column column--33">
            <h2 class="column__title">¿Por que visitarnos?</h2>
            <p class="column__txt">Te ofrecemos una extensa variedad de lindos diseños de sombreros pintados a mano </p>   
            </div>
            <div class="column column--33">
            <h2 class="column__title">Contactanos</h2>   
            <p class="column__txt">Telefono: 477 592 86 46</p>    
            <p class="column__txt">mexihatleon@gmail.com</p>    
            </div>
            <div class="column column--33">
            <h2 class="column__title">Siguenos en nuestras redes sociales</h2>
            <p class="column__txt"><a href="https://www.facebook.com/MexiHat-Bonitos-sombreros-artesanales-102472884698486/" class="" > facebook</a></p>    
            <p class="column__txt"><a href="https://instagram.com/mexihat?utm_medium=copy_link" class="" > Instagram</a></p>  
            </div>
            <p class="copy">2020 Mexihat | Todos los derechos reservados</p>
           </div>
        </footer>
    <script src="js/menu.js"></script>
</body>
</html>
