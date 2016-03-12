<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>YO AMO LA MUSICA</title>
	<link rel="stylesheet" href="public/css/bootstrap.css">
	<link rel="stylesheet" href="public/css/estilos.css">

</head>
<style>
		body{
			background-image: url(public/img/5.jpeg);
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
<div class="container">
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">INICIO</a>
			</div>
	
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Videos</a></li>
					<li><a href="#">Imagnes</a></li>
				</ul>
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default">buscador</button>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">mas videos</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Mas <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Inicio</a></li>
							<li><a href="#">Videos</a></li>
							<li><a href="#">Mas informacion</a></li>
							<li><a href="#">Mas videos</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>
</div>


<div id="carousel-id" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carousel-id" data-slide-to="0" class=""></li>
		<li data-target="#carousel-id" data-slide-to="1" class=""></li>
		<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
	</ol>
	<div class="carousel-inner">
		<div class="item">
			<header>
            <h1><center><img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="public/img/3.jpg" height="450" width="1000"></center></h1>
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


<div class="container">
	
	  
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
 
	<<script src="public/js/jquery-1.12.1.js"></script>
	<<script src="public/js/bootstrap.js"></script>
</body>
</html>