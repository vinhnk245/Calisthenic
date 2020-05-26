<?php
	include('../../config/configDb.php');

	if(isset($_POST['userID']) && isset($_POST['level'])){
			$userID = $_POST['userID'];
			$levelID = $_POST['level'];

			$stmtGetDayTrained = $conn->query("SELECT DayTrained FROM progress_training WHERE UserID=$userID AND LevelID=$levelID");
			$row = $stmtGetDayTrained->fetchColumn();

			echo $row;
	}		
?>