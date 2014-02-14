<?php
	
$action = $this->actions();

$IC = new Item();
$itemtype = "news";


$all_items = $IC->getItems(array("itemtype" => $itemtype, "status" => 1, "limit" => 5));
	
?>
<div class="scene front i:front">

	<h1>Velkommen til F&aring;revejle Golf Hotel</h1>
	<p>
		Fårevejle Golf Hotel er et familiedrevet hotel, der ligger i det naturskønne Odsherred, med kort 
		afstand til både golf, strand og et af Sjællands højeste punkter, Vejrhøj (121m).
	</p>
	<p>
		Hotellet drives med vægt på hygge, personlig betjening, høj service, fantastisk god mad 
		med Lammefjordens produkter når det er muligt, ærlighed, ro og fred.
	</p>
	<p>
		At hotellet fik navnet Fårevejle Golf Hotel skyldes, at der i 2003 åbnede en golfbane lige udenfor 
		byen - Dragsholm Golf Club, men du behøver ikke at spille golf for at bo på hotellet.
	</p>
	<ul class="actions">
		<li><a href="/hotellet">Mere om hotellet</a></li>
	</ul>


	<hr />


	<div class="events">

		<h2>Nyt fra hotellet</h2>
		<ul class="actions">
			<li class="news"><a href="/nyheder">Alle nyheder</a></li>
		</ul>

		<ul class="events">
<? 		foreach($all_items as $item): 
			$item = $IC->getCompleteItem($item["id"]); ?>

			<li>
				<h3><?= $item["name"] ?></h3>
				<p><?= nl2br($item["short_description"]) ?></p>
<? 				if($item["link"]): ?>
				<ul class="actions">
					<li class="readmore"><a href="<?= $item["link"] ?>"<?= preg_match("/^http/", $item["link"]) ? ' target="_blank"' : "" ?>><?= $item["link_text"] ? $item["link_text"] : "L&aelig;s mere" ?></a></li>
				</ul>
<?				endif; ?>
			</li>
<? 		endforeach; ?>

			<!--li>
				<h3>Kæreste ferie på Fårevejle Golf Hotel</h3>
				<p>
					Endnu engang lykkedes det Dragsholmrevyen at få to priser ved den årlige
					uddeling på Revyernes Revy. Mette K. Madsen fik prisen som Årets Revykunstner
					(Årets Dirch) og Bente Eskesen prisen som Årets Æreskunstner. Helt fantastisk.
					Et stort tillykke fra Fårevejle Golf Hotel.
					Middag, vin og chokolade ...
				</p>
				<ul class="actions">
					<li class="readmore"><a href="/offers">L&aelig;s mere</a></li>
				</ul>
			</li>
			<li>
				<h3>4 stjerner hos Handi Travel</h3>
				<p>
					Handi Travel er en rejsedatabase for mennesker med handicap og Fårevejle Golf Hotel 
					har fået 4 stjerner.
				</p>
				<ul class="actions">
					<li class="readmore"><a href="http://www.handi-travel-info.dk/Rejsemaal.aspx?id=250" target="_blank">www.handi-travel-info.dk</a></li>
				</ul>
			</li>
			<li>
				<h3>Åbent hus</h3>
				<p>
					Søndag den 27.2.2011 havde vi åbent hus på Fårevejle Golf Hotel, hvor vi bl.a. afslørede 
					et nyt og meget originalt værk af Kasper Købke.
				</p>
				<ul class="actions">
					<li class="readmore"><a href="aabenthus.php">L&aelig;s mere</a></li>
				</ul>
			</li-->
		</ul>

	</div>

</div>
