<?php
	include('../../config/configDb.php');

	if(isset($_POST['level']) && isset($_POST['dayTrained']) && isset($_POST['userID'])){
			$userID = $_POST['userID'];
			$levelID = $_POST['level'];
			$dayTrained = $_POST['dayTrained'];

			$stmtGetDayTrained = $conn->query("SELECT DayTrained FROM progress_training WHERE UserID=$userID AND LevelID=$levelID");
			$row = $stmtGetDayTrained->fetchColumn();

			//kiem tra da hoan thanh ngay tap chua
			$isTrained = false;
			$allDayTrained = explode(",",$row);

			foreach($allDayTrained as $day){
				if($day == $dayTrained) $isTrained = true;
			}

			if(!$isTrained){
				$row = $row . "," . $dayTrained;
				$stmt = $conn->prepare("UPDATE progress_training SET DayTrained = '$row' WHERE UserID = $userID AND LevelID = $levelID");
				$stmt->execute();
			}

			echo "success";
	}		
?>
			

