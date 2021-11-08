<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sql Bài 5</title>
</head>
<body>   
<style>
</style>
<table align="center" border="1">
    <tr class="title">
        <th colspan ="2" >THÔNG TIN CÁC SẢN PHẨM</td>
    </tr>
    <?php
         require ("./config.php");
        $query = "SELECT * FROM sua,loai_sua,hang_sua WHERE sua.Ma_loai_sua=loai_sua.Ma_loai_sua AND sua.Ma_hang_sua=hang_sua.Ma_hang_sua LIMIT 10";
        $result = $conn->query($query);
        if($result){
            while ($row = $result->fetch_array()) {
                echo "<tr>";
                    echo "<td><img src='./img/sua/{$row['Hinh']}' width='100px' height='100px'></td>";
                    echo "<td>
                            <h5>{$row['Ten_sua']}</h5>
                            <div> {$row['Ten_hang_sua']}</div>
                            <div> {$row['Ten_loai']} - {$row['Trong_luong']} gr - {$row['Don_gia']} VNĐ</div>
                           
                    </td>";
                echo "</tr>";
            }
        }
    ?>
</table>
</body>
</html>