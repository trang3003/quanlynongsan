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

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_GET['action']) && $_GET['action'] == "send") {
    if (empty($_POST['email'])) { //Kiểm tra xem trường email có rỗng không?
        $error = "Bạn phải nhập địa chỉ email";
    } elseif (!empty($_POST['email']) && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $error = "Bạn phải nhập email đúng định dạng";
    } elseif (empty($_POST['content'])) { //Kiểm tra xem trường content có rỗng không?
        $error = "Bạn phải nhập nội dung";
    }
    if (!isset($error)) {
        include 'library.php'; // include the library file
        require 'vendor/autoload.php';
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
            $mail->CharSet = "UTF-8";
            $mail->SMTPDebug = 0;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = SMTP_HOST;  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = SMTP_UNAME;                 // SMTP username
            $mail->Password = SMTP_PWORD;                           // SMTP password
            $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = SMTP_PORT;                                    // TCP port to connect to
            //Recipients
            $mail->setFrom(SMTP_UNAME, "Tên người gửi");
            $mail->addAddress($_POST['email'], 'Tên người nhận');     // Add a recipient | name is option
            $mail->addReplyTo(SMTP_UNAME, 'Tên người trả lời');
//                    $mail->addCC('CCemail@gmail.com');
//                    $mail->addBCC('BCCemail@gmail.com');
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $_POST['title'];
            $mail->Body = $_POST['content'];
            $mail->AltBody = $_POST['content']; //None HTML
            $result = $mail->send();
            if (!$result) {
                $error = "Có lỗi xảy ra trong quá trình gửi mail";
            }
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    }
    ?>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="./images/banner1.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Liên Hệ</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Trang Chủ</a>
                            <span>Liên Hệ</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_phone"></span>
                        <h4>SỐ ĐIỆN THOẠI</h4>
                        <p>0354037706</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_pin_alt"></span>
                        <h4>ĐỊA CHỈ</h4>
                        <p>66 Nguyễn Đình Chiểu, Nha Trang, Khánh Hòa</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_clock_alt"></span>
                        <h4>THỜI GIAN</h4>
                        <p>7:00 am to 22:00 pm</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_mail_alt"></span>
                        <h4>EMAIL</h4>
                        <p>truongthithuytrang011@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>MAIL CHO CHÚNG TÔI</h2>
                    </div>
                </div>
            </div>
            <form action="?action=send" method="get">
                <div class="row">
                    <div class="col-lg-6 col-md-6">  
                        <input type="text" name="ten" placeholder="Tên của bạn" value="<?php if(isset($ten)) echo $ten; ?>">
                    </div>
                    <div class="col-lg-6 col-md-6">  
                        <input type="text" name="title" placeholder="Tên của bạn" value="<?php if(isset($title)) echo $title; ?>">
                    </div>
                    <!-- <div class="col-lg-6 col-md-6">
                        <input type="text" name="email"  placeholder="Gửi đến mail" value="<?php if(isset($from)) echo $from; ?>">
                    </div> -->
                    <div class="col-lg-12 text-center">
                        <textarea name="note" placeholder="Lời nhắn của bạn" value="<?php if(isset($note)) echo $note; ?>"></textarea>
                        <button type="submit" class="site-btn">GỬI NGAY</button>
                        <span><?php if(isset($mess)) echo $mess; ?></span>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->

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