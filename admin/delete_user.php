<!DOCTYPE html>
<html lang="en">
<body>
<?php
        $error=false;
        if(isset($_GET['nguoidung_id']) && !empty($_GET['nguoidung_id'])){
        require '../config.php';
        $sql="DELETE FROM `nguoidung` WHERE `nguoidung`.`nguoidung_id`=";
        $result= mysqli_query($conn,$sql.$_GET['nguoidung_id']);
        if(!$result){
            $error = "Không thể xóa tài khoản";
            }
            mysqli_close($conn);
            if($error !== false){
              ?>
            <div>
                <h1> Thông báo</h1>
                <h4> <?= $error ?></h4>
                <a href="./admin_user.php">Danh sách tài khoản</a>
            </div>
            <?php } else { ?>
            <div>
                <h1> Xóa tài khoản thành công</h1>
                <a href="./admin_user.php"> Danh sách tài khoản</a>
            </div>
            <?php }?>
        <?php }?>
        
</body>
</html>