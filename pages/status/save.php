<?php require $_SERVER['DOCUMENT_ROOT']."/car/vendor/autoload.php";?>
<?php


use App\Model\Statusbook;

$statusObj = new Statusbook;

//  echo $_REQUEST['action'];
//  print_r ($_REQUEST);

if ($_REQUEST['action']=='delete'){
    $statusObj->deleteStatus($_REQUEST['id']);
}
elseif ($_REQUEST['action']=='edit'){
    $status = $_REQUEST;
    unset($status['action']);
    $statusObj->updateStatus($status);
}
elseif ($_REQUEST['action']=='add'){
    $status = $_REQUEST;
    unset($status['action']);
    unset($status['id']);
    // print_r($status);
    $statusObj->addStatus($status);
}

header('Location: index.php');


?>