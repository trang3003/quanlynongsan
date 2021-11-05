<!DOCTYPE html>
<html lang="en">
<body>
<?php
        $error=false;
        if(isset($_GET['sanpham_id']) && !empty($_GET['sanpham_id'])){
        require '../config.php';
        $result= mysqli_query($conn,"DELETE FROM `sanpham` WHERE `sanpham`.`sanpham_id`=".$_GET['sanpham_id']);
        if(!$result){
            $error = "Không thể xóa sản phẩm";
            }
            mysqli_close($conn);
            if($error !== false){
              ?>
            <div>
                <h1> Thông báo</h1>
                <h4> <?= $error ?></h4>
                <a href="./admin_sp.php">Danh sách sản phẩm</a>
            </div>
            <?php } else { ?>
            <div>
                <h1> Xóa tài khoản thành công</h1>
                <a href="./admin_sp.php"> Danh sách sản phẩm</a>
            </div>
            <?php }?>
        <?php }?>
</body>
</html>