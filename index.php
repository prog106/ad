<?
require_once "template/layout.php";
// Header
Comm::head();

// Contents
require_once "controller/index.php";
IndexController::dostart();

// Footer
Comm::footer();
?>
