<?php
/*
    There are four comparisons that are very intuitive: < (less than), <= (less or equal), > (greater than), and >= (greater than or equal)
    There is also the special operator <=> (spaceship) that compares both operands and returns an integer instead of boolean.
    When comparing a with b, result will be less than 0 if a is less than b,  0 if a equals b and greater than 0 if a greater than 
    b. Let's see some examples: 

*/

    var_dump(2 < 3); // true
    echo "<br>";
    var_dump(3 < 3); // false
    echo "<br>";
    var_dump(3 <= 3); // true
    echo "<br>";
    var_dump(4 <= 3); // false
    echo "<br>";
    var_dump(2 > 3); // false
    echo "<br>";
    var_dump(3 >= 3); // true
    echo "<br>";
    var_dump(3 > 3); // false
    echo "<br>";
    var_dump(1 <=> 2); // int less than 0 || -1
    echo "<br>";
    var_dump(1 <=> 1); // 0
    echo "<br>";
    var_dump(3 <=> 2); // int greater than 0 || 1

    echo "<br>";
    echo "<br>";
    echo "<br>";
/*
    There are comparisons operators due to evaluate if two expressions are equal or not, but you need to be careful
    with type juggling. The == (equals) operator evaluates two expressions after type juggling, that is will try to
    transform both expressions to the same type, and then compare them. Instead, the == (identical) operator 
    evaluates two expressions without type juggling, so even if they look the same, if they are not of the same type, the 
    comparison will return false. The same applies to != or <> (not equal) and !== (not identical).


*/


    $a = 3;
    $b = '3';
    $c = 5;

    var_dump($a == $b); // true
    echo "<br>";
    var_dump($a == $b); // false
    echo "<br>";
    var_dump($a != $b); // false
    echo "<br>";
    var_dump($a !== $b); // true
    echo "<br>";
    var_dump($a == $c); // false
    echo "<br>";
    var_dump($a <> $c); // true

    
    








?>