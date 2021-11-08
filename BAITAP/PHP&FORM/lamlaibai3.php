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
    $ten=$_POST["ten"];
    $new=$_POST["new"];
    $old=$_POST["old"];
    
    $dongia=20000;
    if($new<$old || $old<0 || $new<0) $thanhtoan=" Nhập lại chỉ số";// điều kiện đúng thì && , TH saii thì dấu ||
    else{
        $thanhtoan= $dongia*($new - $old);
    } 
}

?>
    <form action="" method="post">
        <table bgcolor="pink" align="center">
            <th colspan="2" bgcolor="orange"> THANH TOÁN TIỀN ĐIỆN</th>
            <tr>
                <td>
                    Tên chủ hộ
                </td>
                <td><input type="text" placeholder="Nhập tên chủ hộ" name="ten" value="<?php if(isset($_POST["ten"])) echo $ten; ?>"> (Kw)</td>
            </tr>
            <tr>
                <td> Chỉ số cũ</td>
                <td><input type="text" placeholder="Nhập chỉ số cũ" name="old" value="<?php if(isset($_POST["old"])) echo $old; ?>">(Kw)</td>
            </tr>
            <tr>
                <td> Chỉ số mới</td>
                <td><input type="text" placeholder="Nhập chỉ số mới" name="new" value="<?php if(isset($_POST["new"])) echo $new; ?>">(VNĐ)</td>
            </tr>
            <tr>
                <td> Đơn giá</td>
                <td><input type="text"name="dongia" disabled value="20000">(VNĐ)</td>
            </tr>
            <tr>
                <td> Số tiền thanh toán </td>
                <td><input type="text"name="thanhtoan" disabled value="<?php if(isset($thanhtoan)) echo $thanhtoan; ?>"></td>
            </tr>
            <tr colspan="2">
                <td> </td>
                <td><input type="submit" name="submit" value="Tính"></td>
            </tr>
        </table>
    </form>
</body>
</html>