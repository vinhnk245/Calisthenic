<?php
    include('../../config/configDb.php');
    include('../../config/core.php');

    if(isset($_POST['cat']) && isset($_POST['limit'])){
        $cat = $_POST['cat'];
        $limit = $_POST['limit'];
        if($cat=="all"){
            $stmt = $conn->prepare("SELECT COUNT(*) FROM post WHERE  isActive = 1");
        }else{
             $stmt = $conn->prepare("SELECT COUNT(*) FROM post WHERE isActive = 1 AND CategoryID = ( SELECT ID FROM category WHERE Name = '$cat')");
        }
        //lấy tổng số trang
        $stmt ->execute();
        $number_of_rows = $stmt->fetchColumn(); 
        $number_of_pages = ceil($number_of_rows / $limit); 

        echo $number_of_pages;
    }
?>