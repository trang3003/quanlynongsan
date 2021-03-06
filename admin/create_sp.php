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
         if(isset($_POST['sanpham_ten']) && !empty($_POST['sanpham_ten']) && isset($_FILES['sanpham_anh']) && !empty($_FILES['sanpham_anh']) && isset($_POST['sanpham_giaban']) && !empty($_POST['sanpham_giaban']) && isset($_POST['sanpham_soluong']) && !empty($_POST['sanpham_soluong']) && isset($_POST['loaisanpham_id']) && !empty($_POST['loaisanpham_id']) && isset($_POST['donvitinh_id']) && !empty($_POST['donvitinh_id'])  && isset($_POST['nhacungcap_id']) && !empty($_POST['nhacungcap_id']) ){
             require '../config.php';
             $sanpham_anh=$_FILES['sanpham_anh']['name'];
             $sanpham_anh_chen = "images/".$sanpham_anh;
             $sql=  "INSERT INTO `sanpham` (`sanpham_ten`,`sanpham_anh`,`sanpham_giaban`,`sanpham_soluong`,`loaisanpham_id`,`nhacungcap_id`,`donvitinh_id`) VALUE ('".$_POST['sanpham_ten']."','$sanpham_anh_chen','".$_POST['sanpham_giaban']."','".$_POST['sanpham_soluong']."','".$_POST['loaisanpham_id']."','".$_POST['donvitinh_id']."','".$_POST['nhacungcap_id']."')";
           move_uploaded_file($_FILES['sanpham_anh']['tmp_name'],"../images/".$sanpham_anh);
             $result= mysqli_query($conn,$sql);
             
             if(!$result){
                 if(strpos(mysqli_error($conn),"Duplicate entry") !== FALSE){
                     $error ="T??i kho???n ???? t???n t???i , Vui l??ng nh???p t??i kho???n kh??c";
                 }
             } 
             mysqli_close($conn);
             if($error !== false){
                 ?>
                 <div>
                     <h1> Th??ng b??o</h1>
                     <h4><?= $error ?></h4>
                     <a href="./create_sp.php">Th??m s???n ph???m kh??c</a>
                 </div>
                 <?php } else {?>
                     <div>
                     <h4 align="center">b???n ???? th??m s???n ph???m th??nh c??ng <?=$_POST['sanpham_ten']?></h4>
                     <a href="./admin_sp.php">Danh s??ch s???n ph???m</a>
                     </div>
                 <?php }?>
                 <?php }?>
        <?php } else{ ?> 
          <div class="col-lg-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-user"></i> Th??m m???i s???n ph???m</h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                      <form action="./create_sp.php?action=create" method="post" enctype = "multipart/form-data">
                      <label>Nh???p t??n s???n ph???m</label><br>
                      <input type="text" name="sanpham_ten" value=""><br>
                      <label>Nh???p gi?? b??n</label><br>
                      <input type="text" name="sanpham_giaban" value=""><br>
                      <label>Nh???p s??? l?????ng</label><br>
                      <input type="text" name="sanpham_soluong" value=""><br>
                      <label>???nh s???n ph???m: </label><br>
                    <div class="wrap-field">
                      <div class="right-wrap-field">
                        <input width="50px;" type="file" name="sanpham_anh"/>
                      </div>
                      <br>
                    </div>
                      <label>Lo???i s???n ph???m</label><br>
                      <select name="loaisanpham_id" id="">
                      <option value="1">Rau c???
                      </option>
                      <option value="2">Tr??i c??y
                      </option>
                      <option value="3">Th???t
                      </option>
                      <option value="4">Th???y h???i s???n
                      </option>
                    </select>
                    <label>Nh?? cung c???p</label><br>
                      <select name="nhacungcap_id" id="">
                      <option value="1">V?????n xanh ???? L???t
                      </option>
                      <option value="2">???? L???t Gab
                      </option>
                      <option value="3">Vi???t - Nh???t n??ng s???n
                      </option>
                      <option value="4">Orfarm
                      </option>
                      <option value="5">Rau c?????i Vi???t Nh???t
                      </option>
                    </select>
                    <label>????n v??? t??nh</label><br>
                      <select name="donvitinh_id" id="">
                      <option value="1">Kg
                      </option>
                      <option value="2">Qu???
                      </option>
                      <option value="3">T??i
                      </option>
                      <option value="4">Khay
                      </option>
                    </select>
                      <br>
                      <br>
                      <input type="submit" value="TH??M">
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
