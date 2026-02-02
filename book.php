<?php
// echo "\nHello World!";
// $var="\nNagendra Kumar";
// echo $var;
// echo "\nwelcome $var";
// echo 'welcome $var';
// $a="    Rakesh Bhai   ";
// echo strlen($a);
// echo "<br>";
// echo str_word_count($a);
// echo "<br>";
// var_dump("hi");
// echo "<br>";
// echo strpos($a, "Bhai");
// echo "<br>";
// echo strtoupper("sukesh");
// echo "<br>";
// echo str_replace("a", "u", $a);
// echo "<br>";
// echo strrev($a);
// echo "<br>";
// echo trim($a);
// echo "<br>";
$b=10;
function abc(){
	$c=20;
	echo $GLOBALS['b'];
	echo "<br>";
	echo $c;
};
function add(){
	$static i=1;
	echo i++;
}
abc();

?>