<?php require $_SERVER['DOCUMENT_ROOT']."/car/pages/auth/auth.php";?>
<?php require $_SERVER['DOCUMENT_ROOT']."/car/vendor/autoload.php";?>
<?php

use App\Model\Choose;
$chooseObj = new Choose;

// $chooseObj->addChoose($_REQUEST);
if ($_REQUEST['action']=='delete'){
    $chooseObj->deleteChoose($_REQUEST['id']);
}
elseif ($_REQUEST['action']=='edit'){
    $choose = $_REQUEST;
    unset($choose['action']);
    $chooseObj->updateChoose($choose);
}
elseif ($_REQUEST['action']=='add'){
    $choose = $_REQUEST;
    unset($choose['action']);
    unset($choose['id']);
    $chooseObj->addChoose($choose);
}
header('Location: index.php');
?>