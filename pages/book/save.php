<?php require $_SERVER['DOCUMENT_ROOT']."/car/pages/auth/auth.php";?>
<?php require $_SERVER['DOCUMENT_ROOT']."/car/vendor/autoload.php";?>
<?php

use App\Model\Book;
use App\Model\Bs;

$bookObj = new Book;
$bsObj = new Bs;
use App\Model\Line;
$lineObj = new Line;
print_r($_REQUEST);
echo $_REQUEST['action'];
echo="<br>";
if ($_REQUEST['action']=='delete'){
    $bookObj->deleteBook($_REQUEST['id']);
    $bookObj->deleteBsByBook($_REQUEST['id']);
}
elseif ($_REQUEST['action']=='edit'){
    $book = $_REQUEST;
    unset($book['action']);
    $bookObj->updateBook($book);
}
elseif ($_REQUEST['action']=='add'){
    $book = $_REQUEST;
    unset($book['action']);
    unset($book['id']);
    $id=$bookObj->addBook($book);
    // echo $id;
    $bs['b_id'] = $id;
    $bs['sname'] = "";
    $bs['s_id'] = 1;
    $bs['user_add'] = $_SESSION['email'];
    // print_r($bs);
    $bsObj->addBs($bs);
   
}

 header('Location: index.php');

?>