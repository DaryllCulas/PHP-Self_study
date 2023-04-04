<?php 

/*
    This new function takes two mandatory arguments and optional one. The default value of the optional argument is false,
    and it is then used normally inside the function. The function will print the result of the sum if the user provides true
    as the third arguments, which happens only the third time that the function is invoked.

*/
  function addNumbers($a , $b, $printResult = false) {
    $sum = $a + $b;
    if($printResult) {
        echo "The Result is ". $sum;
    }
    return $sum;
  }
  $sum1 = addNumbers(1,2);
  $sum1 = addNumbers(3, 4, false);
  $sum = addNumbers(5, 6, true); # It will print the result || The Result is 11

  echo "<br>";
  echo "<br>";


  /*
    The arguments that the function receives are just copies of the values that the user provided. That means that if you modify these
    arguments inside the function, it will not affect the original values. This feature is known as sending arguments by value.
  
  */
  function modify($a) {
    $a =3;
  }
  $a = 2;
  modify($a);
  var_dump($a); # prints 2

  echo "<br>";
  echo "<br>";

/*
  If what you want is to actually change the value of the original variable used in the invocation, you need to pass the arguments 
  by reference. To do that, you add an ampersand (&) before the argument when declaring the function 

*/
function modify1(&$a) {
    $a = 3;
}
modify1($a);
var_dump($a); 

# Now, on invoking the function $modify, $a will be always 3.





?>