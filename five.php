<?php
/*
 *  var_dump();
 *
 *  print_r();
 *
 *
 *  echo
 *
* die (); exit (); output and exit the program
*
* printf formatted output
*
* sprintf formatting returns
 */
	$int = 100.678;

//	printf("%daaaaaaaa{$int}aaaaaaaaaaaaaaaa", $int);

	$str= sprintf("%s,%1.2f,%u, %e, %b,%%,%d, %c",$int,$int,$int, $int, $int, $int, $int);

	echo $str."<br>";
	echo $str."<br>";
	echo $str."<br>";
	echo $str."<br>";
	echo $str."<br>";

	//echo chr($int);

