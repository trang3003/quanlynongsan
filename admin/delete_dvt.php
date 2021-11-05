<!DOCTYPE html>
<html lang="en">
<body>
<?php
        $error=false;
        if(isset($_GET['donvitinh_id']) && !empty($_GET['donvitinh_id'])){
        require '../config.php';
        $result= mysqli_query($conn,"DELETE FROM `donvitinh` WHERE `donvitinh`.`donvitinh_id`=".$_GET['donvitinh_id']);
        if(!$result){
            $error = "Không thể xóa đơn vị tính này";
            }
            mysqli_close($conn);
            if($error !== false){
              ?>
            <div>
                <h1> Thông báo</h1>
                <h4> <?= $error ?></h4>
                <a href="./admin_dvt.php">Danh sách đơn vị tính</a>
            </div>
            <?php } else { ?>
            <div>
                <h1> Xóa đơn vị tính thành công</h1>
                <a href="./admin_dvt.php"> Danh sách đơn vị tính</a>
            </div>
            <?php }?>
        <?php }?>
</body>
</html>