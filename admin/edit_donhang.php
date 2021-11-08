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
          if(isset($_POST['khachhang_id']) && !empty($_POST['khachhang_id']) &&  isset($_POST['nguoidung_ten']) && !empty($_POST['nguoidung_ten'])&&  isset($_POST['sanpham_ten']) && !empty($_POST['sanpham_ten']) &&  isset($_POST['chitietdonhang_soluong']) && !empty($_POST['chitietdonhang_soluong']) &&  isset($_POST['nguoidung_diachi']) && !empty($_POST['nguoidung_diachi'])&&  isset($_POST['nguoidung_sdt']) && !empty($_POST['nguoidung_sdt'])&&  isset($_POST['chitietdonhang_ghichu']) && !empty($_POST['chitietdonhang_ghichu'])&&  isset($_POST['tinhtrang_id']) && !empty($_POST['tinhtrang_id'])){
            $result= mysqli_query($conn,"UPDATE `donhang` SET `nguoidung_ten` = '".$_POST['nguoidung_ten']."', `sanpham_ten`= '".$_POST['sanpham_ten']."', `chitietdonhang_soluong`= '".$_POST['chitietdonhang_soluong']."' , `nguoidung_diachi`= '".$_POST['nguoidung_diachi']."', `nguoidung_sdt`= '".$_POST['nguoidung_sdt']."', `chitietdonhang_ghichu`= '".$_POST['chitietdonhang_ghichu']."', `tinhtrang_id`= '".$_POST['tinhtrang_id']."'  WHERE `donhang`.`donhang_id`=".$_POST['donhang_id'].";");
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
          <a href="./admin_donhang.php">Danh sách tài khoản</a>
        </div>
        <?php } else { ?>
        <div>
          <h3>
            <?= ($error != false) ? $error: "Sửa thành công tài khoản user"?>
          </h3>
          <a href="./admin_donhang.php"> >>Quay lại danh sách tài khoản</a>
        </div>
        <?php }?>
        <?php } else { ?>
        <div>
          <h1> Vui lòng nhập đủ thông tin để sửa tài khoản</h1>
          <a href="./edit_donhang.php?donhang_id=<?=$_POST['donhang_id']?>"> Quay lại sửa tài khoản</a>
        </div>
        <?php }
        }else{
              $result= mysqli_query($conn,"SELECT * FROM donhang WHERE `donhang_id`=".$_GET['donhang_id']);
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
                  <form action="./edit_donhang.php?action=edit" method="post">
                    <br>
                    <select name="tinhtrang_id" id="">
                      <option <?php if(!empty($nguoidung['tinhtrang_ten'])) {?> selected
                        <?php }?> value="1">Đang giao
                      </option>
                      <option <?php if(!empty($nguoidung['tinhtrang_ten'])) {?> selected
                        <?php }?> value="3">Chưa xác nhận
                      </option>
                      <option <?php if(!empty($nguoidung['tinhtrang_ten'])) {?> selected
                        <?php }?> value="5">Xác nhận
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