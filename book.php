<?php
/*echo "\nHello World!";
$var="\nNagendra Kumar";
echo $var;
echo "\nwelcome $var";
echo 'welcome $var';
$a="    Rakesh Bhai   ";
echo strlen($a);
echo "<br>";
echo str_word_count($a);
echo "<br>";
var_dump("hi");
echo "<br>";
echo strpos($a, "Bhai");
echo "<br>";
echo strtoupper("sukesh");
echo "<br>";
echo str_replace("a", "u", $a);
echo "<br>";
echo strrev($a);
echo "<br>";
echo trim($a);
echo "<br>";
$s1="Nagendra ";
$s2="kumar";
$s3=$s1.$s2;
echo $s3;*/


/*$b=10;
function abc(){
	$c=20;
	global $b;
	echo $b;
	echo "<br>";
	echo $c;
};*/

/*function add(){
	static $num1=2;
	$num2=3;
	$num1++;
	$num2++;
	echo "static num is $num1 <br>";
	echo "normal num is $num2 <br>";
}*/


//  abc();
// add();
// add();


/*echo "<h1>Hello World</h1>";
print "<h2>hello world</h2>";

$c=print"<h1>cse3 welcomes you</h1>";
echo $c;//returns 1*/



/*$name="G Nagendra Kumar";
$num=24;
$floatnum=2.0;
$bool=true;
echo "type of the data of name is: ".gettype($name)."<br>";
echo "type of the data of num is: ".gettype($num)."<br>";
echo "type of the data of floatnum is: ".gettype($floatnum)."<br>";
echo "type of the data of bool is: ".gettype($bool)."<br>";

const B="Nagendra";
echo B;

$arr=array(1,2,2.4,"GNK");
echo "<br>",$arr[3];

$b=array("hi"=>1,"hello"=>2);
echo "<br>".$b["hello"];*/



// define("warning", "you are learning php");
// echo "<br>",warning;


/*class A{
	function display(){
	echo "classes and objects ";}
}
$obj = new A();
echo "<br>";
$obj->display();
echo "<br>";*/


$name=$_POST["n"];
$num=$_POST["p"];
$add=$_POST["a"];
echo "The Name you have entered is:",$name;
echo "<br> Your phno is:",$num;
echo "<br> The address you have entered is:",$add;





?>