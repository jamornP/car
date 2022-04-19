
<?php require $_SERVER['DOCUMENT_ROOT']."/car/vendor/autoload.php";?>
<?php
    use App\Model\Book;

    $bookObj = new Book;
    $books = $bookObj->getAllBook();

    foreach($books as $book) {
        $json_data[] = [
            'id' => $book['id'],
                'title' => $book['title'] ,
                'start' => $book['start_date'],
                'end' => $book['end_date'],
                'url' => 'showEventsData.php?id=' . $book['id'],
                'color' => '#e3bc08',
        ];
    }
    $json = json_encode($json_data);
    echo $json;
?>