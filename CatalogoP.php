<?php
session_start();
require_once 'databaseP.php';

if(isset($_SESSION['user_id'])){
	$query = "SELECT * FROM Modelo WHERE id_modelo = 'Mo003'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
	$id=$results['id_modelo'];
    $n=$results['nombre_M'];
	$pMay=$results['precioMay_M'];
	$pMen=$results['precioMen_M'];
	}
	
	$query = "SELECT * FROM Modelo WHERE id_modelo = 'Mo004'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
	$id4=$results['id_modelo'];
    $n4=$results['nombre_M'];
	$pMay4=$results['precioMay_M'];
	$pMen4=$results['precioMen_M'];
	}
	
	$query = "SELECT * FROM Modelo WHERE id_modelo = 'Mo005'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
	$id5=$results['id_modelo'];
    $n5=$results['nombre_M'];
	$pMay5=$results['precioMay_M'];
	$pMen5=$results['precioMen_M'];
	}
	
	$query = "SELECT * FROM Modelo WHERE id_modelo = 'Mo006'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
	$id6=$results['id_modelo'];
    $n6=$results['nombre_M'];
	$pMay6=$results['precioMay_M'];
	$pMen6=$results['precioMen_M'];
	}
	
	$query = "SELECT * FROM Modelo WHERE id_modelo = 'Mo007'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
	$id7=$results['id_modelo'];
    $n7=$results['nombre_M'];
	$pMay7=$results['precioMay_M'];
	$pMen7=$results['precioMen_M'];
	}
	
	$query = "SELECT * FROM Modelo WHERE id_modelo = 'Mo008'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
	$id8=$results['id_modelo'];
    $n8=$results['nombre_M'];
	$pMay8=$results['precioMay_M'];
	$pMen8=$results['precioMen_M'];
	}
	
	$query = "SELECT * FROM Modelo WHERE id_modelo = 'Mo001'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
	$id9=$results['id_modelo'];
    $n9=$results['nombre_M'];
	$pMay9=$results['precioMay_M'];
	$pMen9=$results['precioMen_M'];
	}
	
	$query = "SELECT * FROM Modelo WHERE id_modelo = 'Mo009'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
	$id10=$results['id_modelo'];
    $n10=$results['nombre_M'];
	$pMay10=$results['precioMay_M'];
	$pMen10=$results['precioMen_M'];
	}
	
	$query = "SELECT * FROM Modelo WHERE id_modelo = 'Mo010'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
	$id11=$results['id_modelo'];
    $n11=$results['nombre_M'];
	$pMay11=$results['precioMay_M'];
	$pMen11=$results['precioMen_M'];
	}
	
	$query = "SELECT * FROM Modelo WHERE id_modelo = 'Mo011'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
	$id12=$results['id_modelo'];
    $n12=$results['nombre_M'];
	$pMay12=$results['precioMay_M'];
	$pMen12=$results['precioMen_M'];
	}
	
	$query = "SELECT * FROM Modelo WHERE id_modelo = 'Mo012'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
	$id13=$results['id_modelo'];
    $n13=$results['nombre_M'];
	$pMay13=$results['precioMay_M'];
	$pMen13=$results['precioMen_M'];
	}
	
	$query = "SELECT * FROM Modelo WHERE id_modelo = 'Mo013'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
	$id14=$results['id_modelo'];
    $n14=$results['nombre_M'];
	$pMay14=$results['precioMay_M'];
	$pMen14=$results['precioMen_M'];
	}
	
	$query = "SELECT * FROM Modelo WHERE id_modelo = 'Mo014'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
	$id15=$results['id_modelo'];
    $n15=$results['nombre_M'];
	$pMay15=$results['precioMay_M'];
	$pMen15=$results['precioMen_M'];
	}
	
	$query = "SELECT * FROM Modelo WHERE id_modelo = 'Mo015'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
	$id16=$results['id_modelo'];
    $n16=$results['nombre_M'];
	$pMay16=$results['precioMay_M'];
	$pMen16=$results['precioMen_M'];
	}
	
	$query = "SELECT * FROM Modelo WHERE id_modelo = 'Mo016'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
	$id17=$results['id_modelo'];
    $n17=$results['nombre_M'];
	$pMay17=$results['precioMay_M'];
	$pMen17=$results['precioMen_M'];
	}
	
	$query = "SELECT * FROM Modelo WHERE id_modelo = 'Mo017'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
	$id18=$results['id_modelo'];
    $n18=$results['nombre_M'];
	$pMay18=$results['precioMay_M'];
	$pMen18=$results['precioMen_M'];
	}
	
	$query = "SELECT * FROM Modelo WHERE id_modelo = 'Mo018'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
	$id19=$results['id_modelo'];
    $n19=$results['nombre_M'];
	$pMay19=$results['precioMay_M'];
	$pMen19=$results['precioMen_M'];
	}
	
	$query = "SELECT * FROM Modelo WHERE id_modelo = 'Mo019'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
	$id20=$results['id_modelo'];
    $n20=$results['nombre_M'];
	$pMay20=$results['precioMay_M'];
	$pMen20=$results['precioMen_M'];
	}
	
	$query = "SELECT * FROM Modelo WHERE id_modelo = 'Mo020'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
	$id21=$results['id_modelo'];
    $n21=$results['nombre_M'];
	$pMay21=$results['precioMay_M'];
	$pMen21=$results['precioMen_M'];
	}
	
	$query = "SELECT * FROM Modelo WHERE id_modelo = 'Mo021'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
	$id22=$results['id_modelo'];
    $n22=$results['nombre_M'];
	$pMay22=$results['precioMay_M'];
	$pMen22=$results['precioMen_M'];
	}
	
	$query = "SELECT * FROM Modelo WHERE id_modelo = 'Mo022'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
	$id23=$results['id_modelo'];
    $n23=$results['nombre_M'];
	$pMay23=$results['precioMay_M'];
	$pMen23=$results['precioMen_M'];
	}
	
	$query = "SELECT * FROM Modelo WHERE id_modelo = 'Mo023'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
	$id24=$results['id_modelo'];
    $n24=$results['nombre_M'];
	$pMay24=$results['precioMay_M'];
	$pMen24=$results['precioMen_M'];
	}
	
	$query = "SELECT * FROM Modelo WHERE id_modelo = 'Mo024'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
	$id25=$results['id_modelo'];
    $n25=$results['nombre_M'];
	$pMay25=$results['precioMay_M'];
	$pMen25=$results['precioMen_M'];
	}
	
	$query = "SELECT * FROM Modelo WHERE id_modelo = 'Mo025'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
	$id26=$results['id_modelo'];
    $n26=$results['nombre_M'];
	$pMay26=$results['precioMay_M'];
	$pMen26=$results['precioMen_M'];
	}
	
	$query = "SELECT * FROM Modelo WHERE id_modelo = 'Mo026'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
	$id27=$results['id_modelo'];
    $n27=$results['nombre_M'];
	$pMay27=$results['precioMay_M'];
	$pMen27=$results['precioMen_M'];
	}
	
	$query = "SELECT * FROM Modelo WHERE id_modelo = 'Mo027'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
	$id28=$results['id_modelo'];
    $n28=$results['nombre_M'];
	$pMay28=$results['precioMay_M'];
	$pMen28=$results['precioMen_M'];
	}
	
	$query = "SELECT * FROM Modelo WHERE id_modelo = 'Mo028'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
	$id29=$results['id_modelo'];
    $n29=$results['nombre_M'];
	$pMay29=$results['precioMay_M'];
	$pMen29=$results['precioMen_M'];
	}
	
	$query = "SELECT * FROM Modelo WHERE id_modelo = 'Mo029'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
	$id30=$results['id_modelo'];
    $n30=$results['nombre_M'];
	$pMay30=$results['precioMay_M'];
	$pMen30=$results['precioMen_M'];
	}
	
	$query = "SELECT * FROM Modelo WHERE id_modelo = 'Mo030'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
	$id31=$results['id_modelo'];
    $n31=$results['nombre_M'];
	$pMay31=$results['precioMay_M'];
	$pMen31=$results['precioMen_M'];
	}
	
	$query = "SELECT * FROM Modelo WHERE id_modelo = 'Mo031'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
	$id32=$results['id_modelo'];
    $n32=$results['nombre_M'];
	$pMay32=$results['precioMay_M'];
	$pMen32=$results['precioMen_M'];
	}
	
	$query = "SELECT * FROM Modelo WHERE id_modelo = 'Mo032'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
	$id33=$results['id_modelo'];
    $n33=$results['nombre_M'];
	$pMay33=$results['precioMay_M'];
	$pMen33=$results['precioMen_M'];
	}
	
	$query = "SELECT * FROM Modelo WHERE id_modelo = 'Mo033'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
	$id34=$results['id_modelo'];
    $n34=$results['nombre_M'];
	$pMay34=$results['precioMay_M'];
	$pMen34=$results['precioMen_M'];
	}
	
	$query = "SELECT * FROM Modelo WHERE id_modelo = 'Mo034'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
	$id35=$results['id_modelo'];
    $n35=$results['nombre_M'];
	$pMay35=$results['precioMay_M'];
	$pMen35=$results['precioMen_M'];
	}
	
	$query = "SELECT * FROM Modelo WHERE id_modelo = 'Mo035'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
	$id36=$results['id_modelo'];
    $n36=$results['nombre_M'];
	$pMay36=$results['precioMay_M'];
	$pMen36=$results['precioMen_M'];
	}
	
	$query = "SELECT * FROM Modelo WHERE id_modelo = 'Mo036'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
	$id37=$results['id_modelo'];
    $n37=$results['nombre_M'];
	$pMay37=$results['precioMay_M'];
	$pMen37=$results['precioMen_M'];
	}
	
	$query = "SELECT * FROM Modelo WHERE id_modelo = 'Mo037'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
	$id38=$results['id_modelo'];
    $n38=$results['nombre_M'];
	$pMay38=$results['precioMay_M'];
	$pMen38=$results['precioMen_M'];
	}
	
	$query = "SELECT * FROM Modelo WHERE id_modelo = 'Mo038'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
	$id39=$results['id_modelo'];
    $n39=$results['nombre_M'];
	$pMay39=$results['precioMay_M'];
	$pMen39=$results['precioMen_M'];
	}
	
	$query = "SELECT * FROM Modelo WHERE id_modelo = 'Mo039'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
	$id40=$results['id_modelo'];
    $n40=$results['nombre_M'];
	$pMay40=$results['precioMay_M'];
	$pMen40=$results['precioMen_M'];
	}
	
	$query = "SELECT * FROM Modelo WHERE id_modelo = 'Mo040'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
	$id41=$results['id_modelo'];
    $n41=$results['nombre_M'];
	$pMay41=$results['precioMay_M'];
	$pMen41=$results['precioMen_M'];
	}
	
	$query = "SELECT * FROM Modelo WHERE id_modelo = 'Mo041'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
	$id42=$results['id_modelo'];
    $n42=$results['nombre_M'];
	$pMay42=$results['precioMay_M'];
	$pMen42=$results['precioMen_M'];
	}
	
	$query = "SELECT * FROM Modelo WHERE id_modelo = 'Mo042'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
	$id43=$results['id_modelo'];
    $n43=$results['nombre_M'];
	$pMay43=$results['precioMay_M'];
	$pMen43=$results['precioMen_M'];
	}
	
	$query = "SELECT * FROM Modelo WHERE id_modelo = 'Mo043'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
	$id44=$results['id_modelo'];
    $n44=$results['nombre_M'];
	$pMay44=$results['precioMay_M'];
	$pMen44=$results['precioMen_M'];
	}
	
	$query = "SELECT * FROM Modelo WHERE id_modelo = 'Mo044'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
	$id45=$results['id_modelo'];
    $n45=$results['nombre_M'];
	$pMay45=$results['precioMay_M'];
	$pMen45=$results['precioMen_M'];
	}
	
	$query = "SELECT * FROM Modelo WHERE id_modelo = 'Mo045'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
	$id46=$results['id_modelo'];
    $n46=$results['nombre_M'];
	$pMay46=$results['precioMay_M'];
	$pMen46=$results['precioMen_M'];
	}
	
	$query = "SELECT * FROM Modelo WHERE id_modelo = 'Mo046'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ($results > 0) {
	$id47=$results['id_modelo'];
    $n47=$results['nombre_M'];
	$pMay47=$results['precioMay_M'];
	$pMen47=$results['precioMen_M'];
	

	}if(isset($_SESSION['Nombre'])){
		header("Location: /FormularioPedidoP.php");
	}
}
else{
	echo "<script>
                alert('Debe de loguearse antes de entrar al Catálogo');
                window.location= 'LoginP.php';
		</script>";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
   <link href="img/logos/logoPes.png" type="image/x-icon" rel="shortcut icon"/> 
   <meta charset="UTF-8">
    <title>Mexihat</title>
    <meta name="viewport" content="widht=device-widht, user-scalable=yes, initial-scale=1.0, maximun scale=3.0, minimun-scale=1.0">
    
    <link rel="stylesheet" href="css/Estilo.css">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:400,700|Pacifico" rel="stylesheet">
    
    <link href = "https://file.myfontastic.com/G6zCtZr4Fy7AfsRa6YYzdG/icons.css" rel = "stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

     <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>CSS3 Lightbox</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="CSS3 Lightbox - A CSS-only lightbox" />
        <meta name="keywords" content="css3, lightbox, overlay, effect, images, thumbnails, navigate" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 

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
             <li class="menu__item"><a href="CatalogoP.php" class="menu__link menu__link--select">Catálogo</a></li>
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
                <h2 class="main__title">Catálogo</h2>
            </div>
        </section>
        <section>  
            <div class="container container--flex">  
               
                  <ul class="lb-album">
                    <li>
                        <a href="#image-1">
                            <img src="img/catalogo/Animal1.png" id="Animal" alt="image01">
                            <span>Fénix</span>
                        </a>
                        <div class="lb-overlay" id="image-1">
                            <center><div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><img src="img/catalogo/Animal1.png"></div>
                                    <div class="swiper-slide"><img src="img/catalogo/Animal2.png"></div>   
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                            <!-- Swiper JS -->
                            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
                            <!-- Initialize Swiper -->
                            <script>
                                var swiper = new Swiper(".mySwiper", {
                                    navigation: {
                                      nextEl: ".swiper-button-next",
                                      prevEl: ".swiper-button-prev",
                                    },
                                });
                            </script></center>
                            <div>
                                <h3>Precio <span><?php echo $n.' '.$id;?></span></h3>
                                <p>Menudeo $<?php echo $pMen;?> 
                                Mayoreo $<?php echo $pMay;?></p>
                                <a href="#image-2" class="lb-next">Next</a>
								<a href="FormularioPedidoP.php?vari=<?php echo $id;?>" class="lb-comprar">Comprar</a>
                            </div>
                             </center>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-2">
                            <img src="img/catalogo/Pluma1.png" id="Pluma" alt="image02">
                            <span><?php echo $n4;?></span>
                        </a>
                        <div class="lb-overlay" id="image-2">
                            <center><img src="img/catalogo/Pluma1.png" alt="image02"/></center>
                            <div>                           
                                <h3>Precio <span><?php echo $n4.' '.$id4;?></span></h3>
                                <p>Menudeo $<?php echo $pMen4;?>
                                Mayoreo $<?php echo $pMay4;?></p>
                                <a href="#image-1" class="lb-prev">Prev</a>
                                <a href="#image-3" class="lb-next">Next</a>
                                <a href="FormularioPedidoP.php?vari=<?php echo $id4;?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-3">
                            <img src="img/catalogo/Colibri1.png" id="Colibri" alt="image03">
                            <span>Colibrí</span>
                        </a>
                        <div class="lb-overlay" id="image-3">
                            <center><img src="img/catalogo/Colibri1.png" alt="image03"/></center>
                            <div>
                                <h3>Precio <span><?php echo $n5.' '.$id5;?></span></h3>
                                <p>Menudeo $<?php echo $pMen5;?> 
                                Mayoreo $<?php echo $pMay5;?></p>
                                <a href="#image-2" class="lb-prev">Prev</a>
                                <a href="#image-4" class="lb-next">Next</a>
                                <a href="FormularioPedidoP.php?vari=<?php echo $id5;?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-4">
                            <img src="img/catalogo/Especial1.png" id="Especial" alt="image04">
                            <span><?php echo $n6;?></span>
                        </a>
                        <div class="lb-overlay" id="image-4">
                            <center><div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><img src="img/catalogo/Especial1.png"></div>
                                    <div class="swiper-slide"><img src="img/catalogo/Especial2.png"></div>
                                    <div class="swiper-slide"><img src="img/catalogo/Especial3.png"></div>   
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                            <!-- Swiper JS -->
                            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
                            <!-- Initialize Swiper -->
                            <script>
                                var swiper = new Swiper(".mySwiper", {
                                    navigation: {
                                      nextEl: ".swiper-button-next",
                                      prevEl: ".swiper-button-prev",
                                    },
                                });
                            </script></center>
                            <div>                           
                                <h3>Precio <span><?php echo $n6.' '.$id6;?></span></h3>
                                <p>Menudeo $<?php echo $pMen6;?>
                                Mayoreo $<?php echo $pMay6;?></p>
                                <a href="#image-3" class="lb-prev">Prev</a>
                                <a href="#image-5" class="lb-next">Next</a>
                                <a href="FormularioPedidoP.php?vari=<?php echo $id6;?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-5">
                            <img src="img/catalogo/Flor1.png" id="Flor" alt="image05">
                            <span><?php echo $n7;?></span>
                        </a>
                        <div class="lb-overlay" id="image-5">
                            <center><div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><img src="img/catalogo/Flor1.png"></div>
                                    <div class="swiper-slide"><img src="img/catalogo/Flor14.png"></div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                            <!-- Swiper JS -->
                            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
                            <!-- Initialize Swiper -->
                            <script>
                                var swiper = new Swiper(".mySwiper", {
                                    navigation: {
                                      nextEl: ".swiper-button-next",
                                      prevEl: ".swiper-button-prev",
                                    },
                                });
                            </script></center>
                            <div>
                                <h3>Precio <span><?php echo $n7.' '.$id7;?></span></h3>
                                <p>Menudeo $<?php echo $pMen7;?>
                                Mayoreo $<?php echo $pMay7;?></p>
                                <a href="#image-4" class="lb-prev">Prev</a>
                                <a href="#image-6" class="lb-next">Next</a>
                                <a href="FormularioPedidoP.php?vari=<?php echo $id7;?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-6">
                            <img src="img/catalogo/Mandala2.png" id="Flor" alt="image06">
                            <span><?php echo $n8;?></span>
                        </a>
                        <div class="lb-overlay" id="image-6">
                            <center><div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><img src="img/catalogo/Mandala2.png"></div>
                                    <div class="swiper-slide"><img src="img/catalogo/Mandala11.png"></div>
                                    <div class="swiper-slide"><img src="img/catalogo/Mandala12.png"></div>   
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                            <!-- Swiper JS -->
                            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
                            <!-- Initialize Swiper -->
                            <script>
                                var swiper = new Swiper(".mySwiper", {
                                    navigation: {
                                      nextEl: ".swiper-button-next",
                                      prevEl: ".swiper-button-prev",
                                    },
                                });
                            </script></center>
                            <div>                           
                                <h3>Precio <span><?php echo $n8.' '.$id8;?></span></h3>
                                <p>Menudeo $<?php echo $pMen8;?>
                                Mayoreo $<?php echo $pMay8;?></p>
                                <a href="#image-5" class="lb-prev">Prev</a>
                                <a href="#image-7" class="lb-next">Next</a>
                                <a href="FormularioPedidoP.php?vari=<?php echo $id8;?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-7">
                            <img src="img/catalogo/Mariposa1.png" id="Mariposa" alt="image07">
                            <span><?php echo $n9;?></span>
                        </a>
                        <div class="lb-overlay" id="image-7">
                            <center><img src="img/catalogo/Mariposa1.png" alt="image07"/></center>
                            <div>
                                <h3>Precio <span><?php echo $n9.' '.$id9;?></span></h3>
                                <p>Menudeo $<?php echo $pMen9;?> 
                                Mayoreo $<?php echo $pMay9;?></p>
                                <a href="#image-6" class="lb-prev">Prev</a>
                                <a href="#image-8" class="lb-next">Next</a>
                                <a href="FormularioPedidoP.php?vari=<?php echo $id9;?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-8">
                            <img src="img/catalogo/Vaquero1.png" id="Vaquero" alt="image08">
                            <span>Rodeo</span>
                        </a>
                        <div class="lb-overlay" id="image-8">
                            <center><img src="img/catalogo/Vaquero1.png" alt="image08"/></center>
                            <div>                           
                                <h3>Precio <span><?php echo $n10.' '.$id10;?></span></h3>
                                <p>Menudeo $<?php echo $pMen10;?> 
                                Mayoreo $<?php echo $pMay10;?> </p>
                                <a href="#image-7" class="lb-prev">Prev</a>
                                <a href="#image-9" class="lb-next">Next</a>
                                <a href="FormularioPedidoP.php?vari=<?php echo $id10;?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-9">
                            <img src="img/catalogo/Animal3.png" id="Animal" alt="image09">
                            <span><?php echo $n11;?></span>
                        </a>
                        <div class="lb-overlay" id="image-9">
                            <center><img src="img/catalogo/Animal3.png" alt="image09"/></center>
                            <div>
                                <h3>Precio <span><?php echo $n11.' '.$id11;?></span></h3>
                                <p>Menudeo $<?php echo $pMen11;?> 
                                Mayoreo $<?php echo $pMay11;?></p>
                                <a href="#image-8" class="lb-prev">Prev</a>
                                <a href="#image-10" class="lb-next">Next</a>
                                <a href="FormularioPedidoP.php?vari=<?php echo $id11;?>" class="lb-comprar">Comprar</a>
                            </div>
                             </center>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-10">
                            <img src="img/catalogo/Pluma2.png" id="Pluma" alt="image10">
                            <span>Pluma</span>
                        </a>
                        <div class="lb-overlay" id="image-10">
                            <center><img src="img/catalogo/Pluma2.png" alt="image10"/></center>
                            <div>                           
                                <h3>Precio <span><?php echo $n12.' '.$id12;?></span></h3>
                                <p>Menudeo $<?php echo $pMen12;?>
                                Mayoreo $<?php echo $pMay12;?></p>
                                <a href="#image-9" class="lb-prev">Prev</a>
                                <a href="#image-11" class="lb-next">Next</a>
                                <a href="FormularioPedidoP.php?vari=<?php echo $id12;?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-11">
                            <img src="img/catalogo/Colibri2.png" id="Colibri" alt="image11">
                            <span><?php echo $n13;?></span>
                        </a>
                        <div class="lb-overlay" id="image-11">
                            <center><img src="img/catalogo/Colibri2.png" alt="image11"/></center>
                            <div>
                                <h3>Precio <span><?php echo $n13.' '.$id13;?></span></h3>
                                <p>Menudeo $<?php echo $pMen13;?> 
                                Mayoreo $<?php echo $pMay13;?></p>
                                <a href="#image-10" class="lb-prev">Prev</a>
                                <a href="#image-12" class="lb-next">Next</a>
                                <a href="FormularioPedidoP.php?vari=<?php echo $id13;?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-12">
                            <img src="img/catalogo/Especial4.png" id="Especial" alt="image12">
                            <span>Quetzalcoatl</span>
                        </a>
                        <div class="lb-overlay" id="image-12">
                            <center><div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><img src="img/catalogo/Especial4.png"></div>
                                    <div class="swiper-slide"><img src="img/catalogo/Especial5.png"></div>
                                    <div class="swiper-slide"><img src="img/catalogo/Especial6.png"></div>
                                    <div class="swiper-slide"><img src="img/catalogo/Especial7.png"></div>   
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                            <!-- Swiper JS -->
                            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
                            <!-- Initialize Swiper -->
                            <script>
                                var swiper = new Swiper(".mySwiper", {
                                    navigation: {
                                      nextEl: ".swiper-button-next",
                                      prevEl: ".swiper-button-prev",
                                    },
                                });
                            </script></center>
                            <div>                           
                                <h3>Precio <span><?php echo $n14.' '.$id14;?></span></h3>
                                <p>Menudeo $<?php echo $pMen14;?>
                                Mayoreo $<?php echo $pMay14;?></p>
                                <a href="#image-11" class="lb-prev">Prev</a>
                                <a href="#image-13" class="lb-next">Next</a>
                                <a href="FormularioPedidoP.php?vari=<?php echo $id14;?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-13">
                            <img src="img/catalogo/Flor2.png" id="Flor" alt="image13">
                            <span>Flor</span>
                        </a>
                        <div class="lb-overlay" id="image-13">
                            <center><img src="img/catalogo/Flor2.png" alt="image13"/></center>
                            <div>
                                <h3>Precio <span><?php echo $n15.' '.$id15;?></span></h3>
                                <p>Menudeo $<?php echo $pMen15;?> 
                                Mayoreo $<?php echo $pMay15;?></p>
                                <a href="#image-12" class="lb-prev">Prev</a>
                                <a href="#image-14" class="lb-next">Next</a>
                                <a href="FormularioPedidoP.php?vari=<?php echo $id15;?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-14">
                            <img src="img/catalogo/Mandala3.png" id="Mandala" alt="image14">
                            <span>Mandala</span>
                        </a>
                        <div class="lb-overlay" id="image-14">
                            <center><div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><img src="img/catalogo/Mandala3.png"></div>
                                    <div class="swiper-slide"><img src="img/catalogo/Mandala9.png"></div>
                                    <div class="swiper-slide"><img src="img/catalogo/Mandala10.png"></div>   
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                            <!-- Swiper JS -->
                            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
                            <!-- Initialize Swiper -->
                            <script>
                                var swiper = new Swiper(".mySwiper", {
                                    navigation: {
                                      nextEl: ".swiper-button-next",
                                      prevEl: ".swiper-button-prev",
                                    },
                                });
                            </script></center>
                            <div>                           
                                <h3>Precio <span><?php echo $n16.' '.$id16;?></span></h3>
                                <p>Menudeo $<?php echo $pMen16;?>
                                Mayoreo $<?php echo $pMay16;?></p>
                                <a href="#image-13" class="lb-prev">Prev</a>
                                <a href="#image-15" class="lb-next">Next</a>
                                <a href="FormularioPedidoP.php?vari=<?php echo $id16;?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-15">
                            <img src="img/catalogo/Mariposa2.png" id="Mariposa" alt="image15">
                            <span>Mariposa</span>
                        </a>
                        <div class="lb-overlay" id="image-15">
                            <center><img src="img/catalogo/Mariposa2.png" alt="image015"/></center>
                            <div>
                                <h3>Precio <span><?php echo $n17.' '.$id17;?></span></h3>
                                <p>Menudeo $<?php echo $pMen17;?> 
                                Mayoreo $<?php echo $pMay17;?></p>
                                <a href="#image-14" class="lb-prev">Prev</a>
                                <a href="#image-16" class="lb-next">Next</a>
                                <a href="FormularioPedidoP.php?vari=<?php echo $id17;?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-16">
                            <img src="img/catalogo/Vaquero2.png" id="Vaquero" alt="image16">
                            <span>Rodeo</span>
                        </a>
                        <div class="lb-overlay" id="image-16">
                            <center><img src="img/catalogo/Vaquero2.png" alt="image16"/></center>
                            <div>                           
                                <h3>Precio <span><?php echo $n18.' '.$id18;?></span></h3>
                                <p>Menudeo $<?php echo $pMen18;?>
                                Mayoreo $<?php echo $pMay18;?></p>
                                <a href="#image-15" class="lb-prev">Prev</a>
                                <a href="#image-17" class="lb-next">Next</a>
                                <a href="FormularioPedidoP.php?vari=<?php echo $id18;?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-17">
                            <img src="img/catalogo/Animal4.png" id="Animal" alt="image17">
                            <span>Xolo</span>
                        </a>
                        <div class="lb-overlay" id="image-17">
                            <center><img src="img/catalogo/Animal4.png" alt="image17"/></center>
                            <div>                           
                                <h3>Precio <span><?php echo $n19.' '.$id19;?></span></h3>
                                <p>Menudeo $<?php echo $pMen19;?>
                                Mayoreo $<?php echo $pMay19;?></p>
                                <a href="#image-16" class="lb-prev">Prev</a>
                                <a href="#image-18" class="lb-next">Next</a>
                                <a href="FormularioPedidoP.php?vari=<?php echo $id19;?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-18">
                            <img src="img/catalogo/Colibri3.png" id="Colibri" alt="image18">
                            <span>Colibrí</span>
                        </a>
                        <div class="lb-overlay" id="image-18">
                            <center><div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><img src="img/catalogo/Colibri3.png"></div>
                                    <div class="swiper-slide"><img src="img/catalogo/Colibri6.png"></div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                            <!-- Swiper JS -->
                            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
                            <!-- Initialize Swiper -->
                            <script>
                                var swiper = new Swiper(".mySwiper", {
                                    navigation: {
                                      nextEl: ".swiper-button-next",
                                      prevEl: ".swiper-button-prev",
                                    },
                                });
                            </script></center>
                            <div>                           
                                <h3>Precio <span><?php echo $n20.' '.$id20;?></span></h3>
                                <p>Menudeo $<?php echo $pMen2021;?>
                                Mayoreo $<?php echo $pMay20;?></p>
                                <a href="#image-17" class="lb-prev">Prev</a>
                                <a href="#image-19" class="lb-next">Next</a>
                                <a href="FormularioPedidoP.php?vari=<?php echo $id20;?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-19">
                            <img src="img/catalogo/Especial8.png" id="Especial" alt="image19">
                            <span>Muñeca</span>
                        </a>
                        <div class="lb-overlay" id="image-19">
                            <center><img src="img/catalogo/Especial8.png" alt="image19"/></center>
                            <div>                           
                                <h3>Precio <span><?php echo $n21.' '.$id21;?></span></h3>
                                <p>Menudeo $<?php echo $pMen21;?>
                                Mayoreo $<?php echo $pMay21;?></p>
                                <a href="#image-18" class="lb-prev">Prev</a>
                                <a href="#image-20" class="lb-next">Next</a>
                                <a href="FormularioPedidoP.php?vari=<?php echo $id21;?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-20">
                            <img src="img/catalogo/Especial11.png" id="Especial" alt="image20">
                            <span>Arte</span>
                        </a>
                        <div class="lb-overlay" id="image-20">
                            <center><img src="img/catalogo/Especial11.png" alt="image20"/></center>
                            <div>                           
                                <h3>Precio <span><?php echo $n22.' '.$id22;?></span></h3>
                                <p>Menudeo $<?php echo $pMen22;?>
                                Mayoreo $<?php echo $pMay22;?></p>
                                <a href="#image-19" class="lb-prev">Prev</a>
                                <a href="#image-21" class="lb-next">Next</a>
                                <a href="FormularioPedidoP.php?vari=<?php echo $id22;?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-21">
                            <img src="img/catalogo/Animal5.png" id="Animal" alt="image21">
                            <span>Unicornio</span>
                        </a>
                        <div class="lb-overlay" id="image-21">
                            <center><img src="img/catalogo/Animal5.png" alt="image21"/></center>
                            <div>                           
                                <h3>Precio <span><?php echo $n23.' '.$id23;?></span></h3>
                                <p>Menudeo $<?php echo $pMen23;?>
                                Mayoreo $<?php echo $pMay23;?></p>
                                <a href="#image-20" class="lb-prev">Prev</a>
                                <a href="#image-22" class="lb-next">Next</a>
                                <a href="FormularioPedidoP.php?vari=<?php echo $id23;?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-22">
                            <img src="img/catalogo/Especial14.png" id="Especial" alt="image22">
                            <span>Princesa</span>
                        </a>
                        <div class="lb-overlay" id="image-22">
                            <center><img src="img/catalogo/Especial14.png" alt="image22"/></center>
                            <div>                           
                                <h3>Precio <span><?php echo $n24.' '.$id24;?></span></h3>
                                <p>Menudeo $<?php echo $pMen24;?>
                                Mayoreo $<?php echo $pMay24;?></p>
                                <a href="#image-21" class="lb-prev">Prev</a>
                                <a href="#image-23" class="lb-next">Next</a>
                                <a href="FormularioPedidoP.php?vari=<?php echo $id24;?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-23">
                            <img src="img/catalogo/Especial15.png" id="Especial" alt="image23">
                            <span>Personaje</span>
                        </a>
                        <div class="lb-overlay" id="image-23">
                            <center><img src="img/catalogo/Especial15.png" alt="image23"/></center>
                            <div>                           
                                <h3>Precio <span><?php echo $n25.' '.$id25;?></span></h3>
                                <p>Menudeo $<?php echo $pMen25;?>
                                Mayoreo $<?php echo $pMay25;?></p>
                                <a href="#image-22" class="lb-prev">Prev</a>
                                <a href="#image-24" class="lb-next">Next</a>
                                <a href="FormularioPedidoP.php?vari=<?php echo $id25;?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-24">
                            <img src="img/catalogo/Flor3.png" id="Flor" alt="image24">
                            <span>Flor</span>
                        </a>
                        <div class="lb-overlay" id="image-24">
                            <center><img src="img/catalogo/Flor3.png" alt="image24"/></center>
                            <div>                           
                                <h3>Precio <span><?php echo $n26.' '.$id26;?></span></h3>
                                <p>Menudeo $<?php echo $pMen26;?>
                                Mayoreo $<?php echo $pMay26;?></p>
                                <a href="#image-23" class="lb-prev">Prev</a>
                                <a href="#image-25" class="lb-next">Next</a>
                                <a href="FormularioPedidoP.php?vari=<?php echo $id26;?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-25">
                            <img src="img/catalogo/Flor7.png" id="Flor" alt="image25">
                            <span>Alcatraz</span>
                        </a>
                        <div class="lb-overlay" id="image-25">
                            <center><img src="img/catalogo/Flor7.png" alt="image25"/></center>
                            <div>                           
                                <h3>Precio <span><?php echo $n27.' '.$id27;?></span></h3>
                                <p>Menudeo $<?php echo $pMen27;?>
                                Mayoreo $<?php echo $pMay27;?></p>
                                <a href="#image-24" class="lb-prev">Prev</a>
                                <a href="#image-26" class="lb-next">Next</a>
                                <a href="FormularioPedidoP.php?vari=<?php echo $id27;?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-26">
                            <img src="img/catalogo/Flor8.png" id="Flor" alt="image26">
                            <span>Flores</span>
                        </a>
                        <div class="lb-overlay" id="image-26">
                            <center><img src="img/catalogo/Flor8.png" alt="image26"/></center>
                            <div>                           
                                <h3>Precio <span><?php echo $n28.' '.$id28;?></span></h3>
                                <p>Menudeo $<?php echo $pMen28;?>
                                Mayoreo $<?php echo $pMay28;?></p>
                                <a href="#image-25" class="lb-prev">Prev</a>
                                <a href="#image-27" class="lb-next">Next</a>
                                <a href="FormularioPedidoP.php?vari=<?php echo $id27;?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-27">
                            <img src="img/catalogo/Pluma3.png" id="Pluma" alt="image27">
                            <span>Pluma</span>
                        </a>
                        <div class="lb-overlay" id="image-27">
                            <center><img src="img/catalogo/Pluma3.png" alt="image27"/></center>
                            <div>                           
                                <h3>Precio <span><?php echo $n29.' '.$id29;?></span></h3>
                                <p>Menudeo $<?php echo $pMen29;?>
                                Mayoreo $<?php echo $pMay29;?></p>
                                <a href="#image-26" class="lb-prev">Prev</a>
                                <a href="#image-28" class="lb-next">Next</a>
                                <a href="FormularioPedidoP.php?vari=<?php echo $id29;?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-28">
                            <img src="img/catalogo/Mariposa3.png" id="Mariposa" alt="image28">
                            <span>Mariposa</span>
                        </a>
                        <div class="lb-overlay" id="image-28">
                            <center><img src="img/catalogo/Mariposa3.png" alt="image28"/></center>
                            <div>                           
                                <h3>Precio <span><?php echo $n30.' '.$id30;?></span></h3>
                                <p>Menudeo $<?php echo $pMen30;?>
                                Mayoreo $<?php echo $pMay30;?></p>
                                <a href="#image-27" class="lb-prev">Prev</a>
                                <a href="#image-29" class="lb-next">Next</a>
                                <a href="FormularioPedidoP.php?vari=<?php echo $id30;?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-29">
                            <img src="img/catalogo/Pluma4.png" id="Pluma" alt="image29">
                            <span>Pluma</span>
                        </a>
                        <div class="lb-overlay" id="image-29">
                            <center><img src="img/catalogo/Pluma4.png" alt="image29"/></center>
                            <div>                           
                                <h3>Precio <span><?php echo $n31.' '.$id31;?></span></h3>
                                <p>Menudeo $<?php echo $pMen31;?>
                                Mayoreo $<?php echo $pMay31;?></p>
                                <a href="#image-28" class="lb-prev">Prev</a>
                                <a href="#image-30" class="lb-next">Next</a>
                                <a href="FormularioPedidoP.php?vari=<?php echo $id31;?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-30">
                            <img src="img/catalogo/Mandala4.png" id="Mandala" alt="image30">
                            <span>Mandala</span>
                        </a>
                        <div class="lb-overlay" id="image-30">
                            <center><img src="img/catalogo/Mandala4.png" alt="image30"/></center>
                            <div>                           
                                <h3>Precio <span><?php echo $n32.' '.$id32;?></span></h3>
                                <p>Menudeo $<?php echo $pMen32;?>
                                Mayoreo $<?php echo $pMay32;?></p>
                                <a href="#image-29" class="lb-prev">Prev</a>
                                <a href="#image-31" class="lb-next">Next</a>
                                <a href="FormularioPedidoP.php?vari=<?php echo $id32;?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                     <li>
                        <a href="#image-31">
                            <img src="img/catalogo/Mandala5.png" id="Mandala" alt="image31">
                            <span>Mandala</span>
                        </a>
                        <div class="lb-overlay" id="image-31">
                            <center><img src="img/catalogo/Mandala5.png" alt="image31"/></center>
                            <div>                           
                                <h3>Precio <span><?php echo $n33.' '.$id33;?></span></h3>
                                <p>Menudeo $<?php echo $pMen33;?>
                                Mayoreo $<?php echo $pMay33;?></p>
                                <a href="#image-30" class="lb-prev">Prev</a>
                                <a href="#image-32" class="lb-next">Next</a>
                                <a href="FormularioPedidoP.php?vari=<?php echo $id33;?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-32">
                            <img src="img/catalogo/Mandala6.png" id="Mandala" alt="image32">
                            <span>Mandala</span>
                        </a>
                        <div class="lb-overlay" id="image-32">
                            <center><img src="img/catalogo/Mandala6.png" alt="image32"/></center>
                            <div>                           
                                <h3>Precio <span><?php echo $n34.' '.$id34;?></span></h3>
                                <p>Menudeo $<?php echo $pMen34;?>
                                Mayoreo $<?php echo $pMay34;?></p>
                                <a href="#image-31" class="lb-prev">Prev</a>
                                <a href="#image-33" class="lb-next">Next</a>
                                <a href="FormularioPedidoP.php?vari=<?php echo $id34;?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                     <li>
                        <a href="#image-33">
                            <img src="img/catalogo/Mandala7.png" id="Mandala" alt="image33">
                            <span>Mandala</span>
                        </a>
                        <div class="lb-overlay" id="image-33">
                            <center><img src="img/catalogo/Mandala7.png" alt="image33"/></center>
                            <div>                           
                                <h3>Precio <span><?php echo $n35.' '.$id35;?></span></h3>
                                <p>Menudeo $<?php echo $pMen35;?>
                                Mayoreo $<?php echo $pMay35;?></p>
                                <a href="#image-32" class="lb-prev">Prev</a>
                                <a href="#image-34" class="lb-next">Next</a>
                                <a href="FormularioPedidoP.php?vari=<?php echo $id35;?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                     <li>
                        <a href="#image-34">
                            <img src="img/catalogo/Mandala8.png" id="Mandala" alt="image34">
                            <span>Mandala</span>
                        </a>
                        <div class="lb-overlay" id="image-34">
                            <center><img src="img/catalogo/Mandala8.png" alt="image34"/></center>
                            <div>                           
                                <h3>Precio <span><?php echo $n36.' '.$id36;?></span></h3>
                                <p>Menudeo $<?php echo $pMen36;?>
                                Mayoreo $<?php echo $pMay36;?></p>
                                <a href="#image-33" class="lb-prev">Prev</a>
                                <a href="#image-35" class="lb-next">Next</a>
                                <a href="FormularioPedidoP.php?vari=<?php echo $id36;?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-35">
                            <img src="img/catalogo/Animal15.png" id="Animal" alt="image35">
                            <span>Águila</span>
                        </a>
                        <div class="lb-overlay" id="image-35">
                            <center><img src="img/catalogo/Animal15.png" alt="image35"/></center>
                            <div>                           
                                <h3>Precio <span><?php echo $n37.' '.$id37;?></span></h3>
                                <p>Menudeo $<?php echo $pMen37;?>
                                Mayoreo $<?php echo $pMay37;?></p>
                                <a href="#image-34" class="lb-prev">Prev</a>
                                <a href="#image-36" class="lb-next">Next</a>
                                <a href="FormularioPedidoP.php?vari=<?php echo $id37;?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-36">
                            <img src="img/catalogo/Animal13.png" id="Animal" alt="image36">
                            <span>Pez</span>
                        </a>
                        <div class="lb-overlay" id="image-36">
                            <center><img src="img/catalogo/Animal13.png" alt="image36"/></center>
                            <div>                           
                                <h3>Precio <span><?php echo $n38.' '.$id38;?></span></h3>
                                <p>Menudeo $<?php echo $pMen38;?>
                                Mayoreo $<?php echo $pMay38;?></p>
                                <a href="#image-35" class="lb-prev">Prev</a>
                                <a href="#image-37" class="lb-next">Next</a>
                                <a href="FormularioPedidoP.php?vari=<?php echo $id38;?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-37">
                            <img src="img/catalogo/Animal14.png" id="Animal" alt="image37">
                            <span>Lagartija</span>
                        </a>
                        <div class="lb-overlay" id="image-37">
                            <center><img src="img/catalogo/Animal14.png" alt="image37"/></center>
                            <div>                           
                                <h3>Precio <span><?php echo $n39.' '.$id39;?></span></h3>
                                <p>Menudeo $<?php echo $pMen39;?>
                                Mayoreo $<?php echo $pMay39;?></p>
                                <a href="#image-36" class="lb-prev">Prev</a>
                                <a href="#image-38" class="lb-next">Next</a>
                                <a href="FormularioPedidoP.php?vari=<?php echo $id39;?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-38">
                            <img src="img/catalogo/Animal6.png" id="Animal" alt="image38">
                            <span>Toro</span>
                        </a>
                        <div class="lb-overlay" id="image-38">
                            <center><img src="img/catalogo/Animal6.png" alt="image38"/></center>
                            <div>                           
                                <h3>Precio <span><?php echo $n40.' '.$id40;?></span></h3>
                                <p>Menudeo $<?php echo $pMen40;?>
                                Mayoreo $<?php echo $pMay40;?></p>
                                <a href="#image-37" class="lb-prev">Prev</a>
                                <a href="#image-39" class="lb-next">Next</a>
                                <a href="FormularioPedidoP.php?vari=<?php echo $id40;?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-39">
                            <img src="img/catalogo/Animal7.png" id="Animal" alt="image39">
                            <span>Guacamaya</span>
                        </a>
                        <div class="lb-overlay" id="image-39">
                            <center><img src="img/catalogo/Animal7.png" alt="image39"/></center>
                            <div>                           
                                <h3>Precio <span><?php echo $n41.' '.$id41;?></span></h3>
                                <p>Menudeo $<?php echo $pMen41;?>
                                Mayoreo $<?php echo $pMay41;?></p>
                                <a href="#image-38" class="lb-prev">Prev</a>
                                <a href="#image-40" class="lb-next">Next</a>
                                <a href="FormularioPedidoP.php?vari=<?php echo $id41;?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-40">
                            <img src="img/catalogo/Animal10.png" id="Animal" alt="image40">
                            <span>Venado</span>
                        </a>
                        <div class="lb-overlay" id="image-40">
                            <center><img src="img/catalogo/Animal10.png" alt="image40"/></center>
                            <div>                           
                                <h3>Precio <span><?php echo $n42.' '.$id42;?></span></h3>
                                <p>Menudeo $<?php echo $pMen42;?>
                                Mayoreo $<?php echo $pMay42;?></p>
                                <a href="#image-39" class="lb-prev">Prev</a>
                                <a href="#image-41" class="lb-next">Next</a>
                                <a href="FormularioPedidoP.php?vari=<?php echo $id42;?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-41">
                            <img src="img/catalogo/Animal18.png" id="Animal" alt="image41">
                            <span>Búho</span>
                        </a>
                        <div class="lb-overlay" id="image-41">
                            <center><img src="img/catalogo/Animal18.png" alt="image41"/></center>
                            <div>                           
                                <h3>Precio <span><?php echo $n43.' '.$id43;?></span></h3>
                                <p>Menudeo $<?php echo $pMen43;?>
                                Mayoreo $<?php echo $pMay43;?></p>
                                <a href="#image-40" class="lb-prev">Prev</a>
                                <a href="#image-42" class="lb-next">Next</a>
                                <a href="FormularioPedidoP.php?vari=<?php echo $id43;?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-42">
                            <img src="img/catalogo/Colibri4.png" id="Colibri" alt="image42">
                            <span>Colibrí</span>
                        </a>
                        <div class="lb-overlay" id="image-42">
                            <center><img src="img/catalogo/Colibri4.png" alt="image42"/></center>
                            <div>                           
                                <h3>Precio <span><?php echo $n44.' '.$id44;?></span></h3>
                                <p>Menudeo $<?php echo $pMen44;?>
                                Mayoreo $<?php echo $pMay44;?></p>
                                <a href="#image-41" class="lb-prev">Prev</a>
                                <a href="#image-43" class="lb-next">Next</a>
                                <a href="FormularioPedidoP.php?vari=<?php echo $id44;?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                     <li>
                        <a href="#image-43">
                            <img src="img/catalogo/Colibri5.png" id="Colibri" alt="image43">
                            <span>Colibrí</span>
                        </a>
                        <div class="lb-overlay" id="image-43">
                            <center><img src="img/catalogo/Colibri5.png" alt="image43"/></center>
                            <div>                           
                                <h3>Precio <span><?php echo $n45.' '.$id45;?></span></h3>
                                <p>Menudeo $<?php echo $pMen45;?>
                                Mayoreo $<?php echo $pMay45;?></p>
                                <a href="#image-42" class="lb-prev">Prev</a>
                                <a href="#image-44" class="lb-next">Next</a>
                                <a href="FormularioPedidoP.php?vari=<?php echo $id45;?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-44">
                            <img src="img/catalogo/Especial13.png" id="Especial" alt="image44">
                            <span>Calavera</span>
                        </a>
                        <div class="lb-overlay" id="image-44">
                            <center><div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><img src="img/catalogo/Especial13.png"></div>
                                    <div class="swiper-slide"><img src="img/catalogo/Especial12.png"></div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                            <!-- Swiper JS -->
                            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
                            <!-- Initialize Swiper -->
                            <script>
                                var swiper = new Swiper(".mySwiper", {
                                    navigation: {
                                      nextEl: ".swiper-button-next",
                                      prevEl: ".swiper-button-prev",
                                    },
                                });
                            </script></center>
                            <div>                           
                                <h3>Precio <span><?php echo $n46.' '.$id46;?></span></h3>
                                <p>Menudeo $<?php echo $pMen46;?>
                                Mayoreo $<?php echo $pMay46;?></p>
                                <a href="#image-43" class="lb-prev">Prev</a>
                                <a href="#image-45" class="lb-next">Next</a>
                                <a href="FormularioPedidoP.php?vari=<?php echo $id46;?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-45">
                            <img src="img/catalogo/Especial17.png" id="Especial" alt="image45">
                            <span>Zombies</span>
                        </a>
                        <div class="lb-overlay" id="image-45">
                            <center><div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><img src="img/catalogo/Especial16.png"></div>
                                    <div class="swiper-slide"><img src="img/catalogo/Especial17.png"></div>
                                    <div class="swiper-slide"><img src="img/catalogo/Especial18.png"></div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                            <!-- Swiper JS -->
                            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
                            <!-- Initialize Swiper -->
                            <script>
                                var swiper = new Swiper(".mySwiper", {
                                    navigation: {
                                      nextEl: ".swiper-button-next",
                                      prevEl: ".swiper-button-prev",
                                    },
                                });
                            </script></center>
                            <div>                           
                                <h3>Precio <span><?php echo $n47.' '.$id47;?></span></h3>
                                <p>Menudeo $<?php echo $pMen47;?>
                                Mayoreo $<?php echo $pMay47;?></p>
                                <a href="#image-44" class="lb-prev">Prev</a>
                                <a href="#image-46" class="lb-next">Next</a>
                                <a href="FormularioPedidoP.php?vari=<?php echo $id47;?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                </ul>
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
