<?php
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}

include_once($_SERVER["FRAMEWORK_PATH"]."/config/init.php");


$action = $page->actions();

$page->pageTitle("Priser");
$page->bodyClass("prices");

$page->header();
$page->template("pages/index.php");
$page->footer();

// // list
// if(!count($action)) {
//
// 	$page->header();
// 	$page->template("pages/prices.php");
// 	$page->footer();
//
// }
// else {
//
// 	$page->header();
// 	$page->template("404.php");
// 	$page->footer();
//
// }

?>
