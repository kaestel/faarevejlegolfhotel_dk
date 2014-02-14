<?php

$action = $this->actions();

$IC = new Item();
$itemtype = "news";

$model = $IC->typeObject($itemtype);

?>
<div class="scene defaultNew">
	<h1>New news posting</h1>

	<ul class="actions">
		<li class="cancel"><a href="/admin/<?= $itemtype ?>/list" class="button">Back</a></li>
	</ul>

	<form action="/admin/cms/save/<?= $itemtype ?>" class="i:formDefaultNew labelstyle:inject" method="post" enctype="multipart/form-data">

		<fieldset>
			<?= $model->input("name") ?>
			<?= $model->input("short_description") ?>
			<?= $model->input("long_description") ?>
			<?= $model->input("link") ?>
			<?= $model->input("link_text") ?>
			<?= $model->input("classname") ?>
		</fieldset>

		<ul class="actions">
			<li class="cancel"><a href="/admin/<?= $itemtype ?>/list" class="button key:esc">Back</a></li>
			<li class="save"><input type="submit" value="Save" class="button primary key:s" /></li>
		</ul>

	</form>

</div>
