<!DOCTYPE html>
<html lang="en">
<body>
<?php
        $error=false;
        if(isset($_GET['nhacungcap_id']) && !empty($_GET['nhacungcap_id'])){
        require '../config.php';
        $result= mysqli_query($conn,"DELETE FROM `nhacungcap` WHERE `nhacungcap`.`nhacungcap_id`=".$_GET['nhacungcap_id']);
        if(!$result){
            $error = "Không thể xóa nhà cung cấp";
            }
            mysqli_close($conn);
            if($error !== false){
              ?>
            <div>
                <h1> Thông báo</h1>
                <h4> <?= $error ?></h4>
                <a href="./admin_ncc.php">Danh sách nhà cung cấp</a>
            </div>
            <?php } else { ?>
            <div>
                <h1> Xóa nhà cung cấp thành công</h1>
                <a href="./admin_ncc.php"> Danh sách nhà cung cấp</a>
            </div>
            <?php }?>
        <?php }?>
</body>
</html>