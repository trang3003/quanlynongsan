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
          if(isset($_POST['loainguoidung_id']) && !empty($_POST['loainguoidung_id']) &&  isset($_POST['loainguoidung_ten']) && !empty($_POST['loainguoidung_ten'])){
            $sql="UPDATE `loainguoidung` SET `loainguoidung_ten` = '".$_POST['loainguoidung_ten']."' WHERE `loainguoidung`.`loainguoidung_id`=".$_POST['loainguoidung_id'].";";
            $result= mysqli_query($conn,$sql);
            if(!$result){
              $error =" Không thể sửa loại sản phẩm";
            }
            mysqli_close($conn);
            if($error !== false){
          ?>
        <div>
          <h1> Thông báo</h1>
          <h4>
            <?= $error ?>
          </h4>
          <a href="./admin_lnd.php">Danh sách loại sản phẩm</a>
        </div>
        <?php } else { ?>
        <div>
          <h3>
            <?= ($error != false) ? $error: "Sửa thành công loại sản phẩm"?>
          </h3>
          <a href="./admin_lnd.php"> >>Quay lại danh sách loại sản phẩm</a>
        </div>
        <?php }?>
        <?php } else { ?>
        <div>
          <h1> Vui lòng nhập đủ thông tin để sửa loại sản phẩm</h1>
          <a href="./edit_lnd.php?loainguoidung_id=<?=$_POST['loainguoidung_id']?>"> Quay lại sửa loại sản phẩm</a>
        </div>
        <?php }
        }else{
              $result= mysqli_query($conn,"SELECT * FROM loainguoidung WHERE `loainguoidung_id`=".$_GET['loainguoidung_id']);
              $loainguoidung=$result->fetch_assoc();
              mysqli_close($conn);
              if(!empty($loainguoidung)){
              ?>
        <div class="col-lg-12">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title"><i class="fa fa-user"></i> Sửa loại sản phẩm >>>
                <?= $loainguoidung['loainguoidung_ten']?>
              </h3>
            </div>
            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped tablesorter">
                  <form action="./edit_lnd.php?action=edit" method="post">
                    <input type="hidden" name="loainguoidung_id" value="<?= $loainguoidung['loainguoidung_id']?>"> <br>
                    <br>Tên loại sản phẩm<br> <input type="text" name="loainguoidung_ten"
                      value="<?= $loainguoidung['loainguoidung_ten']?>"><br>
                    <br>
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