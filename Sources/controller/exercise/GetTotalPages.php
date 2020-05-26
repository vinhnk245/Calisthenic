<?php
    include('../../config/configDb.php');
    include('../../config/core.php');

    if(isset($_POST['limit'])){

        $limit = $_POST['limit'];
        
        $stmt = $conn->prepare("SELECT COUNT(*) FROM exercise WHERE isActive = 1");
        
        //lấy tổng số trang
        $stmt ->execute();
        $number_of_rows = $stmt->fetchColumn(); 
        $number_of_pages = ceil($number_of_rows / $limit); 

        echo $number_of_pages;
    }
?>