<?php
	include('../../config/configDb.php');
	include('../../config/core.php');
	include('../../model/post.php');

	if(isset($_POST['cat'])&&isset($_POST['postID'])){
		$cat = $_POST['cat'];
		$postID = $_POST['postID'];

		$stmt = $conn->prepare("SELECT * FROM post WHERE isActive = 1 AND ID != $postID AND 
			CategoryID = ( SELECT ID FROM category WHERE Name = '$cat') ORDER BY RAND() LIMIT 4");
		$stmt ->execute();

		$arrayPost = array();
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$post = new Post();
			$post->id = $row['ID'];
			$post->title = $row['Title'];
			$post->content = $row['Content'];
			$post->shortContent = $row['ShortContent'];
			$post->linkYoutube = $row['LinkYoutube'];
			$post->image = $row['Image'];

			array_push($arrayPost, $post);
        }
		
		echo json_encode($arrayPost);
	}
?>