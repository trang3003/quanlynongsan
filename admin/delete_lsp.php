<!DOCTYPE html>
<html lang="en">
<body>
<?php
        $error=false;
        if(isset($_GET['loaisanpham_id']) && !empty($_GET['loaisanpham_id'])){
        require '../config.php';
        $result= mysqli_query($conn,"DELETE FROM `loaisanpham` WHERE `loaisanpham`.`loaisanpham_id`=".$_GET['loaisanpham_id']);
        if(!$result){
            $error = "Không thể xóa loại sản phẩm này";
            }
            mysqli_close($conn);
            if($error !== false){
              ?>
            <div>
                <h1> Thông báo</h1>
                <h4> <?= $error ?></h4>
                <a href="./admin_lsp.php">Danh sách loại sản phẩm</a>
            </div>
            <?php } else { ?>
            <div>
                <h1> Xóa nhà cung cấp thành công</h1>
                <a href="./admin_lsp.php"> Danh sách loại sản phẩm</a>
            </div>
            <?php }?>
        <?php }?>
</body>
</html>