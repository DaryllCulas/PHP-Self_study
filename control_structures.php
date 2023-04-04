<?php
/*******Comparison Operators ********************/
/*

-Equal(==)- Returns true if the values on both sides are equal 
e.g. 5 == 5, 'Hello' == 'Hello', and 5 == 5.0 all return true

-Identical(===) - returns true if the values on both sides are equal and of the same date type
e.g. 5 === 5 returns true while 5 === 5.0 return false

-Not equal(!= or <>) - returns true if the values on both sides are not equal
e.g. 5 != 7 and 5 <> 7  both return true

-Not identical (!==) - Returns true if the values both sides are not equal or not of the same data type
e.g. 5 !== 5.0 returns true as 5 and 5.0 are of different data types

-Greater than(>) - Returns true if the value on the left is greater than the value on the right
-e.g. 7 > 2 returns true

-Greater than or equal to(>=) - Returns true if the value on the left is greater than or equal to the value on the right
e.g. 9 < 12 returns true 

-Less than or equal to(<=)
e.g. 10 <= 14 and 13 <= 13 both return true

*******************************************************************************************************
-Spaceship(<=>) - Returns 0 if the values on both sides are equal (not necessarily identical)
Returns 1 if the value on the left is greater
Returns -1 if the value on the left is smaller
*******************************************************************************************************
e.g. 5 <=> 7 returns -1 while 5 <=> 5.0 returns 0
 */

 /*******Logical Operators*********************************/
 /*
 -NOT(!)-operator returns true when it precedes an expression that is false
 e.g. !(5 > 10) returns true as 5 > 10 is false

 -AND(&&)-allows us to combine two comparisons and returns true when both comparison return true.
 e.g. */
 
      $a = 5 > 3 and 4 < 10; //returns true
      $b = 5 > 3 && 4 < 10; //returns true
      $c = 5 > 1 && 13 < 5; //returns false
 var_dump($a);
 echo "<br>";
 var_dump($b);
 echo "<br>";
 var_dump($c);
 echo "<br>";
     $d = 3 > 2 && 3 < 1; // true && false returns false -> higher precedence
     $e = 3 > 2 AND 3 < 1; // true AND false returns true -> lower precedence
var_dump($d);
echo "<br>";
var_dump($e);
echo "<br>";
/* OR(||)- returns true when at least one comparison returns true. */
$f = 4 < 7 || 10 > 3; // true || true returns true -> higher precedence
$g = 3 < 2 || 3 > 1; // false || true returns true -> higher precedence
$h = 10 > 15 || 12 < 1; // false || false returns false -> higher precedence 

    var_dump($f);
echo "<br>";
    var_dump($g);
echo "<br>";
    var_dump($h);










 
 
 
 
