<?php require $_SERVER['DOCUMENT_ROOT']."/car/vendor/autoload.php";?>
<?php
require ('../function.php');
use App\Model\Book;
use App\Model\Timebook;
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
    <!-- icon -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>
<body class="font-kanit">
    <div class="container-fuld">
        <?php require('../../nav.php');?>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mb-3">
                    <div class="card-header bg-info text-white d-flex justify-content-between align-items-center">
                        <h5>ข้อมูลจองรถ</h5>
                        <div>
                        <a href="/car/" class="btn btn-success text-white">ดูปฏิทิน</a>
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
                                        <th>สถานะ</th>
                                       
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
                                            $ds=datethai($book['start_date']);
                                            echo "
                                                <tr>
                                                    <td>{$i}</td>
                                                   
                                                    <td>{$name}</td>
                                                    <td>{$ds}</td>
                                                    <td>{$book['start_time']}</td>
                                                    <td>{$book['destination']}</td>
                                                    <td>{$book['title']}</td>
                                                    <td>{$book['car']}</td>
                                                    <td>
                                                        <div class='d-grid'>
                                                            <button class=' btn btn-sm text-white' style='background-color:{$book['color']}'>{$book['status']}</button>
                                                        </div>
                                                    </td>
                                                  
                                                    <td>
                                                        <div class='d-grid'>
                                                            <a href='' class=' btn btn-sm btn-success text-white' >ดำเนินการ</a>
                                                        </div>
                                                    </td>
                                                </tr>
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
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js'></script>
</body>
</html>