<?php
	//Save file
	
	$filename = $_POST['filename'];
	$filetype = $_POST['filetype'];
	$content = $_POST['content'];
	
	file_put_contents("./data/{$filename}.{$filetype}", $content);