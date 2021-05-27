<?php
if (isset($_POST['submit'])){
	$file = $_FILES['files'];
	
	$fileName = $_FILES['files']['name'];
	$fileTmpName = $_FILES['files']['tmp_name'];
	$fileSize = $_FILES['files']['size'];
	$fileError = $_FILES['files']['error'];
	$fileType  = $_FILES['files']['type'];
	
	$fileExt = explode ('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));
	
	$allowed =array('jpg','jpeg','png','pdf');
	
		if (in_array($fileActualExt, $allowed)){
			if ($fileError === 0){
				if($fileSize < 1000000){
				$fileNameNew = uniqid('', true).".".$fileActualExt;
				$fileDestination = 'uploads/'.FileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				header("location: register.php?uploadsuccess");
					
		}else {
			echo "There was an error uploading your file!";	
		}			
		}else {
			echo "There was an error uploading your file!";	 	
		}			
		}else {
			echo "You cannot upload files of this type";
			 
			
		}
}






?>