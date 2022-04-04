<?php require $_SERVER['DOCUMENT_ROOT']."/car/vendor/autoload.php";?>

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
                        <h5>แบบฟอร์ม รถ</h5>
                        <a href="index.php" class="btn btn-primary">ย้อนกลับ</a>
                    </div>
                        <div class="card-body">
                            <form action="save.php" method="get">
                                <p class="mt-3"><b>ชนิดรถ</b></p>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="name">ชื่อชนิดรถ</label>
                                            <input type="text" id="name" class="form-control" name="name" autofocus required>
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
                format: 'yyyy/mm/dd',
                autoclose: true
            });
            $("#datepicker2").datepicker({
                language:'th-en',
                format:'yyyy/mm/dd',
                autoclose: true
            });
        });
    </script>
</body>
</html>