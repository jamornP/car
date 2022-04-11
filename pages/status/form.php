<?php require $_SERVER['DOCUMENT_ROOT']."/car/vendor/autoload.php";?>
<?php

use App\Model\Statusbook;

if($_REQUEST['action']=='edit'){
    $statusObj = new Statusbook;
    $status = $statusObj->getStatusById($_REQUEST['id']);
}
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
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mb-3">
                    <div class="card-header bg-info text-white d-flex justify-content-between align-items-center">
                        <h5>ข้อมูลสถานะใบจองรถ</h5>
                        <div>
                        <!-- <a href="../../" class="btn btn-success text-white">ดูปฏิทิน</a> -->
                        <a href="form.php" class="btn btn-warning text-white">ย้อนกลับ</a>
                        </div>
                        
                    </div>
                    <div class="card-body">
                        <form action="save.php" method="get">
                            <input type="hidden" name="action" value="<?php echo ($_REQUEST['action']=='edit') ? "edit" : "add";?>">
                            <input type="hidden" name="id" value="<?php echo $status['id']; ?>">
                            <!-- <p class="mt-3"><b>ผู้ขอ</b></p>
                            <hr> -->
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-3">
                                    <div class="form-group">
                                        <label for="name" class="form-label">สถานะ</label>
                                        <input type="text" id="name" class="form-control" name="name" autofocus required value="<?php echo $status['name']; ?>">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-3">
                                    <label for="exampleColorInput" class="form-label">เลือกสี</label>
                                    <input type="color" class="form-control form-control-color" id="exampleColorInput" value="<?php echo $status['color']; ?>" title="Choose your color" name="color">
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-3">
                                
                                <label for="remark"class="form-label"></label>
                                    <button type="submit"class="btn btn-success form-control text-white">บันทึก</button>
                                </div>
                            </row>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>