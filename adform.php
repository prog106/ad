<?
require_once "template/layout.php";
// Header
Comm::head();

// Contents
require_once "controller/ad.php";
AdController::doadform();

// Footer
Comm::footer();
?>
