<html>
<head>
	<title>Planet Kubb Team Name Generator (fr)</title>

	<meta name="description" content="Planet Kubb Team Name Generator!" />
	<link href="../css/bootstrap.min.css" rel="stylesheet" />
	<link href="../css/rivers.css" rel="stylesheet" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

</head>
<body bgcolor="#FFFFFF">
<div class="container">
	<div class="row-fluid">
		<div class="alert alert-info">
			<strong>Want to create the Fran&ccedil;ais team name generator?</strong> <a href="https://github.com/thingles/Planet-Kubb-Name-Generator">Fork the code on Github</a> and issue a pull request when you have it ready!
		</div>
	</div>

	<div class="row-fluid">
		<header class="jumbotron subhead">

<?
	/*
	$adj_array = file("adjs");
	$noun_array = file("kubbs");

	srand();

	$arnd = rand(0,sizeof($adj_array)-1);
	$nrnd = rand(0,sizeof($noun_array)-1);

	$name = chop($adj_array[$arnd]) . " " . chop($noun_array[$nrnd]);
	*/

	$name = "Parles-tu Fran&ccedil;ais?";
	print "<h1>$name</h1>";
?>

		</header>
	</div>
	<div style="height: 20px;" ></div>
	<div class="row-fluid">
		<div class="span6">
			<a class="btn btn-large btn-primary disabled" href="#">Try again</a>
		</div>
		<div style="text-align: right;">
			<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://name.planetkubb.com/" data-text="<?php echo $name; ?>" data-via="PlanetKubb" data-size="large" data-related="PlanetKubb" data-hashtags="kubb">Tweet</a>
		</div>
	</div>
	<div style="height: 100px;"></div>
	<div class="row-fluid">
		<div class="span8">
			<h3>Planet Kubb Team Name Generator v1.0</h3>
			<br/>
			<h4><a href="http://planetkubb.com/?pk_campaign=Planet-Kubb-Name-Generator">Planet Kubb</a></h4>
			<h4><a href="http://ask.planetkubb.com/?pk_campaign=Planet-Kubb-Name-Generator">Ask Planet Kubb</a></h4>
			<h4><a href="http://wiki.planetkubb.com/?pk_campaign=Planet-Kubb-Name-Generator">Planet Kubb Wiki</a></h4>
			<br/>
			<a href="https://twitter.com/PlanetKubb" class="twitter-follow-button" data-show-count="true">Follow @PlanetKubb</a>
		</div>
		<div class="span4">
			<img class="pull-right" src="../img/160px-Planetkubb-trans.png" widht="160" height="160" />
		</div>
	</div>
	<div style="height: 40px;" ></div>
	<div class="row-fluid">
		<ul class="nav nav-pills">
			<li><a href="../de">Deutsch</a></li>
			<li><a href="../en" >English</a></li>
			<li><a href="../es">Espa&ntilde;ol</a></li>
			<li class="active"><a href="../fr">Fran&ccedil;ais</a></li>
			<li><a href="../it">Italiano</a></li>
			<li><a href="../nl">Dutch</a></li>
			<li><a href="../no">Norsk</a></li>
			<li><a href="../pl">Polski</a></li>
		</div>
	</div>
</div>

<?php include("../include/lib.php"); ?>

</body>
</html>

