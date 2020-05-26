<?php
	include('../../config/configDb.php');
	include('../../config/core.php');

	if(isset($_POST['id']) && isset($_POST["level"]) && isset($_POST["day"]) ){

		$id = $_POST['id'];
		$day = $_POST['day'];
		$level = $_POST['level'];
		
		$stmt = $conn->prepare("DELETE FROM training WHERE ExerciseID = $id AND LevelID = $level AND Day = $day");
		
		$stmt ->execute();

		echo "what";
	}
?>