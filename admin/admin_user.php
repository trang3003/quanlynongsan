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
      $products=mysqli_query($conn,"SELECT *FROM nguoidung,loainguoidung WHERE nguoidung.loainguoidung_id=loainguoidung.loainguoidung_id AND `nguoidung_ten` LIKE '%$key%' AND `loainguoidung_ten` LIKE '%$key%'");
    }
    else{
      $products=mysqli_query($conn,"SELECT *FROM nguoidung,loainguoidung WHERE nguoidung.loainguoidung_id=loainguoidung.loainguoidung_id");
    }
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
          <form action="" method="get">
          <div class="col-lg-6 form-group input-group">
                <input type="text" class="form-control" name="search" value="<?php if(isset($_GET['search'])){ echo $_GET['search'];}?>">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                </span>
          </div>
          </form>
        </div>
        <a href="./create_user.php">Tạo tài khoản user mới</a>
        <br>
        <br>
        <div class="row">
          <div class="col-lg-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-user"></i>  Danh sách người dùng</h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                      <th>STT <i class="fa fa-sort"></i></th>
                        <th>Tên <i class="fa fa-sort"></i></th>
                        <th> Email<i class="fa fa-sort"></i></th>
                        <th> Mật khẩu<i class="fa fa-sort"></i></th>
                        <th> Loại người dùng <i class="fa fa-sort"></i></th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    $stt=1;
                while($row =mysqli_fetch_array($products)){
                    ?>
                    <tr>
                    <td><?=$stt?></td>
                    <td><?=$row['nguoidung_ten']?></td>
                    <td> <?=$row['nguoidung_email']?></td>
                    <td> <?=$row['nguoidung_matkhau']?></td>
                    <td> <?=$row['loainguoidung_ten']?></td>
                    <td><a href="./edit_user.php?nguoidung_id=<?=$row['nguoidung_id']?>">Sửa</a></td>
                    <td><a href="./delete_user.php?nguoidung_id=<?=$row['nguoidung_id']?>">Xóa</a></td>
                    </tr>
                  <?php $stt++; }?>
                    </tbody>
                  </table>
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
