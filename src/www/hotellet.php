<?php
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}

include_once($_SERVER["FRAMEWORK_PATH"]."/config/init.php");


$action = $page->actions();


$page->pageTitle("Hotellet");
$page->bodyClass("hotel");


$page->header();
$page->template("pages/index.php");
$page->footer();

//
// // list
// if(!$action) {
//
// 	$page->header();
// 	$page->template("pages/hotel.php");
// 	$page->footer();
//
// }
// else if(count($action) && $action[0] == "vaerelser") {
//
// 	$page->header(array("body_class" => "hotel rooms", "page_title" => "Værelserne"));
// 	$page->template("pages/rooms.php");
// 	$page->footer();
//
// }
// else if(count($action) && $action[0] == "konference") {
//
// 	$page->header(array("body_class" => "hotel conference", "page_title" => "Konferencer"));
// 	$page->template("pages/conference.php");
// 	$page->footer();
//
// }
// else if(count($action) && $action[0] == "selskaber") {
//
// 	$page->header(array("body_class" => "hotel parties", "page_title" => "Selskaber"));
// 	$page->template("pages/parties.php");
// 	$page->footer();
//
// }
// else if(count($action) && $action[0] == "restaurant") {
//
// 	$page->header(array("body_class" => "hotel restaurant", "page_title" => "Restaurant"));
// 	$page->template("pages/restaurant.php");
// 	$page->footer();
//
// }
// else if(count($action) && $action[0] == "lokalomraadet") {
//
// 	$page->header(array("body_class" => "hotel local", "page_title" => "Lokalområdet"));
// 	$page->template("pages/local.php");
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
