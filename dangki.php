<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ĐĂNG KÍ TÀI KHOẢN</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<style type="text/css">
    .example{
        margin: 20px;
    }
</style>
</head>
<body>
<div class="example">
<div class="container">
    <div class="row">
    <h2>Đăng kí tài khoản</h2>
        <form method=POST action="sosanhdangnhap.php">
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Email" name = "ten">
        </div>
        <div class="form-group">
            <label>Mật Khẩu</label>
            <input type="password" class="form-control" placeholder="Password"  name = "pass">
        </div>
        <div class="form-group">
            <label>Nhập Lại Mật Khẩu</label>
            <input type="password" class="form-control" placeholder="Password" name = "pass">
        </div>
        <div class="checkbox">
            <label><input type="checkbox"> Chấp nhập điều khoản yêu cầu</label>
        </div>
        <button type="submit" class="btn btn-primary">Đăng Kí</button>
    </form>
    </div>
</div>
     
</div>
</body>
</html>