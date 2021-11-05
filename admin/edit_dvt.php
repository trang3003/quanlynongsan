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
          if(isset($_POST['donvitinh_id']) && !empty($_POST['donvitinh_id']) &&  isset($_POST['donvitinh_ten']) && !empty($_POST['donvitinh_ten'])&&  isset($_POST['donvitinh_mota']) && !empty($_POST['donvitinh_mota'])){
            $result= mysqli_query($conn,"UPDATE `donvitinh` SET `donvitinh_ten` = '".$_POST['donvitinh_ten']."', `donvitinh_mota`= '".$_POST['donvitinh_mota']."' WHERE `donvitinh`.`donvitinh_id`=".$_POST['donvitinh_id'].";");
            if(!$result){
              $error =" Không thể sửa đơn vị tính";
            }
            mysqli_close($conn);
            if($error !== false){
          ?>
        <div>
          <h1> Thông báo</h1>
          <h4>
            <?= $error ?>
          </h4>
          <a href="./admin_dvt.php">Danh sách đơn vị tính</a>
        </div>
        <?php } else { ?>
        <div>
          <h3>
            <?= ($error != false) ? $error: "Sửa thành công đơn vị tính"?>
          </h3>
          <a href="./admin_dvt.php"> >>Quay lại danh sách đơn vị tính</a>
        </div>
        <?php }?>
        <?php } else { ?>
        <div>
          <h1> Vui lòng nhập đủ thông tin để sửa đơn vị tính</h1>
          <a href="./edit_dvt.php?donvitinh_id=<?=$_POST['donvitinh_id']?>"> Quay lại sửa đơn vị tính</a>
        </div>
        <?php }
        }else{
              $result= mysqli_query($conn,"SELECT * FROM donvitinh WHERE `donvitinh_id`=".$_GET['donvitinh_id']);
              $donvitinh=$result->fetch_assoc();
              mysqli_close($conn);
              if(!empty($donvitinh)){
              ?>
        <div class="col-lg-12">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title"><i class="fa fa-user"></i> Sửa đơn vị tính >>>
                <?= $donvitinh['donvitinh_ten']?>
              </h3>
            </div>
            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped tablesorter">
                  <form action="./edit_dvt.php?action=edit" method="post">
                    <input type="hidden" name="donvitinh_id" value="<?= $donvitinh['donvitinh_id']?>"> <br>
                    <br>Tên đơn vị tính<br> <input type="text" name="donvitinh_ten"
                      value="<?= $donvitinh['donvitinh_ten']?>"><br>
                    <br>  Mô tả<br> <input type="text" name="donvitinh_mota"
                      value="<?= $donvitinh['donvitinh_mota']?>"><br>
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