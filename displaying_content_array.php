<?php
//Displaying the content of array, use var_dump()
$myArray = array(2, 5.1, 'PHP', '105');
echo "The content of myArray is ";
var_dump($myArray); # array(4) { [0]=> int(2) [1]=> float(5.1) [2]=> string(3) "PHP" [3]=> string(3) "105" }
echo "<br/>";
print_r($myArray); # This function is similar to the var_dump(). 
#It gives more concise as it does not give us the data type of each element