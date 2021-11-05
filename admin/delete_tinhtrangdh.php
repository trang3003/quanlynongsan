<!DOCTYPE html>
<html lang="en">
<body>
<?php
        $error=false;
        if(isset($_GET['tinhtrang_id']) && !empty($_GET['tinhtrang_id'])){
        require '../config.php';
        $result= mysqli_query($conn,"DELETE FROM `tinhtrangdh` WHERE `tinhtrangdh`.`tinhtrang_id`=".$_GET['tinhtrang_id']);
        if(!$result){
            $error = "Không thể xóa tình trạng đơn hàng này";
            }
            mysqli_close($conn);
            if($error !== false){
              ?>
            <div>
                <h1> Thông báo</h1>
                <h4> <?= $error ?></h4>
                <a href="./admin_tinhtrangdh.php">Danh sách tình trạng đơn hàng</a>
            </div>
            <?php } else { ?>
            <div>
                <h1> Xóa tình trạng đơn hàng thành công</h1>
                <a href="./admin_tinhtrangdh.php"> Danh sách tình trạng đơn hàng</a>
            </div>
            <?php }?>
        <?php }?>
</body>
</html>