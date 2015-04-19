<?php
	$myfile = fopen("/Users/Nickolas/Documents/onehundred.txt", "r") or die("Unable to open file!");
	$file = fread($myfile,filesize("/Users/Nickolas/Documents/onehundred.txt"));
	$pos = strpos($file, "(");
	if(!$pos)
	    echo "Not elem\n";
	else
	    echo "Elem\n";
	$array = range(10000, 0);
	$sorted = sort($array);
	echo ($sorted[0] + "\n");
	echo "\nDone";
	fclose($myfile);

	$myfile1 = fopen("/Users/Nickolas/Documents/onehundred.txt", "r") or die("Unable to open file!");
	$file1 = fread($myfile1,filesize("/Users/Nickolas/Documents/onehundred.txt"));
	fclose($myfile1);

	$myfile2 = fopen("/Users/Nickolas/Documents/onehundred.txt", "r") or die("Unable to open file!");
	$file2 = fread($myfile2,filesize("/Users/Nickolas/Documents/onehundred.txt"));
	fclose($myfile2);

	$myfile3 = fopen("/Users/Nickolas/Documents/onehundred.txt", "r") or die("Unable to open file!");
	$file3 = fread($myfile3,filesize("/Users/Nickolas/Documents/onehundred.txt"));
	fclose($myfile3);

	$myfile4 = fopen("/Users/Nickolas/Documents/onehundred.txt", "r") or die("Unable to open file!");
	$file4 = fread($myfile4,filesize("/Users/Nickolas/Documents/onehundred.txt"));
	fclose($myfile4);
?>