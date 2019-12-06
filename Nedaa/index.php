

<?php
echo"Hello World!<br>";
$out = "Welcome ";
$out .= "to PHP ";
$out .= "class in HTU<br>";
echo $out;

$x = "Nedaa";
$y = "Naser";
echo $x." ".$y;

echo'<br>hello $x';
echo "<br>hello $x<br>";

$n="My name is nedaa naser alnadi<br>";
echo strtoupper($n);
echo strtolower($n);
echo ucfirst($n);
echo ucwords("my name is nedaa naser<br>");
echo strlen($n);
echo "<br>";
echo trim($n);
print("nedaa");
echo "<hr>";
//string homework
//1
echo "<br>";
$a ="082307";
echo substr(chunk_split($a,2,':'),0,-1);//or in rtrim($a,":")
echo "<br>";
//2
echo strchr('www.example.com/public_html/index.php', 'index.php');
//((OR))$y=''www.example.com/public_html/index.php', 'index.php'';   echo basename($y)
echo "<br>";
//3
$b = "rayy@example.com";
echo substr($b,0,-12);
//((OR))$b=strstr($,'@',true)
echo "<br>";
//4
$c="rayy@example.com";
echo substr($c,-3);
echo "<br>";
//OR use strstr($c,'c',false)
//5
$new=10;
echo substr(str_shuffle('1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'), 1,$new);
echo "<br>";
//6
$d='football';
$e='footboll';
$f=strspn($d,$e);
echo "your index is "."$f"."your letter is ".$d[$f]." VS ".$e[$f];
//7
//-------------------------------------------
//php 4,5,7
echo "<br>";
define("TAX",0.16);
echo TAX;
//php5,7 here uses because OOP just
const DEPT="HR";
echo "<hr>";
echo DEPT;

echo "<hr>";
$g="Nedaa";
echo gettype($g);

echo "<hr>";
settype($g,"integer");
echo gettype($g);
echo "<hr>";
echo $g;
echo "<hr>";
$h=10;
echo is_numeric($h);
//is_array/is_bool/is_float/is_int/is_null/is_numeric/is_string
echo "<hr>";
//write a php script to print the next character of a specific character
$cha = 'a';
$next_cha = ++$cha; 
//The following if condition prevent you to go beyond 'z' or 'Z' and will reset to 'a' or 'A'.
if (strlen($next_cha) > 1) 
{
 $next_cha = $next_cha[0];
 }
echo $next_cha."\n";

echo "<hr>";

$cha = 'z';
$next_cha = ++$cha; 
//The following if condition prevent you to go beyond 'z' or 'Z' and will reset to 'a' or 'A'.
if (strlen($next_cha) > 1) 
{
 $next_cha = $next_cha[0];
 }
echo $next_cha;
echo "<hr>";
//write a php script to remove a part of a string from the beginning
//or from substr($str,5)
$sub_string = 'rayy@';
$str = 'rayy@example.com';
if (substr($str, 0, strlen($sub_string)) == $sub_string) 
{
 $str = substr($str, strlen($sub_string));
}
echo $str;
echo "<hr>";
//write a php script to insert a string at the specified position in a given string
$original_string = 'The brown fox';
$string_to_insert ='quick';
$insert_pos = 4;
$new_string = substr_replace($original_string, $string_to_insert.' ', $insert_pos, 0);
echo $new_string;
//write a php script to remove all leading zeros from a string
echo "<hr>";
$x = '000547023.24';
$str1 = ltrim($x, '0');
echo $str1;

echo "<hr>";
//write a php script to remove comma(s) from the following numeric string
$str1 = "2,543.12";
$x = str_replace( ',', '', $str1);
echo $x;

echo "<hr>";
$my_name = "Nedaa";
if($my_name == "Nedaa"){
	echo "Your name is Nedaa!<br>";
}
 	echo "Welcome to home page!";

echo "<hr>";
$number_three=3;
if ($number_three==3) {
	echo "the if statement evaluated to true";
}else{
	echo "the if statement evaluated to false";
}
echo "<hr>";
$Mark=90;
if ($Mark>=90 and $Mark<=100) {
	echo "Your mark is A";
}elseif ($Mark>=80 and $Mark<=89) {
	echo "Your mark is B";
}elseif ($Mark>=70 and $Mark<=79) {
	echo "Your mark is C";
}elseif ($Mark>=50 and $Mark<=69) {
	echo "Your mark is D";
}else{
		echo "Your mark is F";
}
echo "<hr>";
$i=1;
while ($i<=5) {
	echo "The number is".$i."<br>";
	$i++;
}
echo "<hr>";
$n=1;
while ($n<=100) {
	echo $n."<br>";
	$n+=2;
}

echo "<hr>";
$e=2;
while ($e<=100) {
	echo $e."<br>";
	$e+=2;
}

echo "<hr>";
$s=5;
while ($s<=100) {
	echo $s."<br>";
	$s+=5;
}

echo "<hr>";
$p=10;
while ($p<=100) {
	echo $p."<br>";
	$p+=10;
}
echo "<hr>";
for ($q=1; $q<=5; $q++)
{
	echo "The number is ".$q."<br>";
}

