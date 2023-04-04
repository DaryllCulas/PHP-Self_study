<?php
/*
    There are useful functions for enquiring about the content of an array. If you want to know if an array contains any 
    element. If you want to know if an array contains any element at all, you can ask if it is empty with the empty 
    function. That function actually works with strings too, an empty strings being a string with no characters(''). The isset
    function takes an array position, and returns true or false depending on whether that position exists or not:


*/
$string = '';
$array =[];
$names = ['Harry', 'Ron', 'Hermione'];

var_dump(empty($string)); // true
echo "<br>";
var_dump(empty($array)); // true
echo "<br>";
var_dump(empty($names)); // false
echo "<br>";
var_dump(isset($names[2])); // true
echo "<br>";
var_dump(isset($names[3])); // false




?>