<?php require $_SERVER['DOCUMENT_ROOT']."/car/vendor/autoload.php";?>
<?php

use App\Model\Test;
$testObj = new Test;
$testObj->addTest($_REQUEST);
header('Location: index.php');
?>