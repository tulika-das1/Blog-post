<?php
/*-------String Split Function------- */
$str = "Tulika Das";

$array = str_split($str);

print_r($array);
/*-------String Split Length------- */

$array2 = str_split($str, 3);

print_r($array2);


/*-------String Chunk Function------- */


$newStr = chunk_split($str,1,".");
echo $newStr.'<br><br>';

$newStr = chunk_split($str,3,"-");
echo $newStr.'<br><br>';

$newStr = chunk_split($str,3,"<br>");
echo $newStr.'<br><br>';

$newStr = strtolower($str);

echo $newStr;
echo '<br><br>';

/*-------converts a string to Uppercase------- */

$newStr1 = strtoupper($str);

echo $newStr1;
echo '<br><br>';

/*-------Convert the first character of a string to lowercase: ------- */

$newStr2 = lcfirst($str);

echo $newStr2;
echo '<br><br>';

/*-------Converts the first character of a string to uppercase------- */

$newStr3 = ucfirst($str);

echo $newStr3;
echo '<br><br>';

/*-------Converts the first character of each word in a string to uppercase------- */

$newStr4 = ucwords($str);

echo $newStr4;
echo '<br><br>';


$newStr = strlen($str);

print_r($newStr);

/* -------- II Example -------- */
$str = "Baba";

$newStr = strlen($str);

print_r($newStr);

/* -------- str_word_count -------- */
$newStr = str_word_count($str);

print_r($newStr);

/* -------- str_word_count --II Example-------- */
$str = "Yah oo Baba";

$newStr = str_word_count($str);

print_r($newStr);


/* --------Return Array-------- */
str_word_count($str,0);

str_word_count($str,1);

$array =  str_word_count($str,1);

print_r($array);

/* ---- Returns an array where the key is the position of the word in the string---- */
$array =  str_word_count($str,2);

print_r($array);

/*-------String Count Function------- */
$count = substr_count("Hello world. The world is nice","world");

print_r($count);

$count = substr_count("Hello world. The world is nice","world",10);

print_r($count);

$count = substr_count("Hello world. The world is nice","world",1,20);

print_r($count);

$count = substr_count("Hello world. The world is nice","world",1,5); 

print_r($count);


$str = "Hello world. The world is nice";

$newstr = strstr($str, "world");

echo '<pre>';
print_r($newstr);
echo '</pre>';

$newstr = strstr($str, "world",true); //-- before_search

echo '<pre>';
print_r($newstr);
echo '</pre>';

$newstr = strstr($str, "WORLD"); //-- case-sensitive

echo '<pre>';
print_r($newstr);
echo '</pre>';

/*-------stristr -- case-insensitive------- */
$newstr = stristr($str, "WORLD"). "<br>";

echo '<pre>';
print_r($newstr);
echo '</pre>';

/*-------strchr -- same as strstr------- */
$newstr = strchr($str,"world");

echo '<pre>';
print_r($newstr);
echo '</pre>';

$newstr = strchr($str,"world",true); //true

echo '<pre>';
print_r($newstr);
echo '</pre>';


$newstr = strrchr($str,"world"); //reverse order

echo '<pre>';
print_r($newstr);
echo '</pre>';

/*-------strpbrk - Search for specified characters------- */
$newstr = strpbrk($str, 'wo'). "<br>";

echo '<pre>';
print_r($newstr);
echo '</pre>';



$newstr = substr($str, 5);

echo '<pre>';
print_r($newstr);
echo '</pre>';


$str = "Hello world. The earth is nice";

$newstr = str_replace("world","earth",$str);

print_r($newstr);


$str = "Hello world. The earth is nice";

$newstr = strtr($str,"eo","ia");

print_r($newstr);


$str = "Hello world. The world is nice";
$array = array("Hello" => "Hi", "world" => "earth");

$newstr = strtr($str,$array);

print_r($newstr);

//Date
echo "Today is " . date("Y-M-d");

echo "Today is " . date("d-m-Y h:i:sa");


$val = min(array(2, 4, 8), array(2, 5, 1));

echo "<pre>";
print_r($val);
echo "</pre>";

$val = max(array(2, 4, 8), array(2, 5, 1));

echo "<pre>";
print_r($val);
echo "</pre>";
?>
