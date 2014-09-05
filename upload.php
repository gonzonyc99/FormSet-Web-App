<?php
	$upload_dir = "images/upload/";
	$img = $_POST['form1_data1'];
	$img = str_replace('data:image/png;base64,', '', $img);
	$img = str_replace(' ', '+', $img);
	$data = base64_decode($img);
	$name = uniqid().$_POST['form1_data2'];
	$file = $upload_dir . $name;
	$success = file_put_contents($file, $data);
	echo './images/upload/'.$name;
?> 