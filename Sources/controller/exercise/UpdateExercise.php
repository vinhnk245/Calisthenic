<?php
	include('../../config/configDb.php');
	include('../../config/core.php');

	if(isset($_POST['name']) && isset($_POST['linkYT']) && isset($_POST['id'])){
		$name = $_POST['name'];
		$linkYT = $_POST['linkYT'];
		$id = $_POST['id'];
		
		$stmt = $conn->prepare("UPDATE exercise SET Name='$name',UrlYT='$linkYT' WHERE ID = $id");
		if($stmt ->execute()){
			echo "success";
		}else{
			echo "fail";
		};
	}
?>