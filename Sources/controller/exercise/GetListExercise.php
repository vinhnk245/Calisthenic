<?php
	include('../../config/configDb.php');
	include('../../config/core.php');
	include('../../model/exercise.php');

	if(isset($_POST['page']) && isset($_POST['limit'])){
		$page = $_POST['page'];
		$limit = $_POST['limit'];

		//tính offset
		$offset = ($page-1)* $limit;

		//truy vấn với limit, offset
		
		$stmt2 = $conn->prepare("SELECT * FROM exercise WHERE isActive = 1 LIMIT $offset, $limit");

		$stmt2 ->execute();

		$arrayExercise = array();
		while ($row = $stmt2->fetch(PDO::FETCH_ASSOC)) {
			$exercise = new Exercise();
			$exercise->id = $row['ID'];
			$exercise->name = $row['Name'];
			$exercise->linkYoutube = "https://www.youtube.com/embed/".$row['UrlYT'];

			array_push($arrayExercise, $exercise);
        }
		
		echo json_encode($arrayExercise);
	}
?>