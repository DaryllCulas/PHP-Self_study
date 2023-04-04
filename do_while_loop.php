<?php
/*
The syntax of a do-while loop is

do {
    //some tasks
} while (condition is true);

*/

$e = 100; #initialization of $d assigns 100
do { # this block will execute first
    echo 'The value of e: '. $e; # display here 
    $e++; # increment the value of $d by 1; $d = 101
}while($e < 0); # 101 < 0; this block will not execute since the condition is not meet and it returns false.

/*
As the value of $e is not smaller than 0 , the test fails. The program
exits the do-while loop and does not repeat the tasks in the loop.
*/
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
$f = 100; #initialize the $d =100
do {
    echo 'The value of f: '.$f; # display here
    $f++; #increment by 1; $d = 101
}while($f > 0); # 100 > 0; this condition is true so it will iterate and result to display infinite outputs

