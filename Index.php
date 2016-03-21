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
			<div id="reseausociaux" class="col-md-offset-1 col-xs-offset-1 col-sm-offset-1 col-sm-8 col-md-9 col-xs-12">
				<ul class="list-inline ">
					<li><a href="https://twitter.com/Ireth_fr"><img src="./img/twitter-32.ico" alt="Twitter"/></a></li>
					<li><a href="http://steamcommunity.com/groups/Irethview"><img src="./img/steam-32.png" alt="Groupe Steam"/></a></li>
					<li><a href="https://www.youtube.com/user/Irethfr"><img src="./img/youtube-32.png" alt="Youtube"/></a></li>
					<li><a href="https://www.twitch.tv/irethfr"><img src="./img/twitch-32.png" alt="Twitch"/></a></li>
					<li><a href="http://www.hitbox.tv/Ireth"><img src="./img/hitbox-32.png" alt="Hitbox"/></a></li>				
				</ul>
			</div>
		</div>
	</section>

	<div id="menu" class="row">
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<a class="navbar-brand" href="#"><img id="petit-logo" class="img-circle" src="./img/ireth-30.png" alt="test"/></a>
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
						<li class="active"><a href="./index.php">Live</a></li>
						<li><a href="./video.php">Vidéos</a></li>
						<li><a href="./calendar.php">Programme</a></li>	
						<li><a href="./creafan.php">Creafan</a></li>
						<li><span class="glyphicon glyphicon-lamp"></span></li>
					</ul>  
				</div>
			</div>
		</nav>
	</div>
	<section id="contenu">
		<div id="titre-stream" class="row">
			<h4>Stream en folie</h4>
		</div>
		<div class="row">
			<!--<div class="embed-responsive embed-responsive-16by9 col-md-7 col-xs-12">-->
			
				<!--<iframe id="stream" src="https://player.twitch.tv/?channel=blondiewondie" allowfullscreen></iframe>-->
			<iframe id="stream" class="embed-responsive col-md-7 col-sm-7 col-xs-12" src="http://www.hitbox.tv/embed/ireth?autoplay=false&amp;hidePopoutButton=true&amp;secured=false&amp;playerInAdvert=false" allowfullscreen ></iframe>
			
			<div class="col-md-5 col-sm-5">
				<iframe id="chat" class="col-xs-10 col-xs-offset-1" frameborder="0" scrolling="no" src="http://twitch.tv/irethfr/chat?theme=dark154?popout="></iframe>
			</div>
		</div>
		<div id="btn-sous-stream" class="row">
			<a class="col-md-2 col-xs-0" href=""><button class="btn btn-success">follow</button></a>
			<a class="col-md-2 col-xs-0" href="https://www.twitchalerts.com/donate/irethfr"><button class="btn btn-success">Donnez-moi</button></a>
			<a class="col-md-2 col-xs-0" href="https://www.hitbox.tv/ireth/subscribe/Arshess"><button class="btn btn-success">Subscribe</button></a>
		</div>
	</section>
	<div id="push"></div>
</section>
<section id="footer" class="row-fluid" >
	<div class="container-fluid"><h3>Ireth.eu</h3></div>
</section>

</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="./style/bootstrap/js/bootstrap.min.js"></script>
<script>


$(document).ready(function() 
{
	$(window).on('resize',function(){
		var cw = $("#stream").width();
		cw = cw*0.56;
		$("#stream").css({'height':cw+'px'});
	});
});
</script>