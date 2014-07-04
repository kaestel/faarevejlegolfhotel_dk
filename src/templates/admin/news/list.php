<?php

global $action;
global $IC;
global $model;
global $itemtype;

$all_items = $IC->getItems(array("itemtype" => $itemtype, "order" => "status DESC"));
?>
<div class="scene defaultList <?= $itemtype ?>List">
	<h1>News</h1>

	<ul class="actions i:actions">
		<?= $HTML->link("New post", "/admin/".$itemtype."/new", array("class" => "button primary key:n", "wrapper" => "li.new")) ?>
	</ul>

	<div class="all_items i:defaultList taggable filters">
<?		if($all_items): ?>
		<ul class="items">
<?			foreach($all_items as $item): 
				$item = $IC->extendItem($item, array("tags" => true)); ?>
			<li class="item item_id:<?= $item["id"] ?> format:<?= $item["files"] ?>">
				<h3><?= $item["name"] ?></h3>

<?				if($item["tags"]): ?>
				<ul class="tags">
<?					foreach($item["tags"] as $tag): ?>
					<li><span class="context"><?= $tag["context"] ?></span>:<span class="value"><?= $tag["value"] ?></span></li>
<?					endforeach; ?>
				</ul>
<?				endif; ?>

				<ul class="actions">
					<?= $HTML->link("Edit", "/admin/".$itemtype."/edit/".$item["id"], array("class" => "button", "wrapper" => "li.edit")) ?>
					<?= $HTML->deleteButton("Delete", "/admin/cms/delete/".$item["id"], array("js" => true)) ?>
					<?= $HTML->statusButton("Enable", "Disable", "/admin/cms/status", $item, array("js" => true)) ?>
				</ul>
			 </li>
<?			endforeach; ?>
		</ul>
<?		else: ?>
		<p>No news.</p>
<?		endif; ?>
	</div>

</div>
