<?php
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}

include_once($_SERVER["FRAMEWORK_PATH"]."/config/init.php");


$action = $page->actions();

$page->pageTitle("Også for ikke-golfere");
$page->bodyClass("front");

$page->header();
$page->template("pages/index.php");
$page->footer();

?>
