
<?php
// $access_item["/"]= true;
$access_item["/"] = false; $access_item["/test1"] = true; $access_item["/test2"] = true;
 if(isset($read_access) && $read_access) {
 	return;
 }
//$access_item["/"] = false; $access_item["/test1"] = true;
include_once($_SERVER["FRAMEWORK_PATH"]."/config/init.php");
$action = $page->actions();
$page->bodyClass("Octavian");
$page->pageTitle("Octavian's template");
if(count($action) == 1 && $action[0] == "test1") {
	$page->page(array(
		"templates" => "pages/testPage1.php"
	));
	exit();
}
else if(count($action) == 1 && $action[0] == "test2") {
	$page->page(array(
		"templates" => "pages/testPage2.php"
	));
	exit();
}
// Add additional parameters, test1 and test2,
// to go to pages sarahs_template/test1, etc
// else if(count($action) >= 2 && $action[0] == "test1") {
// 	$page->page(array(
// 		"templates" => "pages/sarahs_template_test1.php"
// 	));
// 	exit();
//
// }
// Sets default, where no parameter=index page
$page->page(array(
	"templates" => "pages/testPage.php"
));
exit();
?>