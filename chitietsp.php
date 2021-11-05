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
    require './config.php';
    $result =mysqli_query($conn,"SELECT * FROM `sanpham`,`loaisanpham`,`nhacungcap`,`donvitinh` WHERE sanpham.loaisanpham_id=loaisanpham.loaisanpham_id AND sanpham.nhacungcap_id=nhacungcap.nhacungcap_id AND sanpham.donvitinh_id=donvitinh.donvitinh_id AND `sanpham_id`=".$_GET['sanpham_id']);
    $product =mysqli_fetch_assoc($result);

    ?>
    <?php 
    require './header_Xtimkiem.php';
    ?>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="./images/banner1.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Vegetable’s Package</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Trang Chủ</a>
                            <a href="./sanpham.php">Sản Phẩm</a>
                            <span>Chi Tiết Sản Phẩm </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="<?=$product['sanpham_anh']?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3><?=$product['sanpham_ten']?></h3>
                        <div class="product__details__price"><?=$product['sanpham_giaban']?> vnđ</div>
                        <form action="giohang.php?action=add" method="post">
                        <div class="product__details__quantity">
                                <input size="2" type="text" value="1" name="chitietdonhang_soluong[<?php echo $product['sanpham_id']; ?>]">
                        </div>
                        <input type="submit" class="primary-btn" value="THÊM VÀO GIỎ">
                        </form>
                        <ul>
                            <li><b>Nhà cung cấp</b> <span> <?=$product['nhacungcap_ten']?></span></li>
                            <li><b>Loại sản phẩm</b> <span><?=$product['loaisanpham_ten']?></span></li>
                            <li><b>Đơn vị tính</b> <span><?=$product['donvitinh_ten']?></span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true">NEWS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                    aria-selected="false">NEWS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                    aria-selected="false">NEWS</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Dinh dưỡng trong rau xanh, bạn biết chưa ?</h6>
                                    <p>Các loại rau tươi của nước ta rất phong phú. Nhìn chung ta có thẻ chia rau tươi
                                        thành nhiều nhóm: nhóm rau xanh như rau cải, rau muống, rau xà lách, rau cần...;
                                        nhóm rễ củ như cà rốt, củ cải, su hào, củ đậu...; nhóm cho quả như cà chua, cà
                                        bát, cà pháo, dưa chuột...; nhóm hành gồm các loại hành, tỏi,.v.v...
                                        Trong ăn uống hàng ngày, rau tươi có vai trò đặc biệt quan trọng. Tuy lượng
                                        protid và lipid trong rau tươi không đáng kể, nhưng chúng cung cấp cho cơ thể
                                        nhiều chất hoạt tính sinh học, đặc biệt là các muối khoáng có tính kiềm, các
                                        vitamin, các chất pectin và axit hữu cơ. Ngoài ra trong rau tươi còn có loại
                                        đường tan trong nước và chất xenluloza.
                                    </p>
                                    <p> Một đặc tính sinh lý quan trọng của rau tươi là chúng có khả năng gây thèm ăn và
                                        ảnh hưởng tới chức phận tiết của tuyến tiêu hoá. Tác dụng này đặc biệt rõ rệt ở
                                        các loại rau có tính tinh dầu như rau mùi, rau thơm, hành, tỏi...Ăn rau tươi
                                        phối hợp với những thức ăn nhiều protid, lipid, glucid làm tăng rõ rệt sự tiết
                                        dịch của dạ dày. Thí dụ: trong chế độ ăn có cả rau và protid thì lượng dịch vị
                                        tiết ra tăng gấp hai lần so với chế độ ăn chỉ có protid. Cũng vì vậy, bữa ăn có
                                        rau tươi tạo điều kiện thuận lợi cho sự tiêu hoá và hấp thu các thành phần dinh
                                        dưỡng khác.
                                        Rau còn là nguồn chất sắt quan trọng. Sắt trong rau được cơ thể hấp thu tốt hơn
                                        sắt ở các hợp chất vô cơ. Các loại rau đậu, sà lách là nguồn mangan tốt. Tóm lại
                                        rau tươi có vai trò quan trọng trong dinh dưỡng; bữa ăn hàng ngày của chúng ta
                                        không thể thiếu rau. Điều quan trọng là phải đảm bảo rau sạch, không có vi khuẩn
                                        gây bệnh và các hoá chất độc nguy hiểm.
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Tại sao ăn trái cây lại tốt cho sức khỏe ?</h6>
                                    <p>Hầu hết các loại trái cây đều có ít chất béo, natri và calo. Không có
                                        cholesterol.
                                        Trái cây là nguồn cung cấp nhiều chất dinh dưỡng thiết yếu được tiêu thụ ít, bao
                                        gồm kali, chất xơ, vitamin C và folate (axit folic).
                                        Chế độ ăn giàu kali có thể giúp duy trì huyết áp khỏe mạnh. Các nguồn trái cây
                                        cung cấp kali bao gồm chuối, mận khô và nước ép mận, đào và mơ khô, dưa hấu, dưa
                                        mật và nước cam.
                                        Chất xơ từ trái cây, giúp giảm lượng cholesterol trong máu và có thể giảm nguy
                                        cơ mắc bệnh tim. Chất xơ rất quan trọng đối với chức năng của ruột. Nó giúp giảm
                                        táo bón và bệnh túi thừa. Thực phẩm chứa chất xơ như trái cây giúp mang lại cảm
                                        giác no lâu với ít calo hơn. Trái cây nguyên hạt hoặc cắt nhỏ là nguồn cung cấp
                                        chất xơ; nước trái cây chứa ít hoặc không có chất xơ.
                                        Vitamin C rất quan trọng cho sự phát triển và sửa chữa của tất cả các mô cơ thể,
                                        giúp thúc đẩy quá trình phục hồi các vết cắt và vết thương, đồng thời giữ cho
                                        răng và nướu khỏe mạnh.</p>
                                    <p>Folate (axit folic) giúp cơ thể hình thành các tế bào hồng cầu. Phụ nữ trong độ
                                        tuổi sinh đẻ có thể mang thai nên tiêu thụ đủ folate từ thực phẩm, và bổ sung
                                        400mcg axit folic tổng hợp từ thực phẩm tăng cường hoặc thực phẩm bổ sung. Điều
                                        này làm giảm nguy cơ dị tật ống thần kinh, nứt đốt sống và thiếu não trong quá
                                        trình phát triển của thai nhi.
                                        Có thể nói trái cây chứa các chất dinh dưỡng quan trọng, như chất xơ và vitamin,
                                        những thứ mà cơ thể chúng ta cần để duy trì sức khỏe. Vì vậy, để tận dụng tối đa
                                        lợi ích dinh dưỡng trong trái cây để có một thể trạng sức khỏe tốt nhất!</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Nên ăn cá hay ăn thịt ?</h6>
                                    <p>Cá chứa nhiều chất đạm, giàu Axit amin và các loại Vitamin, khoáng chất. Lương
                                        Protein và Lipid trong các loại cá khác nhau đều có mức tương đồng nhau, trong
                                        đó Protein chiếm khoáng 16% - 17%, trong đó quan trọng nhất là Albumin, Globulin
                                        và Nucleoprotein.
                                        Cá rất giàu Vitamin đặc biệt là Vitamin A, D, Vitamin nhóm B và Vitamin PP.
                                        Ngoài ra, cá còn chứa hàm lượng lớn Canxi, Photpho, Sắt, Natri, Tocopherol,
                                        Biotin và Cholin, rất cần thiết cho sự phát triển của trẻ em.
                                        Trong cá có chứa chất béo, đặc biệt là ở phần đầu cá. Nhưng đây là những chất
                                        béo không no, rất tốt cho sự tăng trưởng của cơ thể, giảm thiểu nguy cơ mắc các
                                        bệnh tim mạch. Cá rất giàu Omega 3, một loại Axit béo có hoạt tính sinh học cao,
                                        mang lại nhiều lợi ích cho sức khỏe như giảm lượng Cholesterol và Triglycerid -
                                        nguyên nhân gây ra mỡ trong máu và cao huyết áp.
                                        Ăn cá thường xuyên không những cung cấp dưỡng chất cần thiết cho cơ thể mà còn
                                        làm giảm nguy cơ mắc chứng béo phì, tim mạch. Nếu muốn ăn kiêng để giảm cân mà
                                        cơ thể vẫn đủ chất và khỏe mạnh thì cá là sự lựa chọn hoàn hảo.</p>
                                    <p>Thịt được cấu tạo chủ yếu từ Protein, thịt chứa nhiều Protein hơn cá, là nguồn
                                        Protein thực phẩm hoàn thiện nhất, chứa hầu hết các Axit amin cần thiết cho cơ
                                        thể con người. Do đó, thịt được xem là thực phẩm bổ sung năng lượng và dưỡng
                                        chất cho những ai có thể trạng gầy gò, hoặc muốn hồi phục sức khỏe, tăng cơ bắp,
                                        những người thường xuyên tập thể hình.
                                        Bên cạnh chất đạm, thịt còn rất giàu Vitamin và khoáng chất, không thua kém cá,
                                        trong đó có Vitamin A, C, D, E. Hàm lượng Vitamin nhóm B trong thịt cao hơn hẳn
                                        so với cá. Về khoáng chất, trong thịt có chứa hầu hết các nguyên tố vi lượng và
                                        đa lượng cần thiết cho hoạt động bình thường của cơ thể như: Canxi, Magie,
                                        Photpho, Kali, Natri, Sắt, Kẽm, Đồng, Mangan, Selen,...
                                        Thịt cũng có chứa các hoạt chất sinh học, bao gồm Creatine, Taurine,
                                        Glutathione... Hầu hết là các hoạt chất chống oxy hóa và duy trì cơ bắp.
                                        Thịt cũng rất giàu chất béo tùy thuộc vào loại thịt, vị trí cắt thịt. Chất béo
                                        trong thịt có hai loại, bão hòa và không bão hòa, với hàm lượng tương đương
                                        nhau. Do đó, ăn quá nhiều thịt sẽ không có lợi cho sức khỏe tim mạch và dễ mắc
                                        các bệnh huyết áp.</p>
                                    <p>Cá và thịt đều có những lợi ích tuyệt vời đối với sức khỏe con người và luôn là
                                        những nguồn dinh dưỡng thiết yếu. Tùy tình trạng sức khỏe, thể chất và nhu cầu
                                        của bản thân, bạn có thể chọn lựa xen kẽ cá và thịt để làm phong phú thực đơn
                                        của gia đình mình. Tuy nhiên, không nên chỉ ăn cá hoặc chỉ ăn thịt, mà cần phải
                                        có sự điều độ và phân bổ hợp lý đối với hai loại thực phẩm trên.
                                        Ngoài ra, với thịt, bạn cũng nên ăn xen kẽ thịt gia súc và gia cầm, với lượng
                                        thịt không quá 300 gram - 500 gram mỗi tuần. Với cá, bạn có thể ưu tiên ăn nhiều
                                        hơn so với thịt vì Protein và chất béo của cá dễ hấp thụ hơn, ít Cholesterol và
                                        chất béo có hại cho sức khỏe.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

    <!-- Related Product Section End -->

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