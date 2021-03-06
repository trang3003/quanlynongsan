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
              $error ="Kh??ng th??? c???p nh???t s???n ph???m";
            }
            mysqli_close($conn);
            if($error !== false){
          ?>
        <div>
          <h1> Th??ng b??o</h1>
          <h4> <?= $error ?> </h4>
          <a href="./admin_sp.php">Danh s??ch s???n ph???m</a>
        </div>
        <?php } else { ?>
        <div>
          <h3><?= ($error != false) ? $error: "S???a th??nh c??ng s???n ph???m"?> 
        </h3>
          <a href="./admin_sp.php"> >>Quay l???i danh s??ch s???n ph???m</a>
        </div>
        <?php }?>
        <?php } else { ?>
        <div>
          <h1> Vui l??ng nh???p ????? th??ng tin ????? s???a s???n ph???m</h1>
          <a href="./edit_sp.php?sanpham_id=<?=$_POST['sanpham_id']?>"> Quay l???i s???a s???n ph???m</a>
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
              <h3 class="panel-title"><i class="fa fa-money"></i> S???a s???n ph???m >>>
                <?= $sanpham['sanpham_ten']?>
              </h3>
            </div>
            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped tablesorter">
                  <form action="./edit_sp.php?action=edit" method="post" enctype="multipart/form-data">
                  <input width="50px;" type="hidden" name="sanpham_id" value="<?= $sanpham['sanpham_id'] ?>" />
                    <div>
                      <label>T??n s???n ph???m: </label><br>
                      <input type="text" name="sanpham_ten" value="<?= $sanpham['sanpham_ten']?>">
                    </div>
                    <div>
                    <label>???nh s???n ph???m: </label><br>
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
                      <label>Gi?? s???n ph???m: </label><br>
                      <input type="text" name="sanpham_giaban" value="<?= $sanpham['sanpham_giaban']?>" />
                    </div>
                    <div>
                      <label> S??? l?????ng: </label><br>
                      <input type="text" name="sanpham_soluong" value="<?= $sanpham['sanpham_soluong']?>" />
                    </div>
                    <br>
                    <label> Lo???i s???n ph???m </label><br>
                    <select name="loaisanpham_id" id="">
                      <option <?php if(!empty($sanpham['loaisanpham_ten'])) {?> selected
                        <?php }?> value="1">Rau c???
                      </option>
                      <option <?php if(!empty($sanpham['loaisanpham_ten'])) {?> selected
                        <?php }?> value="2">Tr??i c??y
                      </option>
                      <option <?php if(!empty($sanpham['loaisanpham_ten'])) {?> selected
                        <?php }?> value="3">Th???t
                      </option>
                      <option <?php if(!empty($sanpham['loaisanpham_ten'])) {?> selected
                        <?php }?> value="4">Th???y h???i s???n
                      </option>
                    </select>
                    <br>
                    <br>
                    <label> ????n v??? t??nh </label><br>
                    <select name="donvitinh_id" id="">
                      <option <?php if(!empty($sanpham['donvitinh_ten'])) {?> selected
                        <?php }?> value="1">Kg
                      </option>
                      <option <?php if(!empty($sanpham['donvitinh_ten'])) {?> selected
                        <?php }?> value="2">Qu???
                      </option>
                      <option <?php if(!empty($sanpham['donvitinh_ten'])) {?> selected
                        <?php }?> value="3">T??i
                      </option>
                      <option <?php if(!empty($sanpham['donvitinh_ten'])) {?> selected
                        <?php }?> value="4">Khay
                      </option>
                    </select>
                    <br>
                    <br>
                    <label> Nh?? cung c???p </label><br>
                    <select name="nhacungcap_id" id="">
                      <option <?php if(!empty($sanpham['nhacungcap_ten'])) {?> selected
                        <?php }?> value="1">V?????n xanh ???? L???t
                      </option>
                      <option <?php if(!empty($sanpham['nhacungcap_ten'])) {?> selected
                        <?php }?> value="2">???? L???t Gab
                      </option>
                      <option <?php if(!empty($sanpham['nhacungcap_ten'])) {?> selected
                        <?php }?> value="3">Vi???t - Nh???t n??ng s???n
                      </option>
                      <option <?php if(!empty($sanpham['nhacungcap_ten'])) {?> selected
                        <?php }?> value="4">Orfarm
                      </option>
                      <option <?php if(!empty($sanpham['nhacungcap_ten'])) {?> selected
                        <?php }?> value="5">Rau c?????i Vi???t Nh???t
                      </option>
                    </select>
                    <br>
                    <br>
                    <input type="submit" value="Ch???nh s???a">
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