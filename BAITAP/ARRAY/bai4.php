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
    $nhapmang = $_POST['nhapmang'];
    $num = $_POST['num'];

  if ($nhapmang && is_numeric($num)) {
    $arr = explode(',', $nhapmang);
    $arrStr=implode(", ", $arr);
    $find=array();
    foreach($arr as $i => $v)  { // $arr biến muốn lặp , $i là key của mảng, $v là giá trị của mảng
      if ($v == $num) {
        $find[]=$i+1;
      }
    }

    if (count($find)>0) {
      $kq = "Tìm thấy số $num tại vị trí ".implode(', ', $find)." của mảng";
    } else {
      $kq = "Không tìm thấy số $num trong mảng";
    }}
  }
?>
<div class="main">
    <form action="" method="post">
      <table align="center">
        <tr>
          <th colspan="2">Tìm kiếm</th>
        </tr>
        <tr>
          <td>Nhập mảng</td>
          <td style="width: 300px">
            <input type="text" name="nhapmang" value="<?php if(isset($nhapmang)) echo $nhapmang ?>">
          </td>
        </tr>
        <tr>
          <td>Nhập số cần tìm</td>
          <td>
            <input type="number" name="num" value="<?php if(isset($num)) echo $num ?>">
          </td>
        </tr>
        <tr>
          <td></td>
          <td>
            <input type="submit" name="submit" value="Tìm kiếm"/>
          </td>
        </tr>
        <tr>
          <td>Mảng</td>
          <td>
            <input type="text" disabled value="<?php if(isset($arrStr)) echo $arrStr ?>">
          </td>
        </tr>
        <tr>
          <td>Kết quả tìm kiếm</td>
          <td>
            <input type="text" disabled value="<?php if(isset($kq)) echo $kq ?>">
          </td>
        </tr>
      </table>
      <div align="center">
        (Các phần tử trong mảng cách nhau bởi dấu ",")
      </div>
    </form>

  </div>

</body>
</html>
  
</html>