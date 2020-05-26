<?php
	include('../../config/configDb.php');
	include('../../model/user.php');
	include_once("../../config/core.php");


	if(isset($_POST["nameChange"]))
	{
		$user = unserialize($_SESSION['current_user']);
		$id_user = $user->id;

		$username = $_POST["nameChange"];

		$stmt = $conn->prepare(" UPDATE user SET Username = :username WHERE ID = $id_user ");
		$stmt->bindParam(':username',$username);
   		$stmt->execute();

   		$query = $conn->prepare(" SELECT * FROM user WHERE ID = $id_user ");
   		$query->execute();
   		$row = $query->fetch(PDO::FETCH_ASSOC);
   		if(isset($row)){

			$user = new User;
			$user->id = $row['ID'];
	        $user->account = $row['Account'];
	        $user->password = $row['Pass'];
	        $user->type = $row['Type'];
	        $user->username = $row['Username'];
	        $user->email = $row['Email'];

	        $_SESSION['current_user'] = serialize($user);

	        echo 'reset success';

   		}else{
   			echo "fail";
   		}

	}



	if(isset($_POST["oldPass"]))
	{
		$user = unserialize($_SESSION['current_user']);
		$id_user = $user->id;

		$oldPass = $_POST["oldPass"];

		$stmt = $conn->prepare("SELECT * FROM user WHERE ID = :id");
		$stmt->bindParam(':id', $id_user);
   		$stmt->execute();
   		$row = $stmt->fetch(PDO::FETCH_ASSOC);
   		if(isset($row)){
   			if (password_verify($oldPass, $row['Pass'])){

		         echo ('enter new pass');

   			}else{
   				echo"fail";
   			}
   		}else{
   			echo "fail";
   		}
	}


	if(isset($_POST["newPass"]))
	{
		$user = unserialize($_SESSION['current_user']);
		$id_user = $user->id;

		$newPass = $_POST["newPass"];

		$queryPass = $conn->prepare("SELECT * FROM user WHERE ID = :id");
		$queryPass->bindParam(':id', $id_user);
   		$queryPass->execute();
   		$row = $queryPass->fetch(PDO::FETCH_ASSOC);

   		if(isset($row)){
   			if (password_verify($newPass, $row['Pass'])){

		         echo ('1');

   			}else{
   				
   				$hash_pass = password_hash($newPass, PASSWORD_DEFAULT);

				$stmt = $conn->prepare(" UPDATE user SET Pass = :pass WHERE ID = $id_user ");
				$stmt->bindParam(':pass', $hash_pass);
		   		$stmt ->execute();

		   		echo ('reset pass success');
   			}
   		}else{
   			echo "fail";
   		}

	}


?>