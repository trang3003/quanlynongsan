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
	if (isset($_POST['submit'])) {
	 	$nguoidung_email = $_POST["nguoidung_email"];
		$nguoidung_matkhau = $_POST["nguoidung_matkhau"];
        // $nguoidung_sdt = $_POST["nguoidung_sdt"];
		// $nguoidung_diachi = $_POST["nguoidung_diachi"];
		

		$sql = mysqli_query($conn,"SELECT * FROM nguoidung WHERE nguoidung_email='$nguoidung_email' AND nguoidung_matkhau = '$nguoidung_matkhau'");
		
		if (mysqli_num_rows($sql) > 0) {
			$row = mysqli_fetch_array($sql);
			$_SESSION['current_user'] = $row['nguoidung_email'];
			if ($row['loainguoidung_id'] == 3) {
                $_SESSION['khachhang']['nguoidung_id']=$row['nguoidung_id'];
                $_SESSION['khachhang']['nguoidung_ten']=$row['nguoidung_ten'];
                $_SESSION['khachhang']['nguoidung_email']=$row['nguoidung_email'];
                $_SESSION['khachhang']['nguoidung_sdt']=$row['nguoidung_sdt'];
                $_SESSION['khachhang']['nguoidung_diachi']=$row['nguoidung_diachi'];
				$_SESSION['current_admin'] = $row['loainguoidung_id'];
				echo "<script>alert('Đăng nhập thành công!');
				location.href='./index.php'</script>";
			}
			elseif($row['loainguoidung_id'] == 1){
				echo "<script>alert('Đăng nhập thành công!');
				location.href='./admin/admin_sp.php'</script>";
			}
		}else
		{
			 echo "<script>alert('Đăng nhập thất bại!');location.href='./dangnhap.php'</script>";
		}

				
		

	}
 ?>
        <div id="loginbox">            
            <form id="loginform" class="form-vertical" action="" method="Post">
				 <div class="control-group normal_text"> <h3><img src="./images/logo.jpg" alt="Logo" /></h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on"><i class="icon-user"></i></span><input type="text" placeholder="Nhập email" name="nguoidung_email" value="<?php if(isset($nguoidung_email)) echo $nguoidung_email; ?>" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on"><i class="icon-lock"></i></span><input type="password" placeholder="Nhập mật khẩu" name="nguoidung_matkhau" value="<?php if(isset($nguoidung_matkhau)) echo $nguoidung_matkhau; ?>"/>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-left"><a href="./dangky.php" class="flip-link btn btn-inverse" id="to-recover">Bạn chưa có tài khoản?</a></span>
                    <span class="pull-right"><input type="submit" name="submit" class="btn btn-success" value="Đăng nhập" /></span>
                    <span><?php if(isset($mess)) echo $mess; ?></span>
                </div>
            </form>
        </div>
        
        <script src="./css/js/bootstrap.min.js"></script>  
        <script src="./css/maruti.login.js"></script> 
    </body>

</html>
