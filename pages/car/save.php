<?php require $_SERVER['DOCUMENT_ROOT']."/car/vendor/autoload.php";?>
<?php

use App\Model\Car;
$carObj = new Car;

$carObj->addcar($_REQUEST);

header('Location: index.php');
?>