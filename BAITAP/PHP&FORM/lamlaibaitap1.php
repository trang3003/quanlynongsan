<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST["submit"])){
        $chieudai=$_POST["chieudai"];
        $chieurong=$_POST["chieurong"];
        if($chieudai <$chieurong || $chieudai<=0 || $chieurong <=0) $dientich="Nhập lại";
        else{
            $dientich=$chieudai*$chieurong;
        }
    }
    if(isset($_POST["reset"])){
        $chieudai=$_POST["chieudai"];
        $chieudai="";
        $chieurong=$_POST["chieurong"];
        $chieurong="";
    }

    ?>
    <form action="" method="post">
        <table bgcolor="pink" align="center">
            <th colspan="3"> DIỆN TÍCH HÌNH CHỮ NHẬT</th>
            <tr>
                <td>Chiều dài</td>
                <td><input type="text" name="chieudai" placeholder="Nhập chiều dài" value="<?php if(isset($_POST["chieudai"])) echo $chieudai; ?>"></td>
            </tr>
            
            <tr>
                <td>Chiều rộng</td>
                <td><input type="text" name="chieurong" placeholder="Nhập chiều rộng" value="<?php if(isset($_POST["chieurong"])) echo $chieurong; ?>"></td>
            </tr>
            <tr>
                <td>Diện tích</td>
                <td><input type="text" name="dientich" disabled value="<?php if( isset($dientich)) echo $dientich; ?>"></td>
            </tr>
            <tr colspan="3">
                <td><input type="submit" value="Tính" name="submit">
                <input type="submit" value="Xóa" name="reset"></td>
            </tr>
        </table>
    </form>
</body>
</html>