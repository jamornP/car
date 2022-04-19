<?php require $_SERVER['DOCUMENT_ROOT']."/car/pages/auth/auth.php";?>
<?php require $_SERVER['DOCUMENT_ROOT']."/car/vendor/autoload.php";?>
<?php
use App\Model\Statusbook;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบจองรถ</title>
    <link rel="stylesheet" href="../../theme/css/bootstrap-theme.css">
    <!-- icon -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>
<body class="font-kanit">
    <div class="">
        <?php require $_SERVER['DOCUMENT_ROOT']."/car/inc/components/navbar.php";?>

    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mb-3">
                    <div class="card-header bg-info text-white d-flex justify-content-between align-items-center">
                        <h5>ข้อมูลสถานะใบจองรถ</h5>
                        <div>
                        <!-- <a href="../../" class="btn btn-success text-white">ดูปฏิทิน</a> -->
                        <a href="form.php" class="btn btn-warning text-white"><i class='bx bx-plus-medical' ></i> เพิ่มข้อมูล</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>สถานะ</th>
                                    <th>สี</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $statusObj = new Statusbook;
                                    $statuss = $statusObj->getAllStatus(); 
                                    $i=0;
                                    foreach($statuss as $status) {
                                        $i++;
                                        echo "
                                            <tr>
                                                <td>{$i}</td>
                                                <td>{$status['name']}</td>
                                                <td><input type='color' class=''  value='{$status['color']}'></td>
                                                <td align='right'>
                                                        <a href='form.php?id={$status['id']}&action=edit' class='me-md-2 btn btn-sm btn-warning text-white'><i class='bx bx-message-square-edit' ></i> แก้ไข</a>
                                                        <a href='save.php?id={$status['id']}&action=delete' class='btn btn-sm btn-danger text-white'><i class='bx bx-message-square-minus' ></i> ลบ</a>
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
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js'></script>
</body>
</html>