<!DOCTYPE html>
<html lang="es"> 
<head>
	<meta charset="utf-8">
	<meta name="viewport", content="width=device-width, user-scable=no, initil-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link rel="stylesheet" href="public/css/bootstrap.css" href="estilos.css">
	<title>YO AMO LA MUSICA... :) :D </title>
</head>
<style>
		body{
			background-image: url(public/img/9.jpeg);
		}

		h1{
			@import url(https://fonts.googleapis.com/css?family=Lobster);

	margin: 0;
	font-size: 5em;
	text-align: center;
	color: transparent;
	font-weight: normal;
	background: linear-gradient(
		pink,pink, blue,red, pink);
	-webkit-background-clip: text;
	position:relative;
	&: after{
		content:"texto con fondo degradado";
		position:absolute;
		top: 3px;
		left: 3px;
		color: #000;
		z-index: -1;

border-bottom: dotted 2px #ccc ;
text-align:center; 
}
		}
		a{
			background-color:lightblue;
			
		}
		a:hover{}
		#main_contair{}
		#content{
			background-color:red;
			color:red;
		}
		#descripcion{
			background-color:red;
			color:red;
		}
		#bonton-content{
			color:red;
			
		}
	</style>
<body>
<header>
			<div id="bonton-content">
			 <h1><center>YO AMO LA MUSICA ... :) :D </center></h1></div>
			 <br>
        </header>
<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- Marca y de palanca quedan agrupados para una mejor visualización en dispositivos móviles -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<ul class="nav navbar-nav">
			<li class="navbar-brand" href="#">Inicio</a></li>
		</div>

		<!-- Recoger el enlaces de navegación , formularios y otros contenidos para alternar -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li class="#"><a href="index2.php">Videos</a></li>
				<li><a href="http://taniacas2011.wix.com/twaniedtjw">Imagnes</a></li>
			</ul>
			<form class="navbar-form navbar-left" role="buscar">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="escribir">
				</div>
				<button type="buscador" class="btn btn-default">buscador</button>
			</form>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="http://taniacas2011.wix.com/twaniedtjw">mas videos</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Mas<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#">Inicio</a></li>
						<li><a href="index2.php">Videos</a></li>
						<li><a href="http://taniacas2011.wix.com/twaniedtjw">Mas informacion</a></li>
						<li><a href="http://cristiantjw3.wix.com/twanied">Mas videos</a></li>
					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>

<div id="carousel-id" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carousel-id" data-slide-to="0" class=""></li>
		<li data-target="#carousel-id" data-slide-to="1" class=""></li>
		<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
	</ol>
	<div class="carousel-inner">
		<div class="item">
			<header>
            <h1><center><img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="public/img/3.jpg" height="450" width="1000"></center></h1>
        </header>
			<div class="container">
				<div class="carousel-caption">
					<h1>Tokio Hotel</h1>
					<p>
						"Estoy gritando en la cima del mundo!! no me sientes??"</p>
					<p><a class="btn btn-lg btn-primary" href="#" role="button">Videos</a></p>
				</div>
			</div>
		</div>
		<div class="item">
		<header>
            <h1><center><img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="public/img/1.jpg" height="450" width="1000"></center></h1>
        </header>

			<div class="container">
				<div class="carousel-caption">
					<h1>Tokio Hotel</h1>
					<p>Vamos! Hay dias Cuando te sientes tan pequeño Y sabes 
						Que deberias estar tan alto Piensas que no escogistes. Mira la tierra Mira que hacemos Aqui y ahora Te necesitamos El silencio puede destruir Levantate y alza tu voz</p>
					<p><a class="btn btn-lg btn-primary" href="#" role="button">Videos</a></p>
				</div>
			</div>
		</div>
		<div class="item active"
		<header>
            <h1><center><img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="public/img/2.jpg" height="450" width="1000"></center></h1>
        </header>
					
		
			<div class="container">
				<div class="carousel-caption">
					<h1>Tokio Hotel</h1>
					<p>Yo estaré ahí para abrazarte muy cerca de mi 
						Cuando estés fuera y no puedas entrar 
						Te enseñaré, eres mejor de lo que sabes 
						Cuando te pierdas, cuando estés solo y no puedas regresar 
						Te encontraré cariño, te llevaré de vuelta a casa </p>
					<p><a class="btn btn-lg btn-primary" href="#" role="button">Videos</a></p>
				</div>
			</div>
		</div>
	</div>
	<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
	<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>


<script src="public/js/jquery-1.12.1.js"></script>
<script src="public/js/bootstrap.js"></script>



            <div class="row">
		<div class="col-md-4">
			<div class="mi-video">
				<video autobuffer autoloop loop controls>
					<source src="public/music/Tokio Hotel - Love Who Loves You Back.mp4">
				</video>
			</div>
		</div>
		<div class="col-md-4">
			<div class="mi-video">
				<video autobuffer autoloop loop controls>
					<source src="public/music/Bea Miller - Young Blood (Official Video).mp4">
				</video>
			</div>
		</div>
		<div class="col-md-4">
			<div class="mi-video">
				<video autobuffer autoloop loop controls>
					<source src="public/music/Austin Mahone - What About Love.mp4">
				</video>
			</div>
		</div>
		 
	</div>

</div>
</body>
</html>