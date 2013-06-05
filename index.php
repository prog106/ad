<?
require_once "template/layout.php";
// Header
Comm::head();

// Contents
require_once "controller/index.php";
indexController::doalert($_GET['ad']);
IndexController::dostart();

// Footer
Comm::footer();
?>
