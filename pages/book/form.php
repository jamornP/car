<?php require $_SERVER['DOCUMENT_ROOT']."/car/vendor/autoload.php";?>
<?php

use App\Model\Book;
use App\Model\Position;
use App\Model\Department;
use App\Model\Choose;
use App\Model\Car;
if(isset($_REQUEST['action'])){
if($_REQUEST['action']=='edit'){
    $bookObj = new Book;
    $book = $bookObj->getBookById($_REQUEST['id']);
}
}
echo $_REQUEST['action'];

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
                        <h5>แบบฟอร์ม จองรถ คณะวิทยาศาสตร์</h5>
                        <a href="index.php" class="btn btn-primary">ย้อนกลับ</a>
                    </div>
                        <div class="card-body">
                            <form action="save.php" method="get">
                                <input type="text" name="action" value="<?php echo ($_REQUEST['action']=='edit') ? "edit" : "add";?>">
                                <p class="mt-3"><b>ผู้ขอ</b></p>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="name">ชื่อ</label>
                                            <input type="text" id="name" class="form-control" name="name" autofocus required value="<?php echo $book['name']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="surname">นามสกุล</label>
                                            <input type="text" id="surname" class="form-control" name="surname" required value="<?php echo $book['surname']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="position">ตำแหน่ง</label>
                                            <select class="form-select" aria-label="Default select example" id="position" name="position" required>
                                                <option  value="">เลือก</option>
                                                <?php
                                                    $positionObj = new Position;
                                                    $positions = $positionObj->getAllPosition(); 
                                                    foreach($positions as $position) {
                                                        $selected =($position['id']==$book['p_id']) ? 
                                                        "selected" : "";
                                                        echo "
                                                        <option value='{$position['id']}' {$selected} >{$position['name']}</option>
                                                        ";
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="department">สังกัด</label>
                                            <select class="form-select" aria-label="Default select example" id="department" name="department" required>
                                                <option value="">เลือก</option>
                                                <?php
                                                    $departmentObj = new Department;
                                                    $departments = $departmentObj->getAlldepartment(); 
                                                    foreach($departments as $department) {
                                                        $selected =($department['id']==$book['d_id']) ? 
                                                        "selected" : "";
                                                        echo "
                                                        <option value='{$department['id']}' {$selected} >{$department['name']}</option>
                                                        ";
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3"><b>วันที่ใช้รถ</b></p>
                                <hr>
                                <div class="row">
                                    <div class="col-6 col-sm-6 col-md-6 col-lg">
                                        <div class="form-group">
                                            <label for="datepicker">วันที่</label>
                                            <input type="text" id="datepicker" class="form-control" name="start_date" required autocomplete="off" value="<?php echo $book['start_date']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-6 col-md-6 col-lg-2">
                                        <div class="form-group">
                                            <label for="start_time">เวลา</label>
                                            <input type="text" class="form-control" placeholder="08:30" id="start_time" name="start_time" required value="<?php echo $book['start_time']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-6 col-md-6 col-lg">
                                        <div class="form-group">
                                            <label for="datepicker2">ถึงวันที่</label>
                                            <input type="text" id="datepicker2" class="form-control" name="end_date" required autocomplete="off" value="<?php echo $book['end_date']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-6 col-md-6 col-lg-2">
                                        <div class="form-group">
                                            <label for="end_time">เวลา</label>
                                            <input type="text" class="form-control" placeholder="16:30" id="end_time" name="end_time" required value="<?php echo $book['end_time']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3"><b>รายละเอียดการเดินทาง</b></p>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="origin">ต้นทาง</label>
                                            <input type="text" class="form-control" id="origin" name="origin" required value="<?php echo $book['origin']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="destination">ปลายทาง</label>
                                            <input type="text" class="form-control" id="destination" name="destination" required value="<?php echo $book['destination']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md col-lg">
                                        <div class="form-group">
                                            <label for="title">เพื่อ</label>
                                            <input type="text" class="form-control" id="title" name="title" required value="<?php echo $book['title']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md col-lg-2">
                                        <div class="form-group">
                                            <label for="count">ผู้โดยสาร</label>
                                            <input type="text" class="form-control" id="count" name="count" required value="<?php echo $book['count']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3"><b>ความประสงของผู้ใช้รถ</b></p>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12 col-md-4 col-lg-3">
                                        <?php
                                            $chooseObj = new Choose;
                                            $chooses = $chooseObj->getAllchoose(); 
                                            $i=0;
                                            foreach($chooses as $choose) {
                                                // if($i == 0){
                                                //     $a="checked";
                                                // }else{
                                                //     $a="";
                                                // }
                                                $selected =($choose['id']==$book['ch_id']) ? 
                                                "checked" : "";
                                                echo "
                                                    <div class='form-check'>
                                                        <input class='form-check-input' type='radio' name='choose' id='flexRadioDefault{$choose['id']}' {$selected} value='{$choose['id']}'>
                                                        <label class='form-check-label' for='flexRadioDefault{$choose['id']}'>
                                                        {$choose['name']}
                                                        </label>
                                                    </div>
                                                ";
                                                $i++;
                                            }
                                            
                                        ?>
                                    </div>
                                    
                                    <div class="col-sm-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                            <label for="car">ประเถทรถ</label>
                                            <select class="form-select" aria-label="Default select example" id="car" name="car" required>
                                                <option value="">เลือก</option>
                                                <?php
                                                    $carObj = new Car;
                                                    $cars = $carObj->getAllcar(); 
                                                    foreach($cars as $car) {
                                                        $selected =($car['id']==$book['c_id']) ? 
                                                        "selected" : "";
                                                        echo "
                                                        <option value='{$car['id']}' {$selected} >{$car['name']}</option>
                                                        ";
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md col-lg">
                                        <div class="form-group">
                                            <label for="remark">รายละเอียดเพิ่มเติม</label>
                                            <textarea rows="<?php echo $i-1;?>" class="form-control" id="remark" name="remark" required><?php echo $book['remark']; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2 d-flex justify-content-rigth">
                                    <button class="btn btn-success text-white" type="submit">บันทึก</button>
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
    
    <script src='../../theme/js/bootstrap-datepicker.js'></script>
    <script src='../../theme/js/bootstrap-datepicker-thai.js'></script>
    <script src='../../theme/js/locales/bootstrap-datepicker.th.js'></script>
    
    <script>
        $(function(){
            $("#datepicker").datepicker({
                language:'th-en',
                format: 'yyyy-mm-dd',
                autoclose: true
            });
            $("#datepicker2").datepicker({
                language:'th-en',
                format:'yyyy-mm-dd',
                autoclose: true
            });
        });
    </script>
</body>
</html>