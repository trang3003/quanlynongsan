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
  
<?php require './admin_header.php'?>
  <div id="wrapper">
    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <ol class="breadcrumb">
            <li class="active"><i class="fa fa-dashboard"></i> Hi admin, welcome to ...</li>
          </ol>
        </div>
      </div>
      <div class="row">
        <?php
        require '../config.php';
        $error=false;
        if(isset($_GET['action']) && $_GET['action'] == "edit"){
        if(isset($_POST['sanpham_id']) && !empty($_POST['sanpham_id']) &&  isset($_POST['sanpham_ten']) && !empty($_POST['sanpham_ten'])&&  isset($_POST['sanpham_giaban']) && !empty($_POST['sanpham_giaban']) && isset($_POST['sanpham_soluong']) && !empty($_POST['sanpham_soluong']) &&  isset($_POST['sanpham_anh']) && !empty($_POST['sanpham_anh']) &&  isset($_POST['loaisanpham_id']) && !empty($_POST['loaisanpham_id']) &&  isset($_POST['donvitinh_id']) && !empty($_POST['donvitinh_id']) &&  isset($_POST['nhacungcap_id']) && !empty($_POST['nhacungcap_id'])){
          if(isset($_FILES['sanpham_anh']) && $_FILES['sanpham_anh']['name'] != "") $sanpham_anh="images/".$_FILES['sanpham_anh']['name'];
          else { $sanpham_anh=$_POST['sanpham_anh']; }
           $sql="UPDATE `sanpham` SET `sanpham_ten` = '".$_POST['sanpham_ten']."', `sanpham_giaban`= '".$_POST['sanpham_giaban']."', `sanpham_soluong`= '".$_POST['sanpham_soluong']."', `sanpham_anh`= '".$sanpham_anh."' , `loaisanpham_id`= '".$_POST['loaisanpham_id']."' , `donvitinh_id`= '".$_POST['donvitinh_id']."', `nhacungcap_id`= '".$_POST['nhacungcap_id']."'  WHERE `sanpham`.`sanpham_id`=".$_POST['sanpham_id'].";";

           $result= mysqli_query($conn,$sql);
            if(!$result){
              $error ="Không thể cập nhật sản phẩm";
            }
            mysqli_close($conn);
            if($error !== false){
          ?>
        <div>
          <h1> Thông báo</h1>
          <h4> <?= $error ?> </h4>
          <a href="./admin_sp.php">Danh sách sản phẩm</a>
        </div>
        <?php } else { ?>
        <div>
          <h3><?= ($error != false) ? $error: "Sửa thành công sản phẩm"?> 
        </h3>
          <a href="./admin_sp.php"> >>Quay lại danh sách sản phẩm</a>
        </div>
        <?php }?>
        <?php } else { ?>
        <div>
          <h1> Vui lòng nhập đủ thông tin để sửa sản phẩm</h1>
          <a href="./edit_sp.php?sanpham_id=<?=$_POST['sanpham_id']?>"> Quay lại sửa sản phẩm</a>
        </div>
        <?php }
        }else{
              $result= mysqli_query($conn,"SELECT * FROM sanpham WHERE `sanpham_id`=".$_GET['sanpham_id']);
              $sanpham=$result->fetch_assoc();
              mysqli_close($conn);
              if(!empty($sanpham)){
              ?>
        <div class="col-lg-12">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title"><i class="fa fa-money"></i> Sửa sản phẩm >>>
                <?= $sanpham['sanpham_ten']?>
              </h3>
            </div>
            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped tablesorter">
                  <form action="./edit_sp.php?action=edit" method="post" enctype="multipart/form-data">
                  <input width="50px;" type="hidden" name="sanpham_id" value="<?= $sanpham['sanpham_id'] ?>" />
                    <div>
                      <label>Tên sản phẩm: </label><br>
                      <input type="text" name="sanpham_ten" value="<?= $sanpham['sanpham_ten']?>">
                    </div>
                    <div>
                    <label>Ảnh sản phẩm: </label><br>
                    <div class="wrap-field">
                      <div class="right-wrap-field">
                        <?php if (!empty($sanpham['sanpham_anh'])) { ?>
                        <img src="../<?= $sanpham['sanpham_anh'] ?>" /><br />
                        <input width="50px;" type="text" name="sanpham_anh" value="<?= $sanpham['sanpham_anh'] ?>" />
                        <br>
                        <?php } ?>
                        <input width="50px;" type="file" name="sanpham_anh" />
                      </div>
                      <br>
                    </div>
                      <label>Giá sản phẩm: </label><br>
                      <input type="text" name="sanpham_giaban" value="<?= $sanpham['sanpham_giaban']?>" />
                    </div>
                    <div>
                      <label> Số lượng: </label><br>
                      <input type="text" name="sanpham_soluong" value="<?= $sanpham['sanpham_soluong']?>" />
                    </div>
                    <br>
                    <label> Loại sản phẩm </label><br>
                    <select name="loaisanpham_id" id="">
                      <option <?php if(!empty($sanpham['loaisanpham_ten'])) {?> selected
                        <?php }?> value="1">Rau củ
                      </option>
                      <option <?php if(!empty($sanpham['loaisanpham_ten'])) {?> selected
                        <?php }?> value="2">Trái cây
                      </option>
                      <option <?php if(!empty($sanpham['loaisanpham_ten'])) {?> selected
                        <?php }?> value="3">Thịt
                      </option>
                      <option <?php if(!empty($sanpham['loaisanpham_ten'])) {?> selected
                        <?php }?> value="4">Thủy hải sản
                      </option>
                    </select>
                    <br>
                    <br>
                    <label> Đơn vị tính </label><br>
                    <select name="donvitinh_id" id="">
                      <option <?php if(!empty($sanpham['donvitinh_ten'])) {?> selected
                        <?php }?> value="1">Kg
                      </option>
                      <option <?php if(!empty($sanpham['donvitinh_ten'])) {?> selected
                        <?php }?> value="2">Quả
                      </option>
                      <option <?php if(!empty($sanpham['donvitinh_ten'])) {?> selected
                        <?php }?> value="3">Túi
                      </option>
                      <option <?php if(!empty($sanpham['donvitinh_ten'])) {?> selected
                        <?php }?> value="4">Khay
                      </option>
                    </select>
                    <br>
                    <br>
                    <label> Nhà cung cấp </label><br>
                    <select name="nhacungcap_id" id="">
                      <option <?php if(!empty($sanpham['nhacungcap_ten'])) {?> selected
                        <?php }?> value="1">Vườn xanh Đà Lạt
                      </option>
                      <option <?php if(!empty($sanpham['nhacungcap_ten'])) {?> selected
                        <?php }?> value="2">Đà Lạt Gab
                      </option>
                      <option <?php if(!empty($sanpham['nhacungcap_ten'])) {?> selected
                        <?php }?> value="3">Việt - Nhật nông sản
                      </option>
                      <option <?php if(!empty($sanpham['nhacungcap_ten'])) {?> selected
                        <?php }?> value="4">Orfarm
                      </option>
                      <option <?php if(!empty($sanpham['nhacungcap_ten'])) {?> selected
                        <?php }?> value="5">Rau cười Việt Nhật
                      </option>
                    </select>
                    <br>
                    <br>
                    <input type="submit" value="Chỉnh sửa">
                  </form>
                </table>
              </div>
            </div>

          </div><!-- /#page-wrapper -->

        </div><!-- /#wrapper -->
        
        <?php } }?>
      </div>
    </div>
  </div>

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