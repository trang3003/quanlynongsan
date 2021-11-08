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
	    session_start();
	    require './config.php';
	    $errors = TRUE;
	     if (isset($_POST['submit'])){
		$nguoidung_ten = $_POST["nguoidung_ten"];
		$nguoidung_email=$_POST["nguoidung_email"];
		$nguoidung_sdt=$_POST["nguoidung_sdt"];
		$nguoidung_diachi=$_POST["nguoidung_diachi"];
		$nguoidung_matkhau = $_POST["nguoidung_matkhau"];
		$nguoidung_matkhau2 = $_POST["nguoidung_matkhau2"];
		$loainguoidung_id = 3;

		if ($nguoidung_matkhau != $nguoidung_matkhau2) {
			echo "<script>alert('Mật khẩu không đúng!');
		  	location.href='./dangky.php'
				</script>";
            $errors = FALSE;
		 }

		$user_check_query = "SELECT * FROM nguoidung WHERE nguoidung_email='$nguoidung_email' LIMIT 1";
		$result = mysqli_query($conn, $user_check_query);
	 	$nguoidung = mysqli_fetch_assoc($result);
	  	if ($nguoidung) { // if user exists
		    if ($nguoidung['nguoidung_email'] === $nguoidung_email) {
		     echo "<script>alert('Tài khoản đã tồn tại!');
		  	location.href='./dangky.php'
				</script>";
                $errors = FALSE;
		    }
	  	}

	  	if ($errors) {
		  	$query = "INSERT INTO nguoidung(nguoidung_ten,nguoidung_email,nguoidung_sdt,nguoidung_diachi,nguoidung_matkhau,loainguoidung_id) 
		  	values('$nguoidung_ten','$nguoidung_email','$nguoidung_sdt','$nguoidung_diachi','$nguoidung_matkhau','$loainguoidung_id')";
              $bien=mysqli_query($conn, $query);
              if($bien){
                $_SESSION['khachhang']['nguoidung_ten']=$nguoidung_ten;
                $_SESSION['khachhang']['nguoidung_email']=$nguoidung_email;
                $_SESSION['khachhang']['nguoidung_sdt']=$nguoidung_sdt;
                $_SESSION['khachhang']['nguoidung_diachi']=$nguoidung_diachi;
                echo "<script>alert('Đăng ký thành công!');	location.href='./dangnhap.php'</script>";
              }	else{
                echo "<script>alert('Đăng ký thất bại!');location.href='./dangky.php'</script>";
              }
	      }
	  else {echo "<script>alert('Đăng ký thất bại!');location.href='./dangky.php'</script>";}
	}
?>
        <div id="loginbox">             
            <form id="loginform" class="form-vertical" action="" method="post">
				 <div class="control-group normal_text"> <h3><img src="./images/logo.jpg" alt="Logo" /></h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                        <span class="add-on"><i class="icon-user"></i></span><input type="text"  name="nguoidung_ten" placeholder="Nhập tên tài khoản"  require="" value="<?php if(isset($_POST['nguoidung_ten'])) echo $nguoidung_ten;?>"/>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on"><i class="icon-user"></i></span><input type="text" name="nguoidung_email" placeholder="Nhập email" require="" value="<?php if(isset($_POST['nguoidung_email'])) echo $nguoidung_email;?>"/>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on"><i class="icon-user"></i></span><input type="text" name="nguoidung_sdt" placeholder="Nhập sdt" require="" value="<?php if(isset($_POST['nguoidung_sdt'])) echo $nguoidung_sdt;?>"/>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on"><i class="icon-lock"></i></span><input type="text" name="nguoidung_diachi" placeholder="Nhập địa chỉ" require="" value="<?php if(isset($_POST['nguoidung_diachi'])) echo $nguoidung_diachi;?>"/>
                        </div>
                    </div>
                </div>
                
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on"><i class="icon-lock"></i></span><input type="password" name="nguoidung_matkhau" placeholder="Nhập mật khẩu" require="" value="<?php if(isset($_POST['nguoidung_matkhau'])) echo $nguoidung_matkhau;?>"/>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on"><i class="icon-lock"></i></span><input type="password" name="nguoidung_matkhau2" placeholder="Nhập mật khẩu" require="" value="<?php if(isset($_POST['nguoidung_matkhau2'])) echo $nguoidung_matkhau2;?>"/>
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
