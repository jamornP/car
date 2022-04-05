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
                    <div class="card-header bg-info text-white d-flex justify-content-between align-items-center">
                        <h5>ข้อมูลจองรถ</h5>
                        <div>
                        <a href="../../" class="btn btn-success text-white">ดูปฏิทิน</a>
                        <a href="form.php" class="btn btn-warning text-white">เพิ่มข้อมูล</a>
                        </div>
                        
                    </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                       
                                        <th>ชื่อ-สกุล</th>
                                        <th>วันที่ใช้รถ</th>
                                        <th>เวลา</th>
                                        <th>ปลายทาง</th>
                                        <th>เพื่อ</th>
                                        <th>รถ</th>
                                       
                                        <th></th>
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
                                                   
                                                    <td>{$name}</td>
                                                    <td>{$book['start_date']}</td>
                                                    <td>{$book['start_time']}</td>
                                                    <td>{$book['destination']}</td>
                                                    <td>{$book['title']}</td>
                                                    <td>{$book['car']}</td>
                                                  
                                                    <td>
                                                   
                                                    <a href='form.php?id={$book['id']}&action=edit' class=''>แก้ไข</a>
                                                    <a href='save.php?id={$book['id']}&action=delete' class=''>ลบ</a>
                                                    </td>
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