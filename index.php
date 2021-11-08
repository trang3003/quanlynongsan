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
    <style>
        .page-item{
            border: 1px solid #ccc;
            height:40px;
            padding: 5px 10px;
            color: #000;
        }
    </style>
</head>

<body>
    <?php
    require './header.php';?>
<?php
    require("./config.php");
    if(isset($_GET['search']) && !empty($_GET['search'])){
      $key =$_GET['search'];
      $products=mysqli_query($conn,"SELECT *FROM `sanpham` WHERE `sanpham_ten` LIKE '%$key%' ORDER BY sanpham_ten");
    }
    else{
      $products=mysqli_query($conn,"SELECT *FROM `sanpham` WHERE sanpham.loaisanpham_id = 2");
    }
?>

    <!-- Hero Section Begin -->
    <section class="hero hero-normal" style="sticky-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-9">
                    <div class="hero__item set-bg" data-setbg="./images/banner1.png">
                        <div class="hero__text">
                            <span>GREEN NEST</span>
                            <h2>Vegetable <br />100% Organic</h2>
                            <p>Cảm ơn quý khách hàng đã đồng hành cùng green nest ^^</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="./images/thitboxay.jpg">
                            <h5><a href="./thitsach.php">Thịt Sạch</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="./images/cachua.jpg">
                            <h5><a href="./traicaysach.php">Trái Cây Sạch</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="./images/caisu.jpg">
                            <h5><a href="./raucusach.php">Rau Củ Sạch</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="./images/cathuu.jpg">
                            <h5><a href="./thuyhaisan.php">Thủy Hải, Sản Tươi</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>SẢN PHẨM</h2>
                    </div>
                    <form action="test.php" method="POST" target="ten">
                    <div class="featured__controls">
                        <ul>
                            <li class="active">TRÁI CÂY GREEN NEST</li>
                        </ul>
                    </div>
                    </form>
                </div>
            </div>
            <div class='row featured__filter'>
            <?php
                while($row =mysqli_fetch_array($products)){
                    ?>
                    <div class='col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat'>
                                <div class='featured__item'>
                                    <div class='featured__item__pic set-bg' data-setbg="<?=$row['sanpham_anh']?>">
                                        <ul class='featured__item__pic__hover'>
                                            <li><a href="chitietsp.php?sanpham_id=<?=$row['sanpham_id'];?>"><i class='fa fa-retweet'></i></a></li>
                                         <li><a href="giohang.php?chitietdonhang_soluong[<?php echo $row['sanpham_id']; ?>]&action=add"><i class='fa fa-shopping-cart'></i></a></li>
                                        </ul>
                                    </div>
                                    <div class='featured__item__text'>
                                        <h6><a href='#'><?=$row['sanpham_ten']?></a></h6>
                                        <h5><?=$row['sanpham_giaban'];?> <span>  VNĐ</span></h5>
                                    </div>
                                </div>
                        </div>
                    <?php }?>
             </div>
        </div>
    </section>
    <!-- Featured Section End -->
    <div class="featured__controls">
                        <ul>
                            <li class="active">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</li>
                        </ul>
                    </div>
    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="./images/banner1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="./images/banner2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <br>
    <br>
    <br>
    <br>
    <br>

    <?php 
    require './footer.php';
    ?>

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