<?php
	$myfile = fopen("/Library/WebServer/Documents/write.txt", "r") or die("Unable to open file!");
	echo fread($myfile,filesize("/Library/WebServer/Documents/write.txt"));
	fclose($myfile);
?>