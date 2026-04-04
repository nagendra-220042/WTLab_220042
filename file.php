
<?php

	echo "File uploaded successfully";
	$fp=$_FILES['f'];
	echo "<br>";
	// print_r($fp)
	$d="uploads";
	if(is_dir($d)){
		echo "Directory exists";
	}
	else{
		if(mkdir($d)){
		echo "directory created succesfully";
	}
	}
	echo "<br>";
	$flocation=$_FILES['f']['tmp_name'];
	$name=$_FILES['f']['name'];
	$dlocation="uploads/" .$name;
	if(move_uploaded_file($flocation, $dlocation))
		echo "file uploaded succesfully into directory";
	
	else
		echo "Cannot upload the file";
	echo "<br>";
	// echo $name;
	
	$files=scandir("uploads");
		foreach($files as $file){
			if(is_file("uploads/".$file)){
				echo $file;
				echo "<a href='Download.php?file=$file'>Download</a>";
				echo "<br>";
			}

	}
	
?>
<!DOCTYPE html>

