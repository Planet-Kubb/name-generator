<html>
<head>
  <title>Planet Kubb Team Name Generator</title>

	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="description" content="Planet Kubb Team Name Generator!" />
	<link href="/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="/css/rivers.css" rel="stylesheet" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

</head>
<body bgcolor="#FFFFFF">
  <div class="container">
    <div class="row">
      <header class="jumbotron subhead">

<?
	/*== read in the two files into the arrays ==*/
	$adj_array = file("adjs");
	$noun_array = file("kubbs");

	/*== set random seed ==*/
	srand();

	/*== get the random numbers for each name first/last or adj/noun ==*/
	$arnd = rand(0,sizeof($adj_array)-1);
	$nrnd = rand(0,sizeof($noun_array)-1);

	/*== create name from random numbers ==*/
	$wuname = chop($adj_array[$arnd]) . " " . chop($noun_array[$nrnd]);

	print "<h1>$wuname</h1>";

?>

      </header>
    </div>
    <div style="height: 100px;"></div>
    <div class="row">
      <div class="span8">
        <h3>Planet Kubb Team Name Generator v1.0</h3>
        <br/>
        <h4><a href="http://planetkubb.com/">Planet Kubb</a></h4>
        <h4><a href="http://ask.planetkubb.com/">Ask Planet Kubb</a></h4>
        <h5><a href="http://wiki.planetkubb.com/">Planet Kubb Wiki</a></h4>
        <br/>
        <h6>Want to improve the name generator? <a href="https://github.com/thingles/Planet-Kubb-Name-Generator">The code is on Github!</a></h6>
      </div>
      <div class="span4">
        <img src="/img/160px-Planetkubb-trans.png" widht="160" height="160" />
      </div>
    </div>
  </div>

<!-- Piwik --> 
<script type="text/javascript">
var pkBaseURL = (("https:" == document.location.protocol) ? "https://stats.thingelstad.com/" : "http://stats.thingelstad.com/");
document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
try {
var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 30);
piwikTracker.trackPageView();
piwikTracker.enableLinkTracking();
} catch( err ) {}
</script><noscript><p><img src="http://stats.thingelstad.com/piwik.php?idsite=30" style="border:0" alt="" /></p></noscript>
<!-- End Piwik Tracking Code -->

</body>
</html>

