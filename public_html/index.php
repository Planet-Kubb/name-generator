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
        <h4><a href="http://planetkubb.com/?pk_campaign=Planet-Kubb-Name-Generator">Planet Kubb</a></h4>
        <h4><a href="http://ask.planetkubb.com/?pk_campaign=Planet-Kubb-Name-Generator">Ask Planet Kubb</a></h4>
        <h4><a href="http://wiki.planetkubb.com/?pk_campaign=Planet-Kubb-Name-Generator">Planet Kubb Wiki</a></h4>
      </div>
      <div class="span4">
        <img src="/img/160px-Planetkubb-trans.png" widht="160" height="160" />
      </div>
    </div>
  </div>

<a href="http://github.com/thingles/Planet-Kubb-Name-Generator"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://a248.e.akamai.net/assets.github.com/img/71eeaab9d563c2b3c590319b398dd35683265e85/687474703a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f677261795f3664366436642e706e67" alt="Fork me on GitHub"></a>

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

