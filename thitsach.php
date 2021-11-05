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
    require("./config.php");
    if(isset($_GET['search']) && !empty($_GET['search'])){
      $key =$_GET['search'];
      $products=mysqli_query($conn,"SELECT *FROM `sanpham` WHERE `sanpham_ten` LIKE '%$key%' ORDER BY sanpham_ten");
    }
    else{
      $products=mysqli_query($conn,"SELECT *FROM `sanpham` WHERE sanpham.loaisanpham_id = 3");
    }
?>

<?php 
    require './header.php';
    ?>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="./images/banner1.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>GREEN NEST</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Trang chủ</a>
                            <span>Thịt Sạch</span>
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
                                    <span>Tất cả thịt đều ở đây</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <?php
                while($row =mysqli_fetch_array($products)){
                    ?>
                    <div class='col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat'>
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