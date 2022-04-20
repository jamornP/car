<?php require $_SERVER['DOCUMENT_ROOT']."/car/pages/auth/auth.php";?>
<?php require $_SERVER['DOCUMENT_ROOT']."/car/vendor/autoload.php";?>
<?php

use App\Model\User;
$userObj = new User;


if ($_REQUEST['action']=='edit'){
    $user = $_REQUEST;
    unset($user['action']);
    print_r($user);
    $userObj->updateUser($user);
}
 header('Location: /car/index.php');
?>