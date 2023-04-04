<?php
declare(strict_types=1); #Type declaration allows us to state the data types of a function’s parameters when we declare it.
function addNumbersStrict(int $num1, int $num2, int $num3) {
    return $num1 + $num2 + $num3;
}
echo addNumbersStrict(6, 76, 8); # it will result to fatal error if we use type declaration or declare() because of wrong data types

echo '<br>';
echo '<br>';
function addTwoNumbers($a, $b): int {
    return  $a + $b;
}
echo '<br>'.addTwoNumbers(15, 89);

echo '<br>';
echo '<br>';
function subtractTwoNumbers( int $x, int $y) {
    return $x - $y;
}

echo '<br>'.subtractTwoNumbers(40, 24);

echo '<br>';
echo '<br>';

function multiplyTwoNumbers($i, $j):float {
    return $i * $j;
}
echo '<br>'.multiplyTwoNumbers(45.15, 6.69);
/*
If you run the code above, you’ll get 4 as the output. Next, change
the last line to

echo '<BR>'.addTwoNums(3.9, 1);

and run the page again. You’ll get the following output:

Fatal error : Uncaught TypeError: Return value of
addTwoNums() must be of the type int, float
returned...

This is because 3.9 + 1 gives us 4.9, which is not of int type.
*/