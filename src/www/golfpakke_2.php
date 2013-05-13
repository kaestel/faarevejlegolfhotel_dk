<?php 
	$page_title = "Golfpakke 2";
	include($_SERVER["LOCAL_PATH"]."/templates/shell_header.php");
?>

	<h1>Golfpakke 2</h1>
	<p>1 x overnatning, 1 x morgenbuffet, 1 x aftenmenu, 2 dages golf</p>

	<hr />

	<div class="c200">

		<h2>1. dag</h2>
		<ul>
			<li>Tjek ind p&aring; hotellet</li>
			<li>Golf</li>
			<li>Dagens 2 retters menu (ekskl. drikkevarer)</li>
			<li>Overnatning p&aring; hotellet</li>
		</ul>

		<h2>2. dag</h2>
		<ul>
			<li>Morgenbuffet p&aring; hotellet og tjek ud</li>
			<li>Golf</li>
		</ul>

		<hr />

		<p>Pris pr. person <strong>kr. 1.095,00</strong> i delt dobbeltv&aelig;relse.</p>
		<?php include("snippets/golf_extra_for_single_room.html") ?>

		<hr />

		<p><a href="afbestilling.php">Se afbestillingsregler</a></p>

		<hr />

		<p>&lt; <a href="golf.php">Tilbage til oversigten</a></p>

	</div>

	<?php include("snippets/golf_lane_options.html") ?>

<?php include($_SERVER["LOCAL_PATH"]."/templates/shell_footer.php") ?>