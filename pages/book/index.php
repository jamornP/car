<?php require $_SERVER['DOCUMENT_ROOT']."/car/vendor/autoload.php";?>
<?php
use App\Model\Book;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบจองรถ</title>
    <link rel="stylesheet" href="../../theme/css/bootstrap-theme.css">
    <link rel="stylesheet" href="../../theme/css/datepicker.css">
</head>
<body class="font-mali">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mb-3">
                    <div class="card-header bg-info text-white"><h5>ข้อมูลจองรถ</h5></div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>วันที่</th>
                                        <th>ชื่อ-สกุล</th>
                                        <!-- <th>สังกัด</th> -->
                                        <th>วันที่ใช้รถ</th>
                                        <!-- <th>ต้นทาง</th> -->
                                        <th>ปลายทาง</th>
                                        <th>เพื่อ</th>
                                        <!-- <th>จำนวน(คน)</th> -->
                                        <th>ต้องการ</th>
                                        <th>รายละเอียด</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $bookObj = new Book;
                                        $books = $bookObj->getAllbook(); 
                                        $i=0;
                                        foreach($books as $book) {
                                            $i++;
                                            $name=$book['name']." ".$book['surname'];
                                            echo "
                                                <tr>
                                                    <td>{$i}</td>
                                                    <td>{$book['date_register']}</td>
                                                    <td>{$name}</td>
                                                    <td>{$book['start_date']}</td>
                                                    <td>{$book['destination']}</td>
                                                    <td>{$book['title']}</td>
                                                    <td>{$book['choose']}</td>
                                                    <td>{$book['remark']}</td>
                                                <td>
                                            ";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>