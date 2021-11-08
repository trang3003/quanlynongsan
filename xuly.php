<div class="header__top__right__auth">
<?php

    if(isset($_SESSION['khachhang']['khachhang_ten'])){
        $ten=$_SESSION['khachhang']['khachhang_ten'];
?>
        <a href="./index.php"><i class="fa fa-user"></i><?php echo $khachhang_ten; ?></a>
<?php
    }else{
?>
        <a href="./dangnhap.php"><i class="fa fa-user"></i>Đăng nhập</a>
<?php 
    }
?>
</div>