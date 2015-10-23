<?php
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}

include_once($_SERVER["FRAMEWORK_PATH"]."/config/init.php");


$action = $page->actions();

$page->pageTitle("Golf tilbud på Fårevejle Golf Hotel");
$page->bodyClass("golf");

$page->header();
$page->template("pages/index.php");
$page->footer();

// // list
// if(!$action) {
//
// 	$page->header();
// 	$page->template("golf/index.php");
// 	$page->footer();
//
// }
// else if(count($action) && $action[0] == "odsherred") {
//
// 	$page->header(array("body_class" => "golf lanes", "page_title" => "Odsherred Golfklub"));
// 	$page->template("golf/odsherred.php");
// 	$page->footer();
//
// }
// else if(count($action) && $action[0] == "holbaek") {
//
// 	$page->header(array("body_class" => "golf lanes", "page_title" => "Holbæk Golfklub"));
// 	$page->template("golf/holbaek.php");
// 	$page->footer();
//
// }
// else if(count($action) && $action[0] == "dragsholm") {
//
// 	$page->header(array("body_class" => "golf lanes", "page_title" => "Odsherred Golfklub"));
// 	$page->template("golf/dragsholm.php");
// 	$page->footer();
//
// }
// else if(count($action) && $action[0] == "kalundborg") {
//
// 	$page->header(array("body_class" => "golf lanes", "page_title" => "Odsherred Golfklub"));
// 	$page->template("golf/kalundborg.php");
// 	$page->footer();
//
// }
// else if(count($action) && $action[0] == "baner") {
//
// 	$page->header(array("body_class" => "golf lanes", "page_title" => "Golfbaner"));
// 	$page->template("golf/lanes.php");
// 	$page->footer();
//
// }
// else if(count($action) && $action[0] == "tilbud") {
//
// 	$page->header(array("body_class" => "golf golfoffers", "page_title" => "Golf tilbud"));
// 	$page->template("golf/offers.php");
// 	$page->footer();
//
// }
// else if(count($action) && $action[0] == "pakke_golf_revy") {
//
// 	$page->header(array("body_class" => "golf golfoffers", "page_title" => "Golf tilbud - Golf og Revy Pakke"));
// 	$page->template("golf/pakke_golf_revy.php");
// 	$page->footer();
//
// }
// else if(count($action) && $action[0] == "pakke_1") {
//
// 	$page->header(array("body_class" => "golf golfoffers", "page_title" => "Golf tilbud - Pakke 1"));
// 	$page->template("golf/pakke_1.php");
// 	$page->footer();
//
// }
// else if(count($action) && $action[0] == "pakke_2") {
//
// 	$page->header(array("body_class" => "golf golfoffers", "page_title" => "Golf tilbud - Pakke 2"));
// 	$page->template("golf/pakke_2.php");
// 	$page->footer();
//
// }
// else if(count($action) && $action[0] == "pakke_3") {
//
// 	$page->header(array("body_class" => "golf golfoffers", "page_title" => "Golf tilbud - Pakke 3"));
// 	$page->template("golf/pakke_3.php");
// 	$page->footer();
//
// }
// else if(count($action) && $action[0] == "pakke_4") {
//
// 	$page->header(array("body_class" => "golf golfoffers", "page_title" => "Golf tilbud - Pakke 4"));
// 	$page->template("golf/pakke_4.php");
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
