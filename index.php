<?php 

	include 'embed.php';
	include 'nav.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>World Transport</title>
		<meta name="description" content="">
		<meta name="author" content="Rigo">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<?php embed(); ?>
		
		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<script>
			jQuery(function(){
			     $(".icon-land").hover(
			          function(){this.src = this.src.replace("_off","_on");},
			          function(){this.src = this.src.replace("_on","_off");
			     });
			});
			
			
		</script>
		
	</head>

	<body>
		
			<header>
				<div id="identity"><img src="img/logo.png" height="100" class="logo"><img src="img/graphs_logo.png" height="100" class="logo"></div>
				<?php nav(); ?>	
				
			</header>

			<div id="content">
				
				<div id="servicios">
					
					<img src="img/icons/truck_off.png" class="icon-land">
					<img src="img/icons/plane_off.png" class="icon-land">
					<img src="img/icons/ship_off.png" class="icon-land">
					<img src="img/icons/courier_off.png" class="icon-land">
					<img src="img/icons/mudanza_off.png" class="icon-land">
					<img src="img/icons/carga_protecto_off.png" class="icon-land">
					<img src="img/icons/consolidado_off.png" class="icon-land">
					
				</div>
				
				<div id="text-land">
					<h1 style="margin: 0px; line-height: 35px;">WORLD TRANSPORT INTERNATIONAL</h1><br/>
					Con más de una década, World Transport Int’l Ltda.  
					ha evolucionado en la prestación de servicios logísticos y de 
					transporte de carga nacional e internacional hasta llegar a 
					posicionarse como empresa líder en el mercado.<br/></br>
					
					<h3>SOMOS MIEMBROS</h3>
					<img src="img/wcaFirst_logo.gif" width="85"/>
					<img src="img/wcaInter_logo.gif" width="85"/>
					<img src="img/wcaChina_logo.gif" width="85"/>
					<img src="img/wcaAdvanced_logo.gif" width="85"/>
				</div>
				
				<div id="slide">
					<ul class="rslides">
						<li></li>
					</ul>
					
				</div>
				
				
			</div>

			<footer>
				
			</footer>
		
	</body>
</html>
