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
    require("../config.php");
    if(isset($_GET['search']) && !empty($_GET['search'])){
      $key =$_GET['search'];
      $products=mysqli_query($conn,"SELECT *FROM `sanpham` WHERE `sanpham_ten` LIKE '%$key%'");
    }
    else{
      $products=mysqli_query($conn,"SELECT *FROM `sanpham`");
    }
?>
<?php  
$limit = 8;  
if (isset($_GET["page"])) {
    $page  = $_GET["page"]; 
    } 
    else{ 
    $page=1;
    };  
$start = ($page-1) * $limit;  
$products = mysqli_query($conn,"SELECT * FROM sanpham ORDER BY sanpham_ten ASC LIMIT $start, $limit");
?>
    <div id="wrapper">
    <?php require './admin_header.php'?>
      <div id="page-wrapper">
        <div class="row">
          <div class="col-lg-12">
            <ol class="breadcrumb">
              <li class="active"><i class="fa fa-dashboard"></i> Hi admin, welcome to ...</li>
            </ol>
          </div>
          
        </div>
        <a href="./create_sp.php">Thêm sản phẩm mới</a>
        <br>
        <div class="row">
          <div class="col-lg-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-money"></i> Danh sách đơn hàng</h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                      <th>STT<i class="fa fa-sort"></i></th>
                      <th>Tên sản phẩm <i class="fa fa-sort"></i></th>
                        <th>Ảnh sản phẩm <i class="fa fa-sort"></i></th>
                        <th>Giá bán <i class="fa fa-sort"></i></th>
                        <th>Số lượng <i class="fa fa-sort"></i></th>
                        <th>Sửa sản phẩm</th>
                        <th>Xóa sản phẩm</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    $stt=1;
                while($row =mysqli_fetch_array($products)){
                    ?>
                    <tr>
                    <td> <?= $stt?></td>
                    <td><?=$row['sanpham_ten']?></td>
                    <td><?=$row['sanpham_anh']?></td>
                    <td><?=$row['sanpham_giaban']?></td>
                    <td><?=$row['sanpham_soluong']?></td>
                    <td><a href="./edit_sp.php?sanpham_id=<?=$row['sanpham_id']?>">Sửa</a></td>
                    <td><a href="./delete_sp.php?sanpham_id=<?=$row['sanpham_id']?>">Xóa</a></td>
                    </tr>
                    
              <?php $stt++; }?>
                    </tbody>
                  </table>
                  <?php require './phantrang.php';?>
                </div>
              </div>
            </div>
          </div>
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
