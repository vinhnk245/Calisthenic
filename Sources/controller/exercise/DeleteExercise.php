<?php
	include('../../config/configDb.php');
	include('../../config/core.php');

	include('../../model/post.php');

	if(isset($_POST['id'])){

		$id = $_POST['id'];
		
		$stmt = $conn->prepare("UPDATE exercise SET isActive = 0 WHERE ID = $id");
		
		$stmt ->execute();
	}
?>