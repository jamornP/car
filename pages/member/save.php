<?php require $_SERVER['DOCUMENT_ROOT']."/car/pages/auth/auth.php";?>
<?php require $_SERVER['DOCUMENT_ROOT']."/car/vendor/autoload.php";?>
<?php

use App\Model\Book;
use App\Model\Bs;
$bookObj = new Book;
$bsObj = new Bs;
print_r($_REQUEST);
echo $_REQUEST['action'];
if ($_REQUEST['action']=='delete'){
    $bookObj->deleteBook($_REQUEST['id']);
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
    $book['user_add']=$_SESSION['email'];
    $id = $bookObj->addBook($book);
    $bs['b_id'] = $id;
    $bs['sname'] = "";
    $bs['s_id'] = 1;
    $bs['user_add'] = $_SESSION['email'];
    // echo "<br>";
    // print_r($bs);
    $bsObj->addBs($bs);
}

 header('Location: index.php');

?>