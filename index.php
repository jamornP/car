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
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="card ">
                    <div class="card-header bg-info text-white d-flex justify-content-between align-items-center">
                    <h3>ปฏิทินการใช้รถ</h3>
                        <!-- <a href="./pages/book/form.php" class="btn btn-success text-white">แบบฟอร์มขอใช้รถ</a> -->
                        <?php //echo password_hash('admincar',PASSWORD_DEFAULT);?>

                    </div>
                    <div class="card-body">
                        <div class="col-lg-12">
                            <div style="margin:50px 0 50px 0;" id='calendar'></div>
                            <div style="margin:10px 0 50px 0;" align="center"></div>

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