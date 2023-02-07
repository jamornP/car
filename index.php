<?php require $_SERVER['DOCUMENT_ROOT']."/car/vendor/autoload.php"; ?>

<?php 
require('./pages/function.php');
    use App\Model\Book;
    use App\Model\Position;
    use App\Model\Department;
    use App\Model\Choose;
    use App\Model\Car;
    use App\Model\Statusbook;
    date_default_timezone_set('Asia/Bangkok');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบจองรถ</title>
    <link rel="stylesheet" href="./lib/jquery.fancybox.css" media="screen">
    <link rel="stylesheet" href="./fullcalendar/fullcalendar.css">
    <link rel="stylesheet" href="./fullcalendar/fullcalendar.print.css" media='print'>
    <link rel="stylesheet" href="./theme/css/bootstrap-theme.css">
    <!-- icon -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <script src="./lib/jquery/dist/jquery.min.js"></script>
    <script src="./lib/moment.min.js"></script>
    <script src="./fullcalendar/fullcalendar.min.js"></script>
    <script src="./lib/lang/th.js"></script>
    <script src="./lib/jquery.fancybox.pack.js"></script>
</head>
<body class="font-kanit">

<div class="">
<?php 
session_start();
    require $_SERVER['DOCUMENT_ROOT']."/car/inc/components/navbar.php";

