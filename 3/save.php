<?php
	//save file

	$filename = trim($_POST['filename']);
	$filetype = $_POST['filetype'];
	$content = $_POST['content'];

	// Replace all the space、new line... to a "_"
	$filename = preg_replace('/\s+/','_',$filename);

	file_put_contents($_SERVER['DOCUMENT_ROOT'] . "/downloadSite/3/data/{$filename}.{$filetype}", $content);
