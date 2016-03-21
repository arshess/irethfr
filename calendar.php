 <!DOCTYPE html>
<html>
<head>
	<title>Ireth-FR - Live</title>
	<link rel="stylesheet" type="text/css" href="./style/bootstrap/css/bootstrap.min.css" property="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="./style/style.css" property="stylesheet"/>
	<link rel="shortcut icon" type="image/x-icon" href="./img/ireth-80.png" property="icon"/>
	<meta charset="UTF-8"/>
</head>
<body>
	<section id="corps" class="container-fluid">
		<section id="header" class="row">
			<div class="col-xs-12">
				<h1>Ireth-FR</h1>
			</div>
			<div class="row">
			<div id="reseausociaux" class="col-md-offset-1 col-xs-offset-1 col-md-11 col-xs-12">
				<ul class="list-inline">
					<li><a href="https://twitter.com/Ireth_fr"><img src="./img/twitter-32.ico" alt="Twitter"/></a></li>
					<li><a href="http://steamcommunity.com/groups/Irethview"><img src="./img/steam-32.png" alt="Groupe Steam"/></a></li>
					<li><a href="https://www.youtube.com/user/Irethfr"><img src="./img/youtube-32.png" alt="Youtube"/></a></li>
					<li><a href="https://www.twitch.tv/irethfr"><img src="./img/twitch-32.png" alt="Twitch"/></a></li>
					<li><a href="http://www.hitbox.tv/Ireth"><img src="./img/hitbox-32.png" alt="Hitbox"/></a></li>				
				</ul>
			</div></div>
		</section>

		<div id="menu" class="row-fluid">
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<a class="navbar-brand" href="#"><img id="petit-logo" class="img-circle" src="./img/ireth-30.png" alt="logo"/></a>
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
					  </button>
					</div>					
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li><a href="./index.php">Live</a></li>
							<li><a href="./video.php">Vidéos</a></li>
							<li class="active"><a href="./calendar.php">Programme</a></li>	
							<li><a href="./creafan.php">Creafan</a></li>
						</ul>  
					</div>
				</div>
			</nav>
		</div>
		<section id="contenu">		
			<section id="prochain-live" class="row-fluid">
				<div id="today" class=".col-md-12"><h2>Le prochain live sera nul</h2></div>
			</section>
			<section id="calendar" class="row">			
			<div class="col-md-12">			
				<div id="calendar-col-1" class="jours col-md-2 col-sm-2 col-xs-12">
					<div class="row nom-jour">
						<h4>Vendredi 18</h4>
					</div>
				</div>
				<div id="calendar-col-2" class="jours col-md-2 col-sm-2 col-xs-12"></div>
				<div id="calendar-col-3" class="jours col-md-2 col-sm-2 col-xs-12"></div>				                                              
				<div id="calendar-col-4" class="jours col-md-2 col-sm-2 col-xs-12"></div>
				<div id="calendar-col-5" class="jours col-md-2 col-sm-2 col-xs-12"></div>
				<div id="calendar-col-6" class="jours col-md-2 col-sm-2 col-xs-12"></div>			
			</div>
			</section>
		</section>
		<div id="push"></div>
	</section>
	<section id="footer" class="row" >
		<div class="container-fluid"><h1>Footer</h1></div>
	</section>

</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="./style/bootstrap/js/bootstrap.min.js"></script>