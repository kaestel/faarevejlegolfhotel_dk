<? include_once($_SERVER['FRAMEWORK_PATH']."/include/segment.php") ?>
<? include_once($_SERVER['FRAMEWORK_PATH']."/include/functions.inc.php") ?>
<!DOCTYPE html>
<html>
<head>
	<title>F&aring;revejle Golf Hotel - <?= isset($page_title) ? $page_title : 'Også for ikke-golfere' ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="content-language" content="da" />
	<meta name="google-site-verification" content="76EHJGzXksffjfS7Wp8VVwNNt3fyb1yrvq9fgNtJvuM" />
	<meta name="title" content="Fårevejle golf hotel - <?= isset($page_title) ? $page_title : 'Også for ikke-golfere' ?>" />
	<meta name="description" content="Lille hotel i det naturskønne Odsherred. golfpakker, konference-/møderlokaler, weekendophold, familie-/firmafester. Også for ikke-golfere. alle værelser har tv og hurtig internetadgang." />
	<meta name="keywords" content="hotel, overnatning, motel, golf, golfhotel, dragsholmrevyen, odsherred, selskabslokaler, konference, dragsholm, ferie, weekendophold" />
	<meta name="robots" content="all" />
	<meta name="HandheldFriendly" content="true"/>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />
	<style type="text/css">@import url(/css/basics.css);</style>
	<script language="JavaScript" type="text/JavaScript" src="/js/basics.js"></script>
	<script language="JavaScript" type="text/javascript" src="http://www.google-analytics.com/ga.js"></script>

	<link href="http://vjs.zencdn.net/c/video-js.css" rel="stylesheet">
	<script src="http://vjs.zencdn.net/c/video.js"></script></head>

<script type="text/javascript">
	try {
		var pageTracker = _gat._getTracker("UA-8407362-1");
		pageTracker._trackPageview();
	} catch(err) {}
</script>

<body<?= isset($body_class) ? ' class="'.$body_class.'"' : '' ?>>

<div id="page">

	<div id="menu">
		<div class="logo"><a href="/"><span>Fårevejle Golf Hotel</span> <span class="phone">+45 5965 4200</span></a></div>

		<ul>
			<li class="back<?= $_SERVER["PHP_SELF"] == "/index.php" ? ' selected' : '' ?>"><a href="/">Forsiden</a></li>
			<!--li class="separator"></li-->
			<li<?= $_SERVER["PHP_SELF"] == "/hotellet.php" ? ' class="selected"' : '' ?>>
				<a href="hotellet.php">Hotellet</a>
				<ul>
					<li<?= $_SERVER["PHP_SELF"] == "/vaerelserne.php" ? ' class="selected"' : '' ?> class="nomobile"><a href="vaerelserne.php">V&aelig;relserne</a></li>
					<li<?= $_SERVER["PHP_SELF"] == "/moedelokaler.php" ? ' class="selected"' : '' ?>><a href="moedelokaler.php">Konference</a></li>
					<li<?= $_SERVER["PHP_SELF"] == "/selskabslokaler.php" ? ' class="selected"' : '' ?>><a href="selskabslokaler.php">Selskabslokaler</a></li>
					<li<?= $_SERVER["PHP_SELF"] == "/restaurant.php" ? ' class="selected"' : '' ?>><a href="restaurant.php">Hotellets Restaurant</a></li>
				</ul>
			</li>
			<li<?= $_SERVER["PHP_SELF"] == "/arrangementer.php" ? ' class="selected"' : '' ?>><a href="arrangementer.php">Arrangementer</a></li>
			<li<?= $_SERVER["PHP_SELF"] == "/ferieophold.php" ? ' class="selected"' : '' ?>><a href="ferieophold.php">Ferieophold</a></li>
			<li<?= preg_match("/golf/", $_SERVER["PHP_SELF"]) ? ' class="selected"' : '' ?>>
				<a href="golf.php">Golftilbud</a>
				<!--ul>
					<li<?= preg_match("/golf/", $_SERVER["PHP_SELF"]) ? ' class="selected"' : '' ?>><a href="golf.php">Golfpakker</a></li>
					<li<?= $_SERVER["PHP_SELF"] == "/restaurant_bothwell.php" ? ' class="selected"' : '' ?>><a href="restaurant_bothwell.php">Café og Restaurant Bothwell</a></li>
				</ul-->
			</li>
			<li<?= $_SERVER["PHP_SELF"] == "/haandvaerkere.php" ? ' class="selected"' : '' ?>><a href="haandvaerkere.php">H&aring;ndv&aelig;rkertilbud</a></li>
			<li<?= $_SERVER["PHP_SELF"] == "/priser.php" ? ' class="selected"' : '' ?>><a href="priser.php">Priser</a></li>
			<li<?= $_SERVER["PHP_SELF"] == "/dragsholm_revyen.php" ? ' class="selected"' : '' ?>>
				<a href="dragsholm_revyen.php">Dragsholmrevyen</a>
				<ul>
					<li<?= $_SERVER["PHP_SELF"] == "/dragsholm_revyen_2014.php" ? ' class="selected"' : '' ?>><a href="dragsholm_revyen_2014.php">Dragsholmrevyen 2014</a></li>
					<li<?= $_SERVER["PHP_SELF"] == "/dragsholm_revyen_2013.php" ? ' class="selected"' : '' ?>><a href="dragsholm_revyen_2013.php">Dragsholmrevyen 2013</a></li>
					<li<?= $_SERVER["PHP_SELF"] == "/dragsholm_revyen_2012.php" ? ' class="selected"' : '' ?>><a href="dragsholm_revyen_2012.php">Dragsholmrevyen 2012</a></li>
				</ul>
			</li>
			<li<?= $_SERVER["PHP_SELF"] == "/lokalomraadet.php" ? ' class="selected"' : '' ?> class="nomobile"><a href="lokalomraadet.php">Lokalomr&aring;det</a></li>
			<li<?= $_SERVER["PHP_SELF"] == "/links.php" ? ' class="selected"' : '' ?> class="nomobile"><a href="links.php">Links</a></li>
			<li<?= $_SERVER["PHP_SELF"] == "/kontakt.php" ? ' class="selected"' : '' ?>><a href="kontakt.php">Kontakt os</a></li>
		</ul>

		<div class="assoc">
			<a href="http://www.horesta.dk" target="_blank"><img src="img/gx_horesta.png" alt="Horesta" /></a>
			<a href="http://www.smalldanishhotels.dk/"><img src="img/gx_smalldanishhotels.png" alt="Small Danish Hotels" /></a>
		</div>
	</div>
	
	<!--div class="booking_com">
		<a href="http://www.booking.com/hotel/dk/farevejle-golf.html?aid=330843;lang=da"><img src="//aff.bstatic.com/images/affiliate/330843/booknow_da.gif" /></a>
	</div-->

	<div id="content">