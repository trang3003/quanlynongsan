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
          if(isset($_POST['nhacungcap_id']) && !empty($_POST['nhacungcap_id']) &&  isset($_POST['nhacungcap_ten']) && !empty($_POST['nhacungcap_ten'])&&  isset($_POST['nhacungcap_diachi']) && !empty($_POST['nhacungcap_diachi']) &&  isset($_POST['nhacungcap_sdt']) && !empty($_POST['nhacungcap_sdt'])){
            $result= mysqli_query($conn,"UPDATE `nhacungcap` SET `nhacungcap_ten` = '".$_POST['nhacungcap_ten']."', `nhacungcap_diachi`= '".$_POST['nhacungcap_diachi']."', `nhacungcap_sdt`= '".$_POST['nhacungcap_sdt']."' WHERE `nhacungcap`.`nhacungcap_id`=".$_POST['nhacungcap_id'].";");
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
          <a href="./admin_ncc.php">Danh sách nhà cung cấp</a>
        </div>
        <?php } else { ?>
        <div>
          <h3>
            <?= ($error != false) ? $error: "Sửa thành công nhà cung cấp"?>
          </h3>
          <a href="./admin_ncc.php"> >>Quay lại danh sách nhà cung cấp</a>
        </div>
        <?php }?>
        <?php } else { ?>
        <div>
          <h1> Vui lòng nhập đủ thông tin để sửa tài khoản</h1>
          <a href="./edit_ncc.php?nhacungcap_id=<?=$_POST['nhacungcap_id']?>"> Quay lại sửa nhà cung cấp</a>
        </div>
        <?php }
        }else{
              $result= mysqli_query($conn,"SELECT * FROM nhacungcap WHERE `nhacungcap_id`=".$_GET['nhacungcap_id']);
              $nhacungcap=$result->fetch_assoc();
              mysqli_close($conn);
              if(!empty($nhacungcap)){
              ?>
        <div class="col-lg-12">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title"><i class="fa fa-user"></i> Sửa tài khoản của nhà cung cấp>>>
                <?= $nhacungcap['nhacungcap_ten']?>
              </h3>
            </div>
            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped tablesorter">
                  <form action="./edit_ncc.php?action=edit" method="post">
                    <input type="hidden" name="nhacungcap_id" value="<?= $nhacungcap['nhacungcap_id']?>"> <br>
                    <br>Tên nhà cung cấp<br> <input type="text" name="nhacungcap_ten"
                      value="<?= $nhacungcap['nhacungcap_ten']?>"><br>
                    <br> Địa chỉ<br> <input type="text" name="nhacungcap_diachi"
                      value="<?= $nhacungcap['nhacungcap_diachi']?>"><br>
                    <br>Số điện thoại<br> <input type="text" name="nhacungcap_sdt"
                      value="<?= $nhacungcap['nhacungcap_sdt']?>"><br>
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