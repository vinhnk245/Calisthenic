<?php
	include('../../config/configDb.php');
	include('../../config/core.php');

	if(isset($_POST['name']) && isset($_POST['linkYT'])){
		$name = $_POST['name'];
		$linkYT = $_POST['linkYT'];
		
		$stmt = $conn->prepare('INSERT INTO exercise VALUES(NULL,"'.$name.'","'.$linkYT.'",1)');
		if($stmt ->execute()){
			echo "success";
		}else{
			echo "fail";
		};
	}
?>