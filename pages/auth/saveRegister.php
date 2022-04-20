
<?php require $_SERVER['DOCUMENT_ROOT']."/car/vendor/autoload.php";?>
<?php
use App\Model\User;

$userObj = new User;
print_r($_POST);
$ck=explode("@",$_POST['email']);
if($ck[1]!='kmitl.ac.th'){
    header("location: /car/pages/auth/register.php?msg=email");
    exit;
}
$result = $userObj->createUser($_POST);
if($result) {
    header("location: /car/pages/member/index.php");
}else {
    header("location: /car/pages/auth/register.php?msg=error");
}

?>