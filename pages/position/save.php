<?php require $_SERVER['DOCUMENT_ROOT']."/car/pages/auth/auth.php";?>
<?php require $_SERVER['DOCUMENT_ROOT']."/car/vendor/autoload.php";?>
<?php

use App\Model\Position;
$positionObj = new Position;

// $positionObj->addposition($_REQUEST);
if ($_REQUEST['action']=='delete'){
    $positionObj->deletePosition($_REQUEST['id']);
}
elseif ($_REQUEST['action']=='edit'){
    $position = $_REQUEST;
    unset($position['action']);
    $positionObj->updatePosition($position);
}
elseif ($_REQUEST['action']=='add'){
    $position = $_REQUEST;
    unset($position['action']);
    unset($position['id']);
    $positionObj->addPosition($position);
}
header('Location: index.php');
?>