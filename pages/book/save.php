<?php require $_SERVER['DOCUMENT_ROOT']."/car/pages/auth/auth.php";?>
<?php require $_SERVER['DOCUMENT_ROOT']."/car/vendor/autoload.php";?>
<?php

use App\Model\Book;
$bookObj = new Book;
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
    $bookObj->addBook($book);
}

header('Location: index.php');

?>