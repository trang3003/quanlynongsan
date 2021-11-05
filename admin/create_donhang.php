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
     if(isset($_GET['action']) && $_GET['action']=='create'){
         if(isset($_POST['`nhanvien_id`']) && !empty($_POST['`nhanvien_id`']) && isset($_POST['tinhtrang_id']) && !empty($_POST['tinhtrang_id']) && isset($_POST['nhanvien_id']) && !empty($_POST['nhanvien_id']) && isset($_POST['khachhang_id']) && !empty($_POST['khachhang_id'])){
           $sql="INSERT INTO `donhang` (`donhang_id`,`tinhtrang_id`,`nhanvien_id`,`khachhang_id`) VALUE ('".$_POST['donhang_id']."','".$_POST['tinhtrang_id']."','".$_POST['nhanvien_id']."','".$_POST['khachhang_id']."')";
             $result= mysqli_query($conn,$sql);
             
             if(!$result){
                 if(strpos(mysqli_error($conn),"Duplicate entry") !== FALSE){
                     $error ="Đơn hàng đã tồn tại , Vui lòng nhập đơn hàng khác";
                 }
             } 
             mysqli_close($conn);
             if($error !== false){
                 ?>
                 <div>
                     <h1> Thông báo</h1>
                     <h4><?= $error ?></h4>
                     <a href="./create_donhang.php">Tạo nhà cung cung cấp mới</a>
                 </div>
                 <?php } else {?>
                     <div>
                     <h4 align="center">bạn đã tạo đơn hàng thành công<?=$_POST['khachhang_id']?></h4>
                     <a href="./admin_donhang.php">Danh sách đơn hàng</a>
                     </div>
                 <?php }?>
                 <?php }?>
        <?php } else{ ?> 
          <div class="col-lg-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-user"></i> Thêm mới đơn hàng</h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                      <form action="./create_ncc.php?action=create" method="post">
                      <label>Nhập tên khách hàng</label><br>
                      <input type="text" name="nguoidung_ten" value=""><br>
                      <label> Tên sản phẩm</label><br>
                      <input type="text" name="nhacungcap_diachi" value=""><br>
                      <label> số lượng</label><br>
                      <input type="text" name="nhacungcap_sdt" value=""><br>
                      <br>
                      <br>
                      <input type="submit" value="THÊM">
                    </form>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <?php }?>
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