?>
</div>
    <div class="container mt-2">
        <?php
            if(isset($_GET['id'])){
                $bookObj = new Book;
                $book = $bookObj->getBookById($_GET['id']);
                // print_r($book);
        ?>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-info text-white d-flex justify-content-between align-items-center">รายละเอียด</div>
                    <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="alert alert-sm alert-info">
                            <b>ประเภทรถ</b> 
                            </div> 
                        </div>
                        <div class="col-sm mt-0">
                            <div class="alert alert-sm alert-success">
                                <?php echo $book['car'];?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="alert alert-sm alert-info">
                            <b>วันที่กรอกข้อมูล</b> 
                            </div> 
                        </div>
                        <div class="col-sm mt-0">
                            <div class="alert alert-sm alert-success">
                                <?php echo datethai_time($book['date_register']);?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="alert alert-sm alert-info">
                            <b>วันที่</b> 
                            </div> 
                        </div>
                        <div class="col-sm mt-0">
                            <div class="alert alert-sm alert-success">
                                <?php echo datethai($book['start_date'])." เวลา ".$book['start_time']." น" ;?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="alert alert-sm alert-info">
                            <b>ถึงวันที่</b> 
                            </div> 
                        </div>
                        <div class="col-sm mt-0">
                            <div class="alert alert-sm alert-success">
                                <?php echo datethai($book['end_date']) ." เวลา ".$book['end_time']." น";?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="alert alert-sm alert-info">
                            <b>จุดประสงค์การใช้รถ</b> 
                            </div> 
                        </div>
                        <div class="col-sm mt-0">
                            <div class="alert alert-sm alert-success">
                                <?php echo $book['title'];?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="alert alert-sm alert-info">
                            <b>ต้องการให้</b> 
                            </div> 
                        </div>
                        <div class="col-sm mt-0">
                            <div class="alert alert-sm alert-success">
                                <?php echo $book['choose'];?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="alert alert-sm alert-info">
                            <b>ต้นทาง</b> 
                            </div> 
                        </div>
                        <div class="col-sm mt-0">
                            <div class="alert alert-sm alert-success">
                                <?php echo $book['origin'];?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="alert alert-sm alert-info">
                            <b>ปลายทาง</b> 
                            </div> 
                        </div>
                        <div class="col-sm mt-0">
                            <div class="alert alert-sm alert-success">
                                <?php echo $book['destination'];?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="alert alert-sm alert-info">
                            <b>จำนวนผู้โดยสาร</b> 
                            </div> 
                        </div>
                        <div class="col-sm mt-0">
                            <div class="alert alert-sm alert-success">
                                <?php echo $book['count']." คน";?>
                            </div>
                        </div>
                    </div>                
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="alert alert-sm alert-info">
                            <b>ผู้โดยสาร</b> 
                            </div> 
                        </div>
                        <div class="col-sm mt-0">
                            <div class="alert alert-sm alert-success">
                                <?php echo $book['people'];?>
                            </div>
                        </div>
                    </div>                
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="alert alert-sm alert-info">
                            <b>รายละเอียดเพิ่มเติม</b> 
                            </div> 
                        </div>
                        <div class="col-sm mt-0">
                            <div class="alert alert-sm alert-success">
                                <?php echo $book['remark'];?>
                            </div>
                        </div>
                    </div>
                    <h3>ผู้ขอ</h3>
                    <hr>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="alert alert-sm alert-info">
                            <b>ชื่อ - สกุล</b> 
                            </div> 
                        </div>
                        <div class="col-sm mt-0">
                            <div class="alert alert-sm alert-success">
                                <?php echo $book['name']." ".$book['surname'];?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="alert alert-sm alert-info">
                            <b>ตำแหน่ง</b> 
                            </div> 
                        </div>
                        <div class="col-sm mt-0">
                            <div class="alert alert-sm alert-success">
                                <?php echo $book['position'];?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="alert alert-sm alert-info">
                            <b>สังกัด</b> 
                            </div> 
                        </div>
                        <div class="col-sm mt-0">
                            <div class="alert alert-sm alert-success">
                                <?php echo $book['department'];?>
                            </div>
                        </div>
                    </div>
                    
                    <h3>พขร</h3>
                    <hr>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="alert alert-sm alert-info">
                            <b>เลขทะเบียน</b> 
                            </div> 
                        </div>
                        <div class="col-sm mt-0">
                            <div class="alert alert-sm alert-success">
                                <?php echo $book['number'];?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="alert alert-sm alert-info">
                            <b>ชื่อ - สกุล</b> 
                            </div> 
                        </div>
                        <div class="col-sm mt-0">
                            <div class="alert alert-sm alert-success">
                                <?php echo $book['staff'];?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="alert alert-sm alert-info">
                            <b>ตำแหน่ง</b> 
                            </div> 
                        </div>
                        <div class="col-sm mt-0">
                            <div class="alert alert-sm alert-success">
                                <?php echo $book['staff_tel'];?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="alert alert-sm alert-info">
                            <b>สถานะ</b> 
                            </div> 
                        </div>
                        <div class="col-sm mt-0">
                            <div class="alert alert-sm text-white" style="background-color:<?php echo $book['color'];?>">
                                <?php echo $book['status'];?>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            }
        ?>
        <div class="row mt-2">
            <div class="col">
                <div class="card ">
                    <div class="card-header bg-info text-white d-flex justify-content-between align-items-center">
                    <h3>ปฏิทินการใช้รถ <?php if($_SESSION['role']=='moderator' OR $_SESSION['role']=='admin'){?></h3>
                        <a href="https://www.itrector.kmitl.ac.th/vehicle/index.php" class="btn btn-warning text-white"  target='_blank'>ขอใช้รถสถาบันฯ</a>
                        <?php }?>

                    </div>
                    <div class="card-body fs-14">
                        <div class="alert alert-success" role="alert">
                            <table class="">
                                <tr>
                                    <td>หมายเหตุ : สถานะรายการขอใช้รถ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <?php
                                        $statusObj = new Statusbook;
                                        $statuss = $statusObj->getAllStatus(); 
                                        $i=0;
                                        foreach($statuss as $status) {
                                            $i++;
                                            echo "
                                                <td><div style='width: 14px; height: 14px; background-color:{$status['color']}'></div></td>
                                                <td>{$status['name']}&nbsp;&nbsp;&nbsp;</td>
                                            ";
                                        }
                                    ?>
                                    <td></td>
                                    <td>รถตู้คณะฯ&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                            </table>
                        </div>
                     
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <div style="margin:50px 0 50px 0;" id='calendar'></div>
                                <div style="margin:10px 0 50px 0;" align="center"></div>

                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js'></script>
    <script type="text/javascript">
    jQuery(document).ready(function() {

        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            eventLimit: true, 
            defaultDate: new Date(),
            timezone: 'Asia/Bangkok',
            events: {
                url: './dataEvents.php',
            },
            loading: function(bool) {
                $('#loading').toggle(bool);
            },

            eventClick: function(event) {
                if (event.url) {
                    $.fancybox({
                        'href': event.url,
                        'type': 'iframe',
                        'autoScale': false,
                        'openEffect': 'elastic',
                        'openSpeed': 'fast',
                        'closeEffect': 'elastic',
                        'closeSpeed': 'fast',
                        'closeBtn': true,
                        onClosed: function() {
                            parent.location.reload(true);
                        },
                        helpers: {
                            thumbs: {
                                width: 50,
                                height: 50
                            },

                            overlay: {
                                css: {
                                    'background': 'rgba(49, 176, 213, 0.7)'
                                }
                            }
                        }
                    });
                    return false;
                }
            },
        });
    });
</script>
</body>
</html>