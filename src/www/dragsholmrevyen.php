<?php
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}

include_once($_SERVER["FRAMEWORK_PATH"]."/config/init.php");


$action = $page->actions();

$page->pageTitle("Dragsholmrevyen 2014");
$page->bodyClass("revy");

// list
if(count($action)) {

	$page->header();
	$page->template("pages/dragsholmrevyen.php");
	$page->footer();

}
else {

	$page->header();
	$page->template("404.php");
	$page->footer();

}

?>
