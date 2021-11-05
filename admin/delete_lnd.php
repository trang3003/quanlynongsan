<!DOCTYPE html>
<html lang="en">
<body>
<?php
        $error=false;
        if(isset($_GET['loainguoidung_id']) && !empty($_GET['loainguoidung_id'])){
        require '../config.php';
        $result= mysqli_query($conn,"DELETE FROM `loainguoidung` WHERE `loainguoidung`.`loainguoidung_id`=".$_GET['loainguoidung_id']);
        if(!$result){
            $error = "Không thể xóa loại người dùng này";
            }
            mysqli_close($conn);
            if($error !== false){
              ?>
            <div>
                <h1> Thông báo</h1>
                <h4> <?= $error ?></h4>
                <a href="./admin_lnd.php">Danh sách loại người dùng</a>
            </div>
            <?php } else { ?>
            <div>
                <h1> Xóa loại người dùng thành công</h1>
                <a href="./admin_lnd.php"> Danh sách loại người dùng</a>
            </div>
            <?php }?>
        <?php }?>
</body>
</html>