<!DOCTYPE html>
<html lang="<?= $this->language() ?>">
<head>
	<!-- (c) & (p) think.dk 2011-2014 //-->
	<!-- All material protected by copyrightlaws, as if you didnt know //-->
	<title>F&aring;revejle Golf Hotel - <?= $this->pageTitle() ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
	<meta name="description" content="Lille hotel i det naturskønne Odsherred. Golfpakker, konference-/møderlokaler, weekendophold, familie-/firmafester. Også for ikke-golfere. Alle værelser har tv og hurtig internetadgang." />
	<meta name="keywords" content="hotel, overnatning, motel, golf, golfhotel, dragsholmrevyen, odsherred, selskabslokaler, konference, dragsholm, ferie, weekendophold" />
	<meta name="robots" content="all" />
	<meta name="viewport" content="initial-scale=1, user-scalable=no" />
	<meta name="MSSmartTagsPreventParsing" content="true" />
<? if(session()->value("dev")) { ?>
	<link type="text/css" rel="stylesheet" media="all" href="/css/lib/seg_<?= $this->segment() ?>_include.css" />
	<script type="text/javascript" src="/js/lib/seg_<?= $this->segment() ?>_include.js"></script>
<? } else { ?>
	<link type="text/css" rel="stylesheet" media="all" href="/css/seg_<?= $this->segment() ?>.css" />
	<script type="text/javascript" src="/js/seg_<?= $this->segment() ?>.js"></script>
<? } ?>
</head>

<body<?= $HTML->attribute("class", $this->bodyClass()) ?>>

<div id="page" class="i:page">

	<div id="header">
		<ul class="servicenavigation">
			<li class="keynav front"><a href="/">Fårevejle Golf Hotel <span>- hotellet ved kirken.</span></a></li>
			<li class="contact"><a href="/kontakt">Kontakt os</a></li>
		</ul>
	</div>

	<div id="content">