<?php
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}
include_once($_SERVER["FRAMEWORK_PATH"]."/config/init.php");

$action = $page->actions();
$page->bodyClass("testPage");
$page->pageTitle("testPage");

$page->page(array(
	"templates" => "pages/testPage.php"
	)
);
exit();

?>
