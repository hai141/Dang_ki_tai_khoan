
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ĐĂNG NHẬP TÀI KHOẢN</title>
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
               <h2><p = align = center>Đăng Nhập </p>  </h2> <br>
                <form class="form-horizontal" action="sosanhdangnhap.php" method=POST>
                    <div class="form-group" >
                        <label class="control-label col-xs-2">Email</label>
                        <div class="col-xs-10">
                            <input type="text" class="form-control" placeholder="text" name = "tendangnhap">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-2">Mật Khẩu</label>
                        <div class="col-xs-10">
                            <input type="password" class="form-control" placeholder="Password" name = "matkhaudangnhap">
                        </div>  
                    </div>
                    <div class="form-group">
                        <div class="col-xs-offset-2 col-xs-10">   
                        <button type="submit" class="btn btn-primary">Đăng Nhập</button>
                        </div>
                    </div>   
                </form>
            </div>
        </div>
    </div>

</body>
</html>