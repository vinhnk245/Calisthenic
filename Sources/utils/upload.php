<?php
	$target_dir = "../image/post/";
	
	//luu ten file moi o image/post/datehientai.jpg
	$temp = explode(".",  basename($_FILES["fileToUpload"]["name"]));

	$target_file_name = round(microtime(true)) . '.' . end($temp);
	$target_file = $target_dir . $target_file_name;
	
	$uploadOk = 1;

	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "false";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	        echo "image/post/" . $target_file_name;
	    } else {
	        echo "false";
	    }
	}
?>
