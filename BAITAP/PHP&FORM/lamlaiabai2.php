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

if(isset($_POST['submit'])){
    $bankinh=$_POST["bankinh"];
    $PI = 3.14;
    if($bankinh<0) $bankinh="Nhập lại bán kính";
    else{
        $dientich = $PI * $bankinh * $bankinh;
        $chuvi= 2* $PI* $bankinh;
    }
   
}
if(isset($_POST["reset"])){
    $bankinh=$_POST["bankinh"];
    $bankinh="";
}


?>
    <form action="" method="post">
        <table align="center" bgcolor="orange">
            <th colspan="2" bgcolor="pink" >
                DIỆN TÍCH VÀ CHU VI HÌNH TRÒN
            </th>
            <tr >
                <td> Bán kính :</td>
                <td><input type="text" name="bankinh" placeholder="Nhập bán kính" size="25" value="<?php if(isset($_POST['bankinh'])) echo $bankinh; ?>"></td>
            </tr>
            <tr>
                <td> Diện tích :</td>
                <td><input type="text" name="dientich" disabled size="25" value="<?php if(isset($dientich)) echo $dientich; ?>"></td>
            </tr>
            <tr>
                <td> Chu vi :</td>
                <td><input type="text" name="chuvi" disabled size="25" value="<?php if(isset($chuvi)) echo $chuvi; ?>"></td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="Tính">
                    <input type="submit" name="reset" value="Xóa">
                 </td>
            </tr>

        </table>
    </form>
</body>
</html>
