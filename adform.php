<?
require_once "controller/ad.php";
$post_array = array('tps');
foreach($post_array as $post) {
    $$post = ($_POST[$post])? : $_GET[$post];
}

if($tps == "insert") {
    $insert_array = array('title', 'desc', 'startdate', 'enddate', 'money', 'img1', 'img2');
    $params['user'] = 'prog106';
    foreach($insert_array as $k) {
        $params[$k] = $_POST[$k];
    }
    AdController::doadinsert($params);
    $result = true;
}

if($tps == "update") {
    $insert_array = array('id', 'title', 'desc', 'startdate', 'enddate', 'money', 'img1', 'img2');
    $params['user'] = 'prog106';
    foreach($insert_array as $k) {
        $params[$k] = $_POST[$k];
    }
    $result = (AdController::doadupdate($params))? true : false;
}

if($tps) {
    if($result) {
        header("Location: /?ad=success");
    } else {
        echo "<script> history.back(); </script>";
        die;
    }
}

require_once "template/layout.php";
// Header
Comm::head();

// Contents
$param_id = $_GET['id'];
AdController::doadform($param_id);

// Footer
Comm::footer();
?>
