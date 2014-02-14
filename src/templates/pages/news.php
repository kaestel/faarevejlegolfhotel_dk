<?php
	
$action = $this->actions();

$IC = new Item();
$itemtype = "news";


$all_items = $IC->getItems(array("itemtype" => $itemtype, "status" => 1, "limit" => 5));

?>
<div class="scene events i:scene">

	<div class="events">

		<h2>Nyt fra hotellet</h2>

		<ul class="events">
<? 		foreach($all_items as $item): 
			$item = $IC->getCompleteItem($item["id"]); ?>

			<li>
				<h3><?= $item["name"] ?></h3>
				<p><?= $item["long_description"] ? nl2br($item["long_description"]) : nl2br($item["short_description"]) ?></p>
<? 				if($item["link"]): ?>
				<ul class="actions">
					<li class="readmore"><a href="<?= $item["link"] ?>"<?= preg_match("/^http/", $item["link"]) ? ' target="_blank"' : "" ?>><?= $item["link_text"] ? $item["link_text"] : "L&aelig;s mere" ?></a></li>
				</ul>
<?				endif; ?>
			</li>
<? 		endforeach; ?>
		</ul>

	</div>


	<!--h3>Julefrokost 6. december 2013</h3>
	<p>Fredag den 6. december 2013, kl 18.30 - 01.00 med musik og dans. Henry O'Connor sørger for de musikalske indslag.

	<p>Julefrokost med vores formidable julebuffet kr. 350,- pr. person.</p>
	<p>Med overnatning kr. 650,- pr. person i dobbelt værelse Tillæg kr. 200,- for enkelt værelse.</p>
 
	<p>Vi vil glæde os til at hygge om jer......Om i er 1, 2, 4 eller flere skal I være hjertelig velkomne.</p>

	<hr />

	<p><a href="/betingelser">Se afbestillingsregler</a></p-->

</div>