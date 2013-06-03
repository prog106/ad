<?
class Comm {

    function head($title='ad') {
        $v = time();
?>
<!DOCTYPE html>
<html lang="kr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title><?=$title?></title>
<link href="css/layout.css?v=<?=$v?>" rel="stylesheet" type="text/css" charset="utf-8"/>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" charset="utf-8"/>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/jquery.uploadify.min.js"></script>
</head>
<body>
<div class="container">
    <div class="header">
        <h1>AD for U</h1>
    </div>
    <div class="navbar">
        <div class="navbar-inner">
            <ul class="nav">
                <li><a href="./">Home</a></li>
                <li><a href="adform.php">Ready...</a></li>
            </ul>
        </div>
    </div>
<?
}

    function footer() {
?>
    <hr>
    <div class="footer">
        <h4>AD for U</h4>
        since 2013.
    </div>
</div>
</body>
</html>
<?
    }

}
?>
