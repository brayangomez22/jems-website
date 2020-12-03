<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<?php

		/*=============================================
		 MANTENER LA RUTA FIJA DEL PROYECTO
		=============================================*/

		$url = Ruta::ctrRuta();

		if(isset($_GET["ruta"])){

			$rutas = explode("/", $_GET["ruta"]);

			if($rutas[0] == "signUpLogin"){
	
				echo '<title>'.$rutas[0].'</title>';
	
			}else{
	
				echo '<title>Error 404</title>';
	
			}

		}

	?>

	<!--==============================================
	 PLUGINS DE CSS 
	================================================-->

	<!------- PARA LAS ANIMACIONES -------->
	<link rel="stylesheet" href="<?php echo $url; ?>assets/css/plugins/animate.css">

	<!--==============================================
	 HOJAS DE ESTILO PERSONALIZADO 
	================================================-->

	<link rel="stylesheet" href="<?php echo $url; ?>assets/css/template.css">
	<link rel="stylesheet" href="<?php echo $url; ?>assets/css/hero.css">
	<link rel="stylesheet" href="<?php echo $url; ?>assets/css/signUpLogin.css">
	<link rel="stylesheet" href="<?php echo $url; ?>assets/css/services.css">
	<link rel="stylesheet" href="<?php echo $url; ?>assets/css/about.css">
	<link rel="stylesheet" href="<?php echo $url; ?>assets/css/error404.css">
	<link rel="stylesheet" href="<?php echo $url; ?>assets/css/product.css">
	<link rel="stylesheet" href="<?php echo $url; ?>assets/css/ourBrand.css">
	<link rel="stylesheet" href="<?php echo $url; ?>assets/css/contact.css">
	<link rel="stylesheet" href="<?php echo $url; ?>assets/css/footer.css">
	<link rel="stylesheet" href="<?php echo $url; ?>assets/css/responsive.css">

	<!--==============================================
	 PLUGINS DE JAVASCRIPT 
	================================================-->

	<script src="<?php echo $url; ?>assets/js/plugins/jquery.min.js"></script>
	<script src="<?php echo $url; ?>assets/js/plugins/wow.min.js"></script>

	<!--==============================================
	 FontAwesome -- PARA LOS ICONOS
	================================================-->
	
	<script crossorigin="anonymous" src="https://kit.fontawesome.com/70a642cd7c.js"></script>

</head>

<body>

<?php

if(isset($_GET["ruta"])){

	if($rutas[0] == "blog"){

        include "modules/".$rutas[0].".php";

    }else if($rutas[0] == "signUpLogin"){

        include "modules/sections/".$rutas[0].".php";

    }else{

        include "modules/sections/error404.php";

    }

}else{

	include "modules/hero.php";
	include "modules/sections.php";
	include "modules/footer.php";

}

?>

<!--==============================================
 JAVASCRIPT PERSONALIZADO 
================================================-->

<script type="text/javascript" src="<?php echo $url; ?>assets/js/main.js"></script>

<!--==============================================
 WOW ANIMATION --- PARA LAS ANIMACIONES
================================================-->

<script>
new WOW().init();
</script>

</body>
</html>