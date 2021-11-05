<!DOCTYPE html>
<html lang="en">
<body>
<?php
        $error=false;
        if(isset($_GET['donhang_id']) && !empty($_GET['donhang_id'])){
        require '../config.php';
        $result= mysqli_query($conn,"DELETE FROM `donhang` WHERE `donhang`.`donhang_id`=".$_GET['donhang_id']);
        if(!$result){
            $error = "Không thể xóa đơn hàng";
            }
            mysqli_close($conn);
            if($error !== false){
              ?>
            <div>
                <h1> Thông báo</h1>
                <h4> <?= $error ?></h4>
                <a href="./admin_donhang.php">Danh sách đơn hàng</a>
            </div>
            <?php } else { ?>
            <div>
                <h1> Xóa đơn hàng thành công</h1>
                <a href="./admin_donhang.php"> Danh sách đơn hàng</a>
            </div>
            <?php }?>
        <?php }?>
</body>
</html>