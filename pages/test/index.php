<?php require $_SERVER['DOCUMENT_ROOT']."/car/vendor/autoload.php";?>
<?php
use App\Model\Test;
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
                        <h5>ข้อมูลประเภทรถ</h5>
                        <a href="form.php" class="btn btn-warning text-white">เพิ่มข้อมูล</a>
                    </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>name</th>
                                        <th>surname</th>
                                        <th>date_add</th>
                                        <th>start_date</th>
                                        <th>start_time</th>
                                    
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $testObj = new Test;
                                        $tests = $testObj->getAllTest(); 
                                        $i=0;
                                        foreach($tests as $test) {
                                            $i++;
                                            echo "
                                                <tr>
                                                    <td>{$i}</td>
                                                    <td>{$test['name']}</td>
                                                    <td>{$test['surname']}</td>
                                                    <td>{$test['date_add']}</td>
                                                    <td>{$test['start_date']}</td>
                                                    <td>{$test['start_time']}</td>
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