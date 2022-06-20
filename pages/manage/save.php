<?php require $_SERVER['DOCUMENT_ROOT']."/car/pages/auth/auth.php";?>
<?php require $_SERVER['DOCUMENT_ROOT']."/car/vendor/autoload.php";?>
<?php
use App\Model\Book;
use App\Model\Bs;
$bookObj = new Book;
$bsObj = new Bs;
use App\Model\Line;
$lineObj = new Line;

$_REQUEST['user_add'] = $_SESSION['email'];
// print_r($_REQUEST);
$bsObj->addBs($_REQUEST);
$lineObj->SentLine();


$book = $_REQUEST;
unset($book['sname']);
unset($book['tel']);
unset($book['user_add']);
unset($book['number']);
$bookObj->updateBookStatus($book);
header('Location: /car/pages/book/index.php');
?>