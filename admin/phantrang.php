<?php
    require("../config.php");
    $limit = 12; 
    $result_db = mysqli_query($conn,"SELECT COUNT(sanpham_id) FROM sanpham"); 
    $row_db = mysqli_fetch_row($result_db);  
    $total_records = $row_db[0];  
    $total_pages = ceil($total_records / $limit); 
    $pagLink = "<ul class='pagination'>";  
    for ($i=1; $i<=$total_pages; $i++) {
                  $pagLink .= "<li class='page-item'><a class='page-link' href='admin_sp.php?page=".$i."'>".$i."</a></li>";   
    }
    echo $pagLink . "</ul>";  
?>