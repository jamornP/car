<?php require $_SERVER['DOCUMENT_ROOT']."/car/pages/auth/auth.php";?>
<?php require $_SERVER['DOCUMENT_ROOT']."/car/vendor/autoload.php";?>
<?php

use App\Model\Department;
$departmentObj = new Department;

// $departmentObj->adddepartment($_REQUEST);
if ($_REQUEST['action']=='delete'){
    $departmentObj->deleteDepartment($_REQUEST['id']);
}
elseif ($_REQUEST['action']=='edit'){
    $department = $_REQUEST;
    unset($department['action']);
    $departmentObj->updateDepartment($department);
}
elseif ($_REQUEST['action']=='add'){
    $department = $_REQUEST;
    unset($department['action']);
    unset($department['id']);
    $departmentObj->addDepartment($department);
}
header('Location: index.php');
?>