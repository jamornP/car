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
<body class="font-kanit vh-100 d-flex justify-content-center align-items-center">
<div class="card border-success mb-3" style="max-width: 18rem;">
  <div class="card-header bg-primary border-success text-center text-white "><h3>เข้าสู่ระบบ</h3></div>
  <div class="card-body text-success">
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" class="form-control" name="email" autofocus required >
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="password"class="form-label">Password</label>
                <input type="password" id="password" class="form-control" name="password" required >
            </div>
        </div>
    </div>
  </div>
  <div class="card-footer bg-transparent border-success text-center">
  <button type="submit" class="btn btn-primary ">Login</button>
  </div>
</div>
</body>
</html>