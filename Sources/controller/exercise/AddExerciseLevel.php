<?php
	include('../../config/configDb.php');
	include('../../config/core.php');

	if(isset($_POST['day']) && isset($_POST['exerciseId'])&& isset($_POST['set'])&& isset($_POST['rep'])&& isset($_POST['breakTime'])&& isset($_POST['level'])){
		$level = $_POST['level'];
		$day = $_POST['day'];
		$exerciseID = $_POST['exerciseId'];
		$set = $_POST['set'];
		$rep = $_POST['rep'];
		$breakTime = $_POST['breakTime'] . "s";
		
		$stmt = $conn->prepare("INSERT INTO `training` (`LevelID`, `Day`, `ExerciseID`, `Set`, `Rep`, `BreakTime`) VALUES ('$level', '$day', '$exerciseID', '$set', '$rep', '$breakTime');");
		if($stmt ->execute()){
			echo "success";
		}else{
			echo "fail";
		};
	}
?>