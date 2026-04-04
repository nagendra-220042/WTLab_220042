<?php

	$file=$_GET['file'];
	if(file_exists("uploads/$file"))
		header("content-disposition:attachment;filename=".basename($file).";");
		readfile("uploads/$file");

?>