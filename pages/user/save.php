<?php require $_SERVER['DOCUMENT_ROOT']."/car/pages/auth/auth.php";?>
<?php require $_SERVER['DOCUMENT_ROOT']."/car/vendor/autoload.php";?>
<?php

use App\Model\User;
$userObj = new User;


if ($_REQUEST['action']=='edit'){
    if($_REQUEST['role']!=''){
        $user = $_REQUEST;
        unset($user['action']);
        print_r($user);
        $userObj->updateUserAdmin($user,date("Y-m-d H:i:sa"));
    }else{
    $user = $_REQUEST;
    unset($user['action']);
    print_r($user);
    $userObj->updateUser($user,date("Y-m-d H:i:sa"));
    }
}elseif ($_REQUEST['action']=='delete'){
     $userObj->deleteUser($_REQUEST['id']);
}
  header('Location: /car/pages/user/index.php');
?>