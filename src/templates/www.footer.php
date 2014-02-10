	</div>

	<div id="navigation">
		<ul>
			<li class="hotel">
				<a href="/hotellet">Hotellet</a>
				<ul>
					<li class="rooms"><a href="/hotellet/vaerelser">V&aelig;relser</a></li>
					<li class="parties"><a href="/hotellet/selskaber">Selskaber</a></li>
					<li class="conference"><a href="/hotellet/konference">Konference</a></li>
					<li class="restaurant"><a href="/hotellet/restaurant">Restaurant</a></li>
				</ul>
			</li>
			<li class="golf">
				<a href="/golf">Golf</a>
				<!--ul>
					<li<?= preg_match("/golf/", $_SERVER["PHP_SELF"]) ? ' class="selected"' : '' ?>><a href="golf.php">Golfpakker</a></li>
					<li<?= $_SERVER["PHP_SELF"] == "/restaurant_bothwell.php" ? ' class="selected"' : '' ?>><a href="restaurant_bothwell.php">Café og Restaurant Bothwell</a></li>
				</ul-->
			</li>

			<li class="prices"><a href="/priser">Priser</a></li>
			<li class="events"><a href="/tilbud">Tilbud</a></li-->
			<li class="contact"><a href="/kontakt">Kontakt os</a></li>

			<!--li class="events"><a href="/arrangementer">Nyheder</a></li-->

			<!--li<?= $_SERVER["PHP_SELF"] == "/ferieophold.php" ? ' class="selected"' : '' ?>><a href="ferieophold.php">Ferieophold</a></li-->
			<!--li<?= $_SERVER["PHP_SELF"] == "/haandvaerkere.php" ? ' class="selected"' : '' ?>><a href="haandvaerkere.php">H&aring;ndv&aelig;rkertilbud</a></li-->
			<!--li<?= $_SERVER["PHP_SELF"] == "/dragsholm_revyen.php" ? ' class="selected"' : '' ?>>
				<a href="dragsholm_revyen.php">Dragsholmrevyen</a>
				<ul>
					<li<?= $_SERVER["PHP_SELF"] == "/dragsholm_revyen_2014.php" ? ' class="selected"' : '' ?>><a href="dragsholm_revyen_2014.php">Dragsholmrevyen 2014</a></li>
					<li<?= $_SERVER["PHP_SELF"] == "/dragsholm_revyen_2013.php" ? ' class="selected"' : '' ?>><a href="dragsholm_revyen_2013.php">Dragsholmrevyen 2013</a></li>
					<li<?= $_SERVER["PHP_SELF"] == "/dragsholm_revyen_2012.php" ? ' class="selected"' : '' ?>><a href="dragsholm_revyen_2012.php">Dragsholmrevyen 2012</a></li>
				</ul>
			</li-->
			<!--li<?= $_SERVER["PHP_SELF"] == "/lokalomraadet.php" ? ' class="selected"' : '' ?> class="nomobile"><a href="lokalomraadet.php">Lokalomr&aring;det</a></li-->
			<!--li<?= $_SERVER["PHP_SELF"] == "/links.php" ? ' class="selected"' : '' ?> class="nomobile"><a href="links.php">Links</a></li-->
		</ul>

	</div>

	<div id="footer">
		<div class="vcard company" itemscope itemtype="http://schema.org/Organization">
			<div class="name fn org" itemprop="name">Fårevejle Golf Hotel</div>
			<div class="telephone"><a itemprop="telephone" href="callto:+4559654200">+45 5965 4200</a></div>
			<div class="email"><a itemprop="email" href="mailto:email@faarevejlegolfhotel.dk">email@faarevejlegolfhotel.dk</a></div>
		</div>

		<ul class="associations">
			<li class="hotesta"><a href="http://www.horesta.dk" target="_blank">Horesta</a></li>
			<li class="sdh"><a href="http://www.smalldanishhotels.dk/">Small Danish Hotels</a></li>
		</ul>
	</div>

</div>

</body>
</html>