echo "<hr>";
$days=0;
for($u=477.75; $u>0 ; $u-=0.25){
	$days++;
}
echo $days;
echo "<hr>";
$m=1;
for($o=0; $o<=5; $o++){
	for ($b=1; $b<=$o; $b++) { 
		echo $m." ";
		$m++;
		}
	echo "<br>";
	}
	echo "<hr>";
	//not good
for ($r=1 ; $r<=4 ; $r++) {
	for($t=1 ; $t<=$r ; $t++){
		echo "<div style='width: 50px; height: 50px;  background-color:black; display:inline-block;'></div>";
		echo "<div style='width: 50px; height: 50px; background-color:#fff; display:inline-block;'></div>";
	} 
	echo "<br>";
	for($t=1 ; $t<=$r ; $t++){
		echo "<div style='width: 50px; height: 50px;  background-color:black; display:inline-block;'></div>";
		echo "<div style='width: 50px; height: 50px; background-color:#fff; display:inline-block;'></div>";
	}
	echo "<br>";
}
echo "<hr>";

for ($l=0; $l <8 ; $l++) { 
	for ($x=0; $x <8 ; $x++) { 
		$z =$l+$x;
		if($z%2==0){
		   echo "<div style='width: 70px; height:70px;  background-color:red; display:inline-block;'></div>";

		}elseif($z%2==1){
		   echo "<div style='width: 70px; height: 70px; background-color:yellow; display:inline-block;'></div>";

		}
	}echo "<br>";
}
echo "<hr>";
for ($i=1; $i<=10 ; $i++) { 
	if($i==5 || $i==7 || $i==9){
		Continue;//skip
	}
	echo "The number is ".$i."<br>";
}//if()break;... out of the loop
echo "<hr>";
$sum=0;

for ($i=1; $i <=100; $i++) { 
	$sum+=$i;
	
	if($sum>=100){
		break;
	}
}   echo "Number:".$i."<br>";
	echo "Sum:".$sum."<br>";

echo "<hr>";
$g=0;
for ($i=1; $i <=250 ; $i++) { 
	if($i%13==0){
		$g++;
	}

}echo $g;

echo "<hr>";
$y=0;
for ($i=1; $i <=1048576 ; $i++) { 
	if($i%8==0){
		$y++;
	}
}echo $y;




echo "<hr>";
$time1=time();
echo "start : ".$time1;
echo "<br>";
for ($i=0; $i <=100 ; $i++) { 
	$time2=time();
}
echo "end : ".$time2;
echo "<br>";
$time=$time2-$time1;
echo " In 100 Time is : ".$time." second";
//------------------------------------------
echo "<hr>";

$time1=time();
echo "start : ".$time1;
echo "<br>";
for ($i=0; $i <=1000 ; $i++) { 
	$time2=time();
}
echo "end : ".$time2;
echo "<br>";
$time=$time2-$time1;
echo "In 1000 Time is : ".$time." second";
//--------------------------------------------------------
echo "<hr>";

$time1=time();
echo "start : ".$time1;
echo "<br>";
for ($i=0; $i <=10000 ; $i++) { 
	$time2=time();
}
echo "end : ".$time2;
echo "<br>";
$time=$time2-$time1;
echo "In 10000 Time is : ".$time." second";
//----------------------------------------------------------------
echo "<hr>";

$time1=time();
echo "start : ".$time1;
echo "<br>";
for ($i=0; $i <=100000 ; $i++) { 
	$time2=time();	
}
echo "end : ".$time2;
echo "<br>";
$time=$time2-$time1;
echo "In 100000 Time is : ".$time." second";
//-------------------------------------------------------------------
echo "<hr>";

$time1=time();
echo "start : ".$time1;
echo "<br>";
for ($i=0; $i <=1000000 ; $i++) { 
	$time2=time();
}
echo "end : ".$time2;
echo "<br>";
$time=$time2-$time1;
echo "In 1000000 Time is : ".$time." second";
echo "<hr>";
//-------------------------------------------
$time1=time();
echo "start : ".$time1;
echo "<br>";
for ($i=0; $i <=10000000 ; $i++) { 
	$time2=time();
}
echo "end : ".$time2;
echo "<br>";
$time=$time2-$time1;
echo "In 10000000 Time is : ".$time." second";

echo "<hr>";

//--------------------------------------------
$time1=time();
echo "start : ".$time1;
echo "<br>";
for ($i=0; $i <=100000000 ; $i++) { 
	$time2=time();
}
echo "end : ".$time2;
echo "<br>";
$time=$time2-$time1;
echo "In 100000000 Time is : ".$time." second";

echo "<hr>";
//--------------------------------------------
/*$time1=time();
echo "start : ".$time1;
echo "<br>";
for ($i=0; $i <=1000000000 ; $i++) { 
	$time2=time();
}
echo "end : ".$time2;
echo "<br>";
$time=$time2-$time1;
echo "In 1000000000 Time is : ".$time." second";

echo "<hr>";*/
?>

