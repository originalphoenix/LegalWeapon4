<?php 
	$file = time();
	$data = $_POST['home-form-text']; 

	file_put_contents('temp_text_files/'.$file, $data);

	echo $file;