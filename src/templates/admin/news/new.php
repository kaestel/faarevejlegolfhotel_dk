<?php

$action = $this->actions();

$IC = new Item();
$itemtype = "news";

$model = $IC->typeObject($itemtype);

?>
<div class="scene defaultNew">
	<h1>New news posting</h1>

	<ul class="actions">
		<?= $model->link("Back", "/admin/".$itemtype."/list", array("class" => "button", "wrapper" => "li.cancel")) ?>
	</ul>

	<?= $model->formStart("/admin/cms/save/".$itemtype, array("class" => "i:formDefaultNew labelstyle:inject")) ?>
		<fieldset>
			<?= $model->input("name") ?>
			<?= $model->input("short_description") ?>
			<?= $model->input("long_description") ?>
			<?= $model->input("link") ?>
			<?= $model->input("link_text") ?>
			<?= $model->input("classname") ?>
		</fieldset>

		<ul class="actions">
			<?= $model->link("Back", "/admin/".$itemtype."/list", array("class" => "button key:esc", "wrapper" => "li.cancel")) ?>
			<?= $model->submit("Save", array("class" => "primary key:s", "wrapper" => "li.save")) ?>
		</ul>
	<?= $model->formEnd() ?>

</div>
