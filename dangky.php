<!DOCTYPE html>
<html lang="en">
<head>
        <title>Maruti Admin</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="./css/font-awesome/css/bootstrap.min.css" />
		<link rel="stylesheet" href="./css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="./css/maruti-login.css" />
    </head>
    <body>
        <?php
        /*
        require './config.php';
        $error=false;
        if(isset($_POST['action'])&& $_GET['action']=='reg'){
            if(isset($_POST['nguoidung_ten']) && !empty($_POST['nguoidung_ten']) && isset($_POST['nguoidung_email']) && !empty($_POST['nguoidung_email']) && isset($_POST['nguoidung_matkhau']) && !empty($_POST['nguoidung_matkhau'])){
                $result= mysqli_query($conn, "SELECT *FROM `nguoidung` (`nguoidung_ten`,`nguoidung_email`,`nguoidung_matkhau`) VALUE ('".$_POST['nguoidung_ten']."','".$_POST['nguoidung_email']."','".$_POST['nguoidung_matkhau']."')");
                if(!result){
                    if(strpos(mysqli_error($conn),"Duplicate entry") !== FALSE){
                        $error ="Tài khoản đã tồn tại , Vui lòng nhập tài khoản khác";
                    }
                } 
                mysqli_close($conn);
                if($error !== false){
                    ?>
                    <div>
                        <h1> Thông báo</h1>
                        <h4><?=$error?></h4>
                        <a href="./dangky.php">Quay lại</a>
                    </div>
                    <?php }else{?>
                        <div>
                        <h4><?=($error !== false)?$error: "đăng ký thành công"?></h4>
                        <a href="./dangnhap.php">hãy đăng nhập</a>
                        </div>
                    <?php }?>
                    <?php }else{?>
                        <div>
                        <h1> vui lòng nhập đủ thông tin</h1>
                        <a href="./dangky.php">Quay lại đăng ký</a>
                    </div>
                    <?
                }
        }else{

        */?>
        <div id="loginbox">             
            <form id="loginform" class="form-vertical" action="./xl_.php" method="post">
				 <div class="control-group normal_text"> <h3><img src="./images/logo.jpg" alt="Logo" /></h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on"><i class="icon-user"></i></span><input type="text"  name="nguoidung_ten" placeholder="Nhập tên tài khoản" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on"><i class="icon-user"></i></span><input type="text" name="nguoidung_ten" placeholder="Nhập email" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on"><i class="icon-lock"></i></span><input type="password" name="nguoidung_matkhau" placeholder="Nhập mật khẩu" />
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-left"><a href="./dangnhap.php" class="flip-link btn btn-inverse" id="to-recover">Quay lại đăng nhập ngay !</a></span>
                    <span class="pull-right"><input type="submit" class="btn btn-success" name="submit" value="Đăng ký" /></span>
                </div>
            </form>
        </div>
        <script src="./css/js/bootstrap.min.js"></script>  
        <script src="./css/maruti.login.js"></script> 
    </body>

</html>
