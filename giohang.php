<?php session_start();
if(isset($_SESSION['khachhang'])){
    $khachhang_ten=$_SESSION['khachhang']['nguoidung_ten'];
    $khachhang_email=$_SESSION['khachhang']['nguoidung_email'];
    $khachhang_sdt=$_SESSION['khachhang']['nguoidung_sdt'];
    $khachhang_diachi=$_SESSION['khachhang']['nguoidung_diachi'];
    
}
else{
    $khachhang_ten='';
    $khachhang_email='';
    $khachhang_sdt='';
    $khachhang_diachi='';
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
<?php 
    require './header_Xtimkiem.php';
?>
    <?php
    $error=false;
     require './config.php';
     if(!isset($_SESSION["giohang"])){
        $_SESSION["giohang"]=array();
     }
     if(isset($_GET['action'])){
         function update_cart($add=false){
            foreach($_REQUEST['chitietdonhang_soluong'] as $sanpham_id => $chitietdonhang_soluong){
                if($add){
                    if(!isset( $_SESSION["giohang"][$sanpham_id])){
                        $_SESSION["giohang"][$sanpham_id]=0;
                    }
                     if(!is_numeric($chitietdonhang_soluong))
                            $chitietdonhang_soluong=1;
                        $_SESSION["giohang"][$sanpham_id] += $chitietdonhang_soluong;
                }else{//add == false : th??m s???n ph???m m???i
                    $_SESSION["giohang"][$sanpham_id]=$chitietdonhang_soluong;
                }
            }
         }
         switch($_GET['action']){
             case "add":{
                 
             }
                update_cart(true);
            case "delete":
                if(isset($_GET['sanpham_id'])){
                    unset($_SESSION["giohang"][$_GET['sanpham_id']]);
                }
                //header('Location: ./giohang.php');
                break;
            case "submit":
                if(isset($_POST['update_click'])){
                    update_cart();
                //header('Location: ./giohang/php');
                }elseif($_POST['order_click']){
                    if(!isset($_SESSION['khachhang'])){
                        echo"
                        <script type='text/javascript'>
                            alert('B???n ????ng nh???p ????? th???c hi???n thao t??c n??y');
                            location.href = './dangnhap.php';
                        </script>";
                    }
                    else{
                        $result_kh=$conn->query("SELECT nguoidung_id FROM nguoidung WHERE nguoidung_email='{$_SESSION['khachhang']['nguoidung_email']}'");
                        $row_kh=$result_kh->fetch_array();
                        $khachhang_id=$row_kh['nguoidung_id'];
                        $donhang_diachi=$_POST['nguoidung_diachi'];
                        $donhang_email=$_POST['nguoidung_email'];
                        $donhang_sdt=$_POST['nguoidung_sdt'];
                        $donhang_ghichu=$_POST['nguoidung_ghichu'];
                        $tinhtrang_id=3;
                        $donhang_tongtien=$_POST['donhang_tongtien'];
                        $sql="INSERT INTO `donhang`(`tinhtrang_id`, `khachhang_id`, `donhang_email`, `donhang_sdt`, `donhang_diachi`, `donhang_ghichu`, `donhang_tongtien`)  VALUES ('$tinhtrang_id','$khachhang_id','$donhang_email','$donhang_sdt','$donhang_diachi','$donhang_ghichu','$donhang_tongtien')";
                        $result_mh=$conn->query($sql);
                        if($result_mh){
                            foreach($_SESSION['giohang'] as $key=>$value){
                                $result_id=$conn->query("SELECT * FROM donhang ORDER BY donhang_id DESC LIMIT 1");
                                $row_id=$result_id->fetch_array();
                                $dh_id=$row_id['donhang_id'];
                                $sql_ct="INSERT INTO `chitietdonhang`(`chitietdonhang_soluong`, `sanpham_id`, `donhang_id`) VALUES ('$value','$key','$dh_id')";
                                $result_ct=$conn->query($sql_ct);
                            }
                            unset($_SESSION['giohang']);
                            echo"
                            <script type='text/javascript'>
                                alert('Mua h??ng th??nh c??ng');
                                location.href = './giohang.php';
                            </script>";
                        }
                        else{
                            echo"
                            <script type='text/javascript'>
                                alert('Mua h??ng th???t b???i');
                                location.href = './giohang.php';
                            </script>";
                        }


                    }
                }

                break;
         }
         
         
     }
     if(!empty($_SESSION["giohang"])){
         $thu=implode(",", array_keys($_SESSION["giohang"]));
         $sql="SELECT * FROM `sanpham` WHERE `sanpham_id` IN ($thu)";
        $products =mysqli_query($conn, $sql);
   
    ?>
    
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="./images/banner1.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Gi??? H??ng</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Trang Ch???</a>
                            <span>Gi??? H??ng</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="shoping-cart spad">
        <div class="container">
        <?php if (!empty($error)) { ?> 
                <div id="notify-msg">
                    <?= $error ?>. <a href="javascript:history.back()">Quay l???i</a>
                </div>
            <?php } elseif (!empty($success)) { ?>
                <div id="notify-msg">
                    <?= $success ?>. <a href="./index.php">Ti???p t???c mua h??ng</a>
                </div>
            <?php } else { ?>
            <form action="giohang.php?action=submit" method="post">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                      
                        <table>
                            <thead>
                                <tr>
                                    
                                <th class="shoping__product">S???N PH???M</th>
                                    <th class="shoping__product">???NH</th>
                                    <th>GI??</th>
                                    <th>S??? L?????NG</th>
                                    <th>T???NG</th>
                                    <th>X??A</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            if(!empty($products)){
                            $total=0;
                            $soluong=0;
                while($row=mysqli_fetch_array($products)){
                    ?>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <h5><?=$row['sanpham_ten']?></h5>
                                        <input type="hidden" name="sanpham_id" value="<?=$row['sanpham_id']?>">
                                    </td>
                                    <td class="shoping__cart__item">
                                        <img style="width:150px; height:150px;"src="<?=$row['sanpham_anh']?>" alt="">
                                    </td>
                                    <td class="shoping__cart__price">
                                    <?=$row['sanpham_giaban']?>
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <input size="2" type="text" value="<?=$_SESSION["giohang"][$row['sanpham_id']]?>" name="chitietdonhang_soluong[<?=$row['sanpham_id']?>]">
                                        
                                    </td>
                                    <td class="shoping__cart__total"><?=$row['sanpham_giaban']*$_SESSION["giohang"][$row['sanpham_id']]?>
                                    </td>
                                    <td class="shoping__cart__item__close">
                                       <a href="giohang.php?action=delete&sanpham_id=<?=$row['sanpham_id']?>">X</a>
                                    </td>
                                </tr>
                                <?php 
                                $soluong+=$_SESSION["giohang"][$row['sanpham_id']];
                                $total+=$row['sanpham_giaban']*$_SESSION["giohang"][$row['sanpham_id']];
                            }}?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="./index.php" class="primary-btn cart-btn">TRANG CH???</a>
                        <input type="submit" value="??P D???NG" name="update_click" class="primary-btn cart-btn cart-btn-right">
                    </div>
                </div>
            </div>
            <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <h4>TH??NG TIN GIAO H??NG</h4>
                    <div class="row">
                          <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>CHI TI???T ????N H??NG</h4>
                                <div class="checkout__order__products">S???n ph???m <span>T???ng</span></div>
                                <ul>
                                    <li><?=$row['sanpham_ten']?><span><?=$row['sanpham_id']?></span></li>
                                    <li><?=$row['sanpham_ten']?><span><?=$row['sanpham_id']?></span></li>
                                    <li><?=$row['sanpham_ten']?><span><?=$row['sanpham_id']?></span></li>
                                </ul>
                                <hr>
                                <div class="checkout__order__total">T???NG TI???N <span><?=$total?> VN??</span></div>
                                <input type="hidden" name="donhang_tongtien" value="<?=$total?>">
                                <div class="checkout__order__total">S??? L?????NG<span><?=$soluong?></span></div>
                                <em> C???m ??n qu?? kh??ch ???? ?????ng h??nh c??ng Green Nest ^^</em>
                            </div>
                        </div>
                        <div class="col-lg-8 ">
                            <div class="checkout__input">
                                <p>T??n kh??ch h??ng<span>*</span></p>
                                <input type="text" name="nguoidung_ten" require="" placeholder="Nh???p v??o ?????a ch??? (s??? nh??/t??n ???????ng, t???nh, th??nh ph???)"
                                    class="checkout__input__add" value="<?php if(isset($_POST['nguoidung_ten'])){echo  $_POST['nguoidung_ten'];} else { echo $khachhang_ten;} ?>">
                                    <input type="hidden" name="nguoidung_id" require=""
                                    class="checkout__input__add" value="<?php if(isset($_POST['nguoidung_id']))echo  $_POST['nguoidung_id'];?>">
                            </div>
                            <div class="checkout__input">
                                <p>S??? ??i???n tho???i<span>*</span></p>
                                <input type="text" name="nguoidung_sdt" placeholder="Nh???p v??o s??? ??i???n tho???i" require=""
                                    class="checkout__input__add"value="<?php if(isset($_POST['nguoidung_sdt'])){ echo  $_POST['nguoidung_sdt'];} else { echo $khachhang_sdt;} ?>">
                            </div>
                            <div class="checkout__input">
                                <p>Email<span>*</span></p>
                                <input type="text" name="nguoidung_email" placeholder="Nh???p v??o email" require=""
                                    class="checkout__input__add"value="<?php if(isset($_POST['nguoidung_email'])){ echo  $_POST['nguoidung_email'];} else { echo $khachhang_email;} ?>">
                            </div>
                            <div class="checkout__input">
                                <p>?????a ch???<span>*</span></p>
                                <input type="text" name="nguoidung_diachi" placeholder="Nh???p v??o ?????a ch??? (s??? nh??/t??n ???????ng, t???nh, th??nh ph???)" require=""
                                    class="checkout__input__add"value="<?php if(isset($_POST['nguoidung_diachi'])){ echo  $_POST['nguoidung_diachi'];} else { echo $khachhang_diachi;} ?>">
                            </div>
                            <div class="checkout__input">
                                <p>Ghi ch??<span></span></p>
                                <input type="text" require="" name="nguoidung_ghichu" <?php if(isset($nguoidung_ghichu)) echo $nguoidung_ghichu; ?>
                                    placeholder="Nh???ng ghi ch?? khi giao h??ng (c???n th???n, giao tr?????c 12PM..)">
                            </div>
                            <input type="submit" value="MUA H??NG" name="order_click" class="site-btn">
                        </div>
                    </div>
            </div>
        </div>
    </section>
        </form>
        <?php }?>
 
        <?php
            
        }else{
            echo '<script>alert("Kh??ng c?? s???n ph???m n??o trong gi??? h??ng !!")</script>';
        }
    ?>
    <?php 
    require './footer.php';
    ?>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>