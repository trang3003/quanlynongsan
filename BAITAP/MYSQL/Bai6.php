<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sql Bài 6</title>
</head>
<body>   
<style>
.image {
    text-align: center;
}
img {
    width: 100%;
    max-width: 100px;
}
.ten-sua {
    font-weight:bold;
    margin-bottom: -10px;
}
.box {
    display: inline-block;
    width: 200px;
    height: 200px;
}
.box-wrap {
    display: inline-block;
    text-align: center;
}
table { 
    width: 95%;
}
</style>
<table align="center" border="1">
    <tr class="title">
        <th colspan ="2" >THÔNG TIN CÁC SẢN PHẨM</th>
    </tr>
    <?php
        require ("./config.php");
        $query = "SELECT * FROM sua,loai_sua,hang_sua WHERE sua.Ma_loai_sua=loai_sua.Ma_loai_sua AND sua.Ma_hang_sua=hang_sua.Ma_hang_sua LIMIT 10";
        $result = $conn->query($query);
        if(!$result) echo "Query failed: ".$conn->error;

        while ($row = $result->fetch_array()) {
            echo "<tr class='box-wrap'>";
                echo "<td class='box'>
                        <p class='ten-sua'>{$row['Ten_sua']}</p>
                        <p>{$row['Trong_luong']} gr - {$row['Don_gia']} VNĐ</p>
                        <img src='./img/sua/{$row['Hinh']}' class='image'>
                </td>";
            echo "</tr>";
        }
    ?>
</table>
</body>
</html>