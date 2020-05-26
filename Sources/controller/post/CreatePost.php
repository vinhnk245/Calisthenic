<?php
	include('../../config/configDb.php');
	include('../../config/core.php');

	if(isset($_POST['title']) && isset($_POST['linkYT']) && isset($_POST['shortContent']) && isset($_POST['content']) && isset($_POST['image']) && isset($_POST['cat'])){
		$cat = $_POST['cat'];
		$title = $_POST['title'];
		$linkYT = $_POST['linkYT'];
		$shortContent = $_POST['shortContent'];
		$content = $_POST['content'];
		$image = $_POST['image'];

		$stmt2 = $conn->query("SELECT ID FROM category WHERE Name = '$cat'");
		$catId = $stmt2->fetchColumn(0);
		
		$stmt = $conn->prepare('INSERT INTO post VALUES(NULL,"'.$title.'","'.$content.'","'.$shortContent.'", "'.$linkYT.'", "'.$image.'",'.$catId.',1)');
		if($stmt ->execute()){
			echo "success" . $catId;
		}else{
			echo "fail";
		};
	}
?>