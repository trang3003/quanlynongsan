<table align="center" border="true">
    <tr>
        <th>Mã KH</th>
        <th>Tên khách hàng</th>
        <th>Giới tính</th>
        <th>Địa chỉ</th>
        <th>Số điện thoại</th>
        <th>Email</th>
    </tr>
    <?php
        require ("./config.php");
        $query = "select * from khach_hang";
        $result = $conn->query($query);
        if(!$result) echo "Query failed: ".$conn->error;

        $count = 0;
        while ($row = $result->fetch_array()) {
            if ($count % 2 == 0) 
                echo "<tr bgcolor='pink'>";
            else 
                echo "<tr>";
            for ($i=0; $i<$result->field_count; $i++) {
                if ($i==2) {
                    if ($row[$i] == 0) {
                        echo "<td align='center'><img src='./img/boy.png' width='50px'></td>";
                    } else {
                        echo "<td align='center'><img src='./img/girl.png' width='50px'></td>";
                    }
                } else  echo "<td>".$row[$i]."</td>";   
            }
            echo "</tr>";
            $count++;
        }
    ?>
</table>
</body>
</html>