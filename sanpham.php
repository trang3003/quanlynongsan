<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <style>
        .page-item{
            border: 1px solid #ccc;
            height:40px;
            padding: 5px 10px;
            color: #000;
        }
    </style>
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
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- <link rel="stylesheet" href="./css/bootstrap.min.css"> -->
    </head>
<body>
      <!-- Page Preloder
      <div id="preloder">
        <div class="loader"></div>
    </div> -->
    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper" style="sticky-top">
        <div class="humberger__menu__logo">
            <a href="#"><img src="./images/logo.jpg" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="./giohang.php"><i class="fa fa-shopping-bag"></i> <span></span></a></li>
            </ul>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__auth">
                <a href="./dangnhap.php"><i class="fa fa-user"></i> Đăng Nhập</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.php">Trang Chủ</a></li>
                <li><a href="./sanpham.php">Sản Phẩm</a></li>
                <li><a href="./gioithieu.php">Giới Thiệu</a></li>
                <li><a href="./lienhe.php">Liên Hệ</a></li>
                <li><a href="#">Bài Tập</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./phan1.html"> PHP VÀ FORM</a></li>
                        <li><a href="./phan2.html"> PHP MẢNG CHUỖI HÀM</a></li>
                        <li><a href="./phan3.html">PHP & MYSQL</a></li>
                        <li><a href="./gioithieubanthan.php">GIỚI THIỆU BẢN THÂN</a></li>
                    </ul>
                </li>
                <li><a href="./gioithieubanthan.php">GIỚI THIỆU BẢN THÂN</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> truongthithuytrang011@gmail.com</li>
                <li>66 Nguyễn Đình Chiểu, Nha Trang, Khánh Hòa</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header"  style="sticky-top">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> truongthithuytrang011@gmail.com</li>
                                <li>66 Nguyễn Đình Chiểu, Nha Trang, Khánh Hòa</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header__top__right">
                            <div class="header__top__right__auth">
                                <a href="./dangnhap.php"><i class="fa fa-user"></i> Đăng Nhập</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.php"><img src="./images/logo.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index.php">Trang Chủ</a></li>
                            <li><a href="./sanpham.php">Sản Phẩm</a></li>
                            <li><a href="./gioithieu.php">Giới Thiệu</a></li>
                            <li><a href="./lienhe.php">Liên Hệ</a></li>
                            <li><a href="#">Bài Tập</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./phan1.html"> PHP VÀ FORM</a></li>
                                    <li><a href="./phan2.html"> PHP MẢNG CHUỖI HÀM</a></li>
                                    <li><a href="./phan3.html">PHP & MYSQL</a></li>
                                    <li><a href="./gioithieubanthan.php">GIỚI THIỆU BẢN THÂN</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="./giohang.php"><i class="fa fa-shopping-bag"></i> <span></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal" style="sticky-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>TẤT CẢ</span>
                        </div>
                        <ul>
                            <li><a href="./thitsach.php">Thịt Sạch</a></li>
                            <li><a href="./traicaysach.php">Trái Cây Sạch</a></li>
                            <li><a href="./raucusach.php">Rau Củ Sạch</a></li>
                            <li><a href="./thuyhaisan.php">Thủy, Hải Sản Tươi Sống</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="" method="get">
                                <input type="text" placeholder="Bạn cần tìm gì?" value="<?=isset($_GET['name']) ?$_GET['name'] : ""?>" name="name">
                                <button type="submit" class="site-btn">TÌM KIẾM</button> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Hero Section End -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
</body>
</html>
<?php


?>





<?php
    $search =isset($_GET['name']) ? $_GET['name'] : "";
    if($search){
        $where= "WHERE `sanpham_ten` LIKE '%".$search. "%'";
    }
    require("./config.php");
    $item_per_page =!empty($_GET['per_page'])?$_GET['per_page']:12;
    $current_page = !empty($_GET['page'])?$_GET['page']:3;
    $offset=($current_page-1) * $item_per_page;
    if($search){
        $products =mysqli_query($conn, "SELECT *FROM `sanpham` WHERE `sanpham_ten` LIKE '%".$search."%' ORDER BY 'sanpham_id' ASC LIMIT ".$item_per_page." OFFSET ".$offset);
        $totalRecords = mysqli_query($conn,"SELECT * FROM `sanpham` WHERE `sanpham_ten` LIKE '%" .$search. "%'");
    }else{
        $products =mysqli_query($conn, "SELECT *FROM `sanpham` ORDER BY 'sanpham_id' ASC LIMIT ".$item_per_page." OFFSET ".$offset);
        $totalRecords = mysqli_query($conn,"SELECT * FROM `sanpham`");
    }
    $totalRecords =$totalRecords->num_rows;
    $totalPages= ceil($totalRecords/$item_per_page);
    ?>
    <!-- Header Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="./images/banner1.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>GREEN NEST</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Trang chủ</a>
                            <span>Sản Phẩm</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-7">
                    <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="filter__sort">
                                    <span>Tất cả sản phẩm đều ở đây</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <?php
                while($row =mysqli_fetch_array($products)){
                    ?>
                    <div class='col-lg-3 col-md-3 col-sm-6 mix oranges fresh-meat'>
                                <div class='featured__item'>
                                    <div class='featured__item__pic set-bg' data-setbg="<?=$row['sanpham_anh']?>">
                                        <ul class='featured__item__pic__hover'>
                                            <li><a href="chitietsp.php?sanpham_id=<?=$row['sanpham_id']?>"><i class='fa fa-retweet'></i></a></li>
                                            <li><a href="giohang.php?chitietdonhang_soluong[<?php echo $row['sanpham_id']; ?>]&action=add"><i class='fa fa-shopping-cart'></i></a></li>
                                        </ul>
                                    </div>
                                    <div class='featured__item__text'>
                                        <h6><a href='#'> <?=$row['sanpham_ten']?></a></h6>
                                        <h5><?=$row['sanpham_giaban']?> <span>  VNĐ</span></h5>
                                        
                                    </div>
                                </div>
                        </div>
                    <?php }?>
<?php
    for($num =1; $num<=$totalPages;$num++){?>
   <?php if($num != $current_page){?>
      <?php if(($num>$current_page - 3) && ($num <$current_page + 3)){?>
      <a class="page_item" href="?<?=$param?>per_page=<?=$item_per_page?>&page=<?=$num?>"><?=$num?></a>
<?php }?>
   <?php } else {?>
    <strong class="page-item"><?=$num?></strong>
    <?php }?>
<?php } ?>
            </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Footer Section Begin -->
    <?php 
    require './footer.php';
    ?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
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