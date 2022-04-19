<?php require $_SERVER['DOCUMENT_ROOT']."/car/pages/auth/auth.php";?>
<?php require $_SERVER['DOCUMENT_ROOT']."/car/vendor/autoload.php";?>
<?php
use App\Model\User;

$userObj = new User;
print_r($_POST);
$result = $userObj->createUser($_POST);
if($result) {
    header("location: /car/pages/member/index.php");
}else {
    header("location: /car/pages/autn/register.php?msg=error");
}

?>