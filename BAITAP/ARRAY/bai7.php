<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div class="main">
    <?php
      $arr_can = ['Quý', 'Giáp', 'Ất', 'Bính', 'Đinh', 'Mậu', 'Kỷ', 'Canh', 'Tân', 'Nhâm'];
      $arr_chi = ['Hơi', 'Tý', 'Sửu', 'Dần', 'Mão', 'Thìn', 'Tỵ', 'Ngọ', 'Mùi', 'Thân', 'Dậu', 'Tuất'];
      $nam = $_POST['nam'] ?? null;
      $amLich = null;
      $img = null;
      if (is_numeric($nam)) {
        $t_nam = $nam - 3;
        $can = $arr_can[$t_nam % 10];
        $chi = $arr_chi[$t_nam % 12];
        $amLich = "$can $chi";
      }
    ?>
    <form action="" method="post">
      <table class="borderless" align="center">
        <tr>
          <th colspan="3">Tính năm âm lịch</th>
        </tr>
        <tr>
          <td>Năm dương lịch</td>
          <td></td>
          <td>Năm âm lịch</td>
        </tr>
        <tr>
          <td>
            <input type="text" name="nam" value="<?php echo $nam ?>">
          </td>
          <td>
            <input type="submit" value="=>"/>
          </td>
          <td>
            <input type="text" disabled="disabled" value="<?php echo $amLich ?>"/>
          </td>
        </tr>
      </table>
    </form>
  </div>
</body>
</html>
  