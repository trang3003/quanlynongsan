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
     $error=false;
     if(isset($_GET['action']) && $_GET['action']=='create'){
  
         if(isset($_POST['sanpham_ten']) && !empty($_POST['sanpham_ten']) && isset($_POST['sanpham_anh']) && !empty($_POST['sanpham_anh']) && isset($_POST['sanpham_giaban']) && !empty($_POST['sanpham_giaban']) && isset($_POST['sanpham_soluong']) && !empty($_POST['sanpham_soluong']) && isset($_POST['loaisanpham_id']) && !empty($_POST['loaisanpham_id']) && isset($_POST['donvitinh_id']) && !empty($_POST['donvitinh_id'])  && isset($_POST['nhacungcap_id']) && !empty($_POST['nhacungcap_id']) ){
             require '../config.php';
             $sql=  "INSERT INTO `sanpham` (`sanpham_ten`,`sanpham_anh`,`sanpham_giaban`,`sanpham_soluong`,`loaisanpham_id`,`nhacungcap_id`,`donvitinh_id`) VALUE ('".$_POST['sanpham_ten']."','".$_POST['sanpham_anh']."','".$_POST['sanpham_giaban']."','".$_POST['sanpham_soluong']."','".$_POST['loaisanpham_id']."','".$_POST['donvitinh_id']."','".$_POST['nhacungcap_id']."')";
             $result= mysqli_query($conn,$sql);
             
             if(!$result){
                 if(strpos(mysqli_error($conn),"Duplicate entry") !== FALSE){
                     $error ="Tài khoản đã tồn tại , Vui lòng nhập tài khoản khác";
                 }
             } 
             mysqli_close($conn);
             if($error !== false){
                 ?>
                 <div>
                     <h1> Thông báo</h1>
                     <h4><?= $error ?></h4>
                     <a href="./create_sp.php">Thêm sản phẩm khác</a>
                 </div>
                 <?php } else {?>
                     <div>
                     <h4 align="center">bạn đã thêm sản phẩm thành công <?=$_POST['sanpham_ten']?></h4>
                     <a href="./admin_sp.php">Danh sách sản phẩm</a>
                     </div>
                 <?php }?>
                 <?php }?>
        <?php } else{ ?> 
          <div class="col-lg-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-user"></i> Thêm mới sản phẩm</h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                      <form action="./create_sp.php?action=create" method="post">
                      <label>Nhập tên sản phẩm</label><br>
                      <input type="text" name="sanpham_ten" value=""><br>
                      <label>Nhập giá bán</label><br>
                      <input type="text" name="sanpham_giaban" value=""><br>
                      <label>Nhập số lượng</label><br>
                      <input type="text" name="sanpham_soluong" value=""><br>
                      <label>Ảnh sản phẩm: </label><br>
                    <div class="wrap-field">
                      <div class="right-wrap-field">
                        <input width="50px;" type="file" name="sanpham_anh" />
                      </div>
                      <br>
                    </div>
                      <label>Loại sản phẩm</label><br>
                      <select name="loaisanpham_id" id="">
                      <option value="1">Rau củ
                      </option>
                      <option value="2">Trái cây
                      </option>
                      <option value="3">Thịt
                      </option>
                      <option value="4">Thủy hải sản
                      </option>
                    </select>
                    <label>Nhà cung cấp</label><br>
                      <select name="nhacungcap_id" id="">
                      <option value="1">Vườn xanh Đà Lạt
                      </option>
                      <option value="2">Đà Lạt Gab
                      </option>
                      <option value="3">Việt - Nhật nông sản
                      </option>
                      <option value="4">Orfarm
                      </option>
                      <option value="5">Rau cười Việt Nhật
                      </option>
                    </select>
                    <label>Đơn vị tính</label><br>
                      <select name="donvitinh_id" id="">
                      <option value="1">Kg
                      </option>
                      <option value="2">Quả
                      </option>
                      <option value="3">Túi
                      </option>
                      <option value="4">Khay
                      </option>
                    </select>
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
