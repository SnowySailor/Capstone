<?php
	$myfile = fopen("/Library/WebServer/Documents/write.txt", "w") or die("Unable to open file!");
	echo fwrite($myfile,"The quick brown fox jumps over the lazy dog.");
	fclose($myfile);
?>