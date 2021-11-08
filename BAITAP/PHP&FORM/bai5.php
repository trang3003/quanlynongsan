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
    $batdau = $_POST['batdau'];
    $ketthuc = $_POST['ketthuc'];

      if ($batdau>=10 && $ketthuc<=24 && $batdau<$ketthuc){
          if ($ketthuc < 17) {
            $tien = ($ketthuc - $batdau) * 20000;
          } else if ($batdau > 17) {
            $tien = ($ketthuc - $batdau) * 45000;
          } else {
            $tien = (17 - $batdau) * 20000 + ($ketthuc - 17) * 45000;
          }
      }else{
        $error = 'Vui lòng nhập giá trị hợp lệ';
      }
  }
?>

 <div class="">
   <form  action="" method="post" >
    <table class="borderless" align="center" border="1">
    <thead>
      <tr>
        <th scope="col" colspan="2">TÍNH TIỀN KARAOKE</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Giờ bắt đầu</td>
        <td><input type="number" name="batdau" required value="<?php if(isset($batdau)) echo $batdau ?>"> (h)</td>
      </tr>
      <tr>
        <td>Giờ kết thúc</td>
        <td><input type="number" name="ketthuc" required value="<?php if(isset($ketthuc)) echo $ketthuc ?>"> (h)</td>
      </tr>
      <tr>
        <td>Tiền Thanh Toán</td>
        <td><input type="text" name="tien" disabled="disabled" value="<?php if(isset($tien))  echo $tien ?>"/> (VNĐ)</td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" name="submit" value="Tính"/></td>
      </tr>
      <tr>
            <td colspan="2">
              <?php if(isset($error)) echo $error ?>
            </td>
          </tr>
    </tbody>
  </table>
   </form>
   
 </div>
</body>
</html>

  