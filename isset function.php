<?php 
/* The isset() function is an important function that is commonly used in PHP form handling. This function checks if a variable
been declared and is not NULL

NULL is a special value that, ironically, is used to indicate that a variable has no value.

Suppose, we have two variables $a and $b as shown below:

*/

$a = 5;
$b = NULL;

var_dump(isset($a)); # 5
echo "<br>";
var_dump(isset($b)); # false
echo "<br>";
var_dump(isset($c)); # false
