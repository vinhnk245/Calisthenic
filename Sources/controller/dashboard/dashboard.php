<?php
	include('../../config/configDb.php');
	include('../../config/core.php');

		$queryUser = $conn->query("SELECT COUNT(*) FROM user WHERE Type = 2");
		$countUser = $queryUser->fetchColumn(); 

		$queryPost = $conn->query("SELECT COUNT(*) FROM post WHERE isActive = 1");
		$countPost = $queryPost->fetchColumn();

		$queryExercise = $conn->query("SELECT COUNT(*) FROM exercise WHERE isActive = 1");
		$countExercise = $queryExercise->fetchColumn();

		echo $countUser .','. $countPost .','. $countExercise;

?>