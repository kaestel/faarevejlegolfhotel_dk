<?php
	
$action = $this->actions();

$IC = new Item();
$itemtype = "news";


$all_items = $IC->getItems(array("itemtype" => $itemtype, "status" => 1, "limit" => 5));
	
?>
<div class="scene front i:front">

	<h1>Tak til alle gæster og samarbejdspartnere</h1>
	<p>
		Efter 11 år er Fårevejle Golf Hotel nu lukket for bestandigt. 
	</p>
	<p>
		Vi takker alle gæster og samarbejdspartnere
		for de gode minder - de er frugten af det hårde arbejde.
	</p>
	<!--h1>Velkommen</h1>
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
	</ul-->

	<!--ul class="associations">
		<li class="horesta">Horesta</li>
		<li class="smalldanish">Small Danish Hotels</li>
	</ul-->

	<!--hr />


	<div class="events">

		<h2>Nyt fra hotellet</h2>
		<ul class="actions">
			<li class="news"><a href="/nyheder">Alle nyheder</a></li>
		</ul>

		<ul class="events">
<? 		foreach($all_items as $item): 
			$item = $IC->extendItem($item); ?>
			<li>
				<h3><?= $item["name"] ?></h3>
				<p><?= nl2br($item["short_description"]) ?></p>
<?				if($item["long_description"]): ?>
				<ul class="actions">
					<li class="readmore"><a href="/nyheder"><?= $item["link_text"] ? $item["link_text"] : "L&aelig;s mere" ?></a></li>
				</ul>
<? 				elseif($item["link"]): ?>
				<ul class="actions">
					<li class="readmore"><a href="<?= $item["link"] ?>"<?= preg_match("/^http/", $item["link"]) ? ' target="_blank"' : "" ?>><?= $item["link_text"] ? $item["link_text"] : "L&aelig;s mere" ?></a></li>
				</ul>
<?				endif; ?>
			</li>
<? 		endforeach; ?>
		</ul>

	</div-->

</div>
