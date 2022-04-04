<?php require $_SERVER['DOCUMENT_ROOT']."/car/vendor/autoload.php";?>
<?php

use App\Model\Book;
$bookObj = new Book;
// echo $_REQUEST['action'];
if ($_REQUEST['action']=='delete'){
    $bookObj->deleteBook($_REQUEST['id']);
}
elseif ($_REQUEST['action']=='edit'){
    $bookObj->updateBook($_REQUEST);
}
elseif ($_REQUEST['action']=='add'){
    $bookObj->addBook($_REQUEST);
}

header('Location: index.php');

?>