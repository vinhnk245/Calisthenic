<?php
	include('../../config/configDb.php');
	include('../../config/core.php');
	include('../../model/post.php');

	if(isset($_POST['postID'])){

		$postID = $_POST['postID'];
		
		$stmt2 = $conn->prepare("UPDATE post SET isActive = 0 WHERE ID = $postID");
		
		$stmt2 ->execute();

		echo "delete success";
	}
?>