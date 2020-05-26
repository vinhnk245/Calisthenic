<?php
	include('../../config/configDb.php');
	include('../../config/core.php');
	include('../../model/exercise.php');

	if(isset($_POST['id'])){
		$id = $_POST['id'];

		$stmt2 = $conn->prepare("SELECT * FROM exercise WHERE ID = $id");
		$stmt2 ->execute();

		$row = $stmt2->fetch(PDO::FETCH_ASSOC);
		$exercise = new Exercise();
		$exercise->id = $row['ID'];
		$exercise->name = $row['Name'];
		$exercise->linkYoutube = "https://www.youtube.com/embed/".$row['UrlYT'];
		
		echo json_encode($exercise);
	}
?>