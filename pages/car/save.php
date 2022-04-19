<?php require $_SERVER['DOCUMENT_ROOT']."/car/pages/auth/auth.php";?>
<?php require $_SERVER['DOCUMENT_ROOT']."/car/vendor/autoload.php";?>
<?php

use App\Model\Car;
$carObj = new Car;

// $carObj->addcar($_REQUEST);
if ($_REQUEST['action']=='delete'){
    $carObj->deleteCar($_REQUEST['id']);
}
elseif ($_REQUEST['action']=='edit'){
    $car = $_REQUEST;
    unset($car['action']);
    $carObj->updateCar($car);
}
elseif ($_REQUEST['action']=='add'){
    $car = $_REQUEST;
    unset($car['action']);
    unset($car['id']);
    $carObj->addCar($car);
}
header('Location: index.php');
?>