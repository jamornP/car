<?php require $_SERVER['DOCUMENT_ROOT']."/car/vendor/autoload.php";?>
<?php

use App\Model\Car;
$carObj = new Car;

// $carObj->addcar($_REQUEST);
if ($_REQUEST['action']=='delete'){
    $carObj->deleteBook($_REQUEST['id']);
}
elseif ($_REQUEST['action']=='edit'){
    $book = $_REQUEST;
    unset($book['action']);
    $carObj->updateBook($book);
}
elseif ($_REQUEST['action']=='add'){
    $book = $_REQUEST;
    unset($book['action']);
    unset($book['id']);
    $carObj->addBook($book);
}
header('Location: index.php');
?>