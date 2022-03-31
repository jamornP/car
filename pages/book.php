<?php require $_SERVER['DOCUMENT_ROOT']."/car/vendor/autoload.php";?>
<?php
use App\Model\Position;
use App\Model\Department;
use App\Model\Choose;
use App\Model\Car;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบจองรถ</title>
    <link rel="stylesheet" href="../theme/css/bootstrap-theme.css">
    <link rel="stylesheet" href="../theme/css/datepicker.css">
</head>
<body class="font-mali">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mb-3">
                    <div class="card-header bg-info text-white"><h5>กรอกข้อมูล</h5></div>
                        <div class="card-body">
                            <form action="" method="post">
                                <p class="mt-3"><b>ผู้ขอ</b></p>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="">ชื่อ</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="">นามสกุล</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="">ตำแหน่ง</label>
                                            <select class="form-select" aria-label="Default select example" name="position">
                                                <option  value="">เลือก</option>
                                                <?php
                                                    $positionObj = new Position;
                                                    $positions = $positionObj->getAllPosition(); 
                                                    foreach($positions as $position) {
                                                        echo "
                                                        <option value='{$position['id']}'>{$position['name']}</option>
                                                        ";
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="">สังกัด</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>เลือก</option>
                                                <option value="1">ส่วนสนับสนุนวิชาการ</option>
                                                <option value="2">ภาควิชาสถิติ</option>
                                                <option value="3">ภาควิชาคณิตศาสตร์</option>
                                                <option value="3">ภาควิชาวิทยาการคอมพิวเตอร์</option>
                                                <option value="3">ภาควิชาฟิสิกส์</option>
                                                <option value="3">ภาควิชาชีววิทยา</option>
                                                <option value="3">ภาควิชาเคมี</option>
                                                <option value="3">ศูนย์เครื่องมือ</option>
                                                <option value="3">K-DAI</option>
                                                <option value="3">สโมสรนักศึกษา</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3"><b>วันที่ใช้รถ</b></p>
                                <hr>
                                <div class="row">
                                    <div class="col-6 col-sm-6 col-md-6 col-lg">
                                        <div class="form-group">
                                            <label for="">วันที่</label>
                                            <input type="text" id="datepicker" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-6 col-md-6 col-lg-2">
                                        <div class="form-group">
                                            <label for="">เวลา</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-6 col-md-6 col-lg">
                                        <div class="form-group">
                                            <label for="">ถึงวันที่</label>
                                            <input type="text" id="datepicker2" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-6 col-md-6 col-lg-2">
                                        <div class="form-group">
                                            <label for="">เวลา</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3"><b>รายละเอียดการเดินทาง</b></p>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="">ต้อนทาง</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="">ปลายทาง</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md col-lg">
                                        <div class="form-group">
                                            <label for="">เพื่อ</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md col-lg-2">
                                        <div class="form-group">
                                            <label for="">ผู้โดยสาร</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3"><b>ความประสงของผู้ใช้รถ</b></p>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12 col-md-4 col-lg-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                ส่งเที่ยวเดียว
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                ส่งแล้วรอรับกลับ
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
                                            <label class="form-check-label" for="flexRadioDefault3">
                                                ส่งแล้วให้ไปรับเวลา
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md col-lg">
                                        <div class="form-group">
                                            <label for="">รายละเอียดเพิ่มเติม</label>
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js'></script>
    
    <script src='../theme/js/bootstrap-datepicker.js'></script>
    <script src='../theme/js/bootstrap-datepicker-thai.js'></script>
    <script src='../theme/js/locales/bootstrap-datepicker.th.js'></script>
    <!-- <script id="rendered-js" >
        $(function () {
        $('#datepicker').datepicker();
        $('#datepicker2').datepicker();
        });
        //# sourceURL=pen.js
    </script> -->
    <script>
        $(function(){
            $("#datepicker").datepicker({
                language:'th-en',
                format:'dd/mm/yyyy',
                autoclose: true
            });
            $("#datepicker2").datepicker({
                language:'th-en',
                format:'dd/mm/yyyy',
                autoclose: true
            });
        });
    </script>
</body>
</html>