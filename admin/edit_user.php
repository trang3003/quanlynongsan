<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Admin</title>
  <!-- Bootstrap core CSS -->
  <link href="../css/css/bootstrap.css" rel="stylesheet">
  <!-- Add custom CSS here -->
  <link href="../css/css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
  <!-- Page Specific CSS -->
  <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
</head>

<body>
  <?php
    require("./admin_header.php");
?>

  <div id="wrapper">
    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <ol class="breadcrumb">
            <li class="active"><i class="fa fa-dashboard"></i> Hi admin, welcome to ...</li>
          </ol>
        </div>
      </div>
      <br>
      <br>
      <div class="row">
        <?php
        require '../config.php';
        $error=false;
        if(isset($_GET['action']) && $_GET['action'] == "edit"){
          if(isset($_POST['nguoidung_id']) && !empty($_POST['nguoidung_id']) &&  isset($_POST['nguoidung_matkhau']) && !empty($_POST['nguoidung_matkhau'])&&  isset($_POST['nguoidung_email']) && !empty($_POST['nguoidung_email']) &&  isset($_POST['nguoidung_ten']) && !empty($_POST['nguoidung_ten']) &&  isset($_POST['loainguoidung_id']) && !empty($_POST['loainguoidung_id'])){
            $result= mysqli_query($conn,"UPDATE `nguoidung` SET `nguoidung_matkhau` = '".$_POST['nguoidung_matkhau']."', `nguoidung_email`= '".$_POST['nguoidung_email']."', `nguoidung_ten`= '".$_POST['nguoidung_ten']."' , `loainguoidung_id`= '".$_POST['loainguoidung_id']."'  WHERE `nguoidung`.`nguoidung_id`=".$_POST['nguoidung_id'].";");
            if(!$result){
              $error =" Không thể cập nhật tài khoản";
            }
            mysqli_close($conn);
            if($error !== false){
          ?>
        <div>
          <h1> Thông báo</h1>
          <h4>
            <?= $error ?>
          </h4>
          <a href="./admin_user.php">Danh sách tài khoản</a>
        </div>
        <?php } else { ?>
        <div>
          <h3>
            <?= ($error != false) ? $error: "Sửa thành công tài khoản user"?>
          </h3>
          <a href="./admin_user.php"> >>Quay lại danh sách tài khoản</a>
        </div>
        <?php }?>
        <?php } else { ?>
        <div>
          <h1> Vui lòng nhập đủ thông tin để sửa tài khoản</h1>
          <a href="./edit_user.php?nguoidung_id=<?=$_POST['nguoidung_id']?>"> Quay lại sửa tài khoản</a>
        </div>
        <?php }
        }else{
              $result= mysqli_query($conn,"SELECT * FROM nguoidung WHERE `nguoidung_id`=".$_GET['nguoidung_id']);
              $nguoidung=$result->fetch_assoc();
              mysqli_close($conn);
              if(!empty($nguoidung)){
              ?>
        <div class="col-lg-12">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title"><i class="fa fa-user"></i> Sửa tài khoản của >>>
                <?= $nguoidung['nguoidung_ten']?>
              </h3>
            </div>
            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped tablesorter">
                  <form action="./edit_user.php?action=edit" method="post">
                    <input type="hidden" name="nguoidung_id" value="<?= $nguoidung['nguoidung_id']?>"> <br>
                    <br>Tên tài khoản<br> <input type="text" name="nguoidung_ten"
                      value="<?= $nguoidung['nguoidung_ten']?>"><br>
                    <br>Mật khẩu<br> <input type="password" name="nguoidung_matkhau"
                      value="<?= $nguoidung['nguoidung_matkhau']?>"><br>
                    <br>Email<br> <input type="text" name="nguoidung_email"
                      value="<?= $nguoidung['nguoidung_email']?>"><br>
                    <br>
                    <select name="loainguoidung_id" id="">
                      <option <?php if(!empty($nguoidung['loainguoidung_ten'])) {?> selected
                        <?php }?> value="1">Admin
                      </option>
                      <option <?php if(!empty($nguoidung['loainguoidung_ten'])) {?> selected
                        <?php }?> value="2">Khách hàng
                      </option>
                      <option <?php if(!empty($nguoidung['loainguoidung_ten'])) {?> selected
                        <?php }?> value="3">Nhân viên
                      </option>
                    </select>
                    <br><br> <input type="submit" value="Chỉnh sửa">
                  </form>
                </table>
              </div>
            </div>
          </div>
        </div>
        <?php } }?>
      </div><!-- /.row -->
    </div><!-- /#page-wrapper -->
  </div><!-- /#wrapper -->

  <!-- JavaScript -->
  <script src="../css/js/jquery-1.10.2.js"></script>
  <script src="../css/js/bootstrap.js"></script>
  <!-- Page Specific Plugins -->
  <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
  <script src="../css/js/morris/chart-data-morris.js"></script>
  <script src="../css/js/tablesorter/jquery.tablesorter.js"></script>
  <script src="../css/js/tablesorter/tables.js"></script>
</body>

</html>