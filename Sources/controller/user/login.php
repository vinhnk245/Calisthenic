<?php
	include('../../config/configDb.php');
	include('../../model/user.php');
	include_once("../../config/core.php");

	if(isset($_POST["account"]) && isset($_POST["password"])){
		$account = $_POST["account"];
		$password = $_POST["password"];
		// $hash_pass = password_hash($password, PASSWORD_DEFAULT);

		$stmt = $conn->prepare("SELECT * FROM user WHERE Account = :account");
		$stmt->bindParam(':account', $account);
  //  		$stmt->bindParam(':password', $password);
   		$stmt ->execute();
   		$row = $stmt->fetch(PDO::FETCH_ASSOC);
   		if(isset($row)){
   			if (password_verify($password, $row['Pass'])){

				$user = new User;
				$user->id = $row['ID'];
		        $user->account = $row['Account'];
		        $user->password = $row['Pass'];
		        $user->type = $row['Type'];
		        $user->username = $row['Username'];
		        $user->email = $row['Email'];

		         $_SESSION['current_user'] = serialize($user);
		         $_SESSION['logged_in'] = true;

		         echo ("Xin chao ".$user->username);
   			}else{
   				echo"Fail";
   			}
   		}else{
   			echo "Fail";
   		}
	}

?>