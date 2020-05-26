<?php
	include('../../config/configDb.php');
	include('../../config/core.php');

	if(isset($_POST['title']) && isset($_POST['linkYT']) && isset($_POST['shortContent']) && isset($_POST['content']) && isset($_POST['cat']) && isset($_POST['id'])){
		$cat = $_POST['cat'];
		$title = $_POST['title'];
		$linkYT = $_POST['linkYT'];
		$shortContent = $_POST['shortContent'];
		$content = $_POST['content'];

		
		$id = $_POST['id'];

		$stmt2 = $conn->query("SELECT ID FROM category WHERE Name = '$cat'");
		$catId = $stmt2->fetchColumn(0);
		

		if(isset($_POST['image'])){
			$image = $_POST['image'];
			$stmt = $conn->prepare("UPDATE post SET Title='$title', Content='$content', ShortContent='$shortContent',LinkYoutube='$linkYT',Image='$image',CategoryID=$catId WHERE ID = $id");
		}else{
			$stmt = $conn->prepare("UPDATE post SET Title='$title', Content='$content', ShortContent='$shortContent',LinkYoutube='$linkYT',CategoryID=$catId WHERE ID = $id");
		}
		
		if($stmt ->execute()){
			echo "success";
		}else{
			echo "fail";
		};
	}
?>