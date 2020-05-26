<?php
	include('../../config/configDb.php');
	include('../../config/core.php');
	include('../../model/post.php');

	if(isset($_POST['postID'])){
		$postID = $_POST['postID'];

		$stmt = $conn->prepare("SELECT * FROM post WHERE isActive = 1 AND ID = $postID");
		$stmt ->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		$post = new Post();
		$post->id = $row['ID'];
		$post->title = $row['Title'];
		$post->content = $row['Content'];
		$post->shortContent = $row['ShortContent'];
		$post->linkYoutube = "https://www.youtube.com/embed/".$row['LinkYoutube'];
		$post->image = $row['Image'];
		$post->catId = $row['CategoryID'];
	
		echo json_encode($post);
	}
?>