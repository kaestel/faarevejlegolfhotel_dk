<?php 
	$page_title = "Golfpakke 1";
	include($_SERVER["LOCAL_PATH"]."/templates/shell_header.php");
?>

	<h1>Golfpakke 1</h1>
	<p>1 x overnatning, 1 x morgenbuffet, 1 dags golf</p>

	<hr />

	<div class="c200">

		<h2>1. dag</h2>
		<ul>
			<li>Tjek ind og overnatning p&aring; hotellet</li>
		</ul>

		<h2>2. dag</h2>
		<ul>
			<li>Morgenbuffet p&aring; hotellet</li>
			<li>Golf</li>
		</ul>

		<hr />

		<p>Pris pr. person <strong>kr. 650,00</strong> i delt dobbeltv&aelig;relse.</p>
		<p>Till&aelig;g for enkeltv&aelig;relse 200,00 kr. pr. nat.</p>

		<hr />

		<p><a href="/betingelser">Se afbestillingsregler</a></p>

		<hr />

		<p>&lt; <a href="golf.php">Tilbage til oversigten</a></p>

	</div>

	<?php include("snippets/golf_lane_options.html") ?>

<?php include($_SERVER["LOCAL_PATH"]."/templates/shell_footer.php") ?>