<?php 
	$page_title = "Golfpakke 4 Gourmet";
	include($_SERVER["LOCAL_PATH"]."/templates/shell_header.php");
?>

	<h1>Golfpakke 4 Gourmet</h1>
	<p>2 x overnatning, 2 x morgenbuffet, 2 x aftenmenu, 3 dages golf</p>

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
			<li>Morgenbuffet p&aring; hotellet</li>
			<li>Golf</li>
			<li>Gourmetmiddag: Velkomstdrink, 4 retters menu og kaffe med chokolade <strong style="color: #FF0000">*</strong></li>
			<li>Overnatning p&aring; hotellet</li>
		</ul>

		<h2>3. dag</h2>
		<ul>
			<li>Morgenbuffet p&aring; hotellet og tjek ud</li>
			<li>Golf</li>
		</ul>

		<hr />

		<p>Pris pr. person <strong>kr. 2.295,00</strong> i delt dobbeltv&aelig;relse.</p>
		<?php include("snippets/golf_extra_for_single_room.html") ?>

		<p><strong style="color: #FF0000">*</strong> Gourmetmiddag kan efter &oslash;nske indtages p&aring; 1. dagen.</p>

		<hr />

		<p><a href="/betingelser">Se afbestillingsregler</a></p>

		<hr />

		<p>&lt; <a href="golf.php">Tilbage til oversigten</a></p>

	</div>

	<?php include("snippets/golf_lane_options.html") ?>

<?php include($_SERVER["LOCAL_PATH"]."/templates/shell_footer.php") ?>