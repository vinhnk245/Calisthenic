<?php
	include('../../config/configDb.php');
	include('../../config/core.php');
	include('../../model/post.php');

	if(isset($_POST['cat']) && isset($_POST['keyword'])){
		$cat = $_POST['cat'];
		$keyword = $_POST['keyword'];

		if($cat=="all"){
			$stmt2 = $conn->prepare("SELECT post.*, Name FROM post,category WHERE isActive = 1 AND CategoryID = category.ID AND LOWER(Title) like '%$keyword%' collate utf8mb4_bin ");
		}else{
			$stmt2 = $conn->prepare("SELECT post.*, Name FROM post,category WHERE isActive = 1 AND CategoryID = category.ID AND Name = '$cat' AND LOWER(Title) like '%$keyword%' collate utf8mb4_bin");
		}
		
		$stmt2 ->execute();

		$arrayPost = array();
		while ($row = $stmt2->fetch(PDO::FETCH_ASSOC)) {
			$post = new Post();
			$post->id = $row['ID'];
			$post->title = $row['Title'];
			$post->content = $row['Content'];
			$post->shortContent = $row['ShortContent'];
			$post->linkYoutube = "https://www.youtube.com/embed/".$row['LinkYoutube'];
			$post->image = $row['Image'];
			$post->cat = $row['Name'];

			array_push($arrayPost, $post);
        }
		
		echo json_encode($arrayPost);
	}
?>