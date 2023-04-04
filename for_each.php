<?php
/*

Next, we have the foreach loop. This loop is similar to the for loop
but is used to loop over arrays. There are two syntaxes:

foreach ($array as $value) {
    //code to be executed;
}

foreach ($array as $key=>$value) {
    //code to be executed;
}

*/

$arr1 = array(11, 12, 13, 14, 15, 16);
foreach($arr1 as $num1) {
    echo 'the number is '.$num1.'<br>';

    # $arr1 as the name of array
    # $num1 as the name of variable of array

    # e.g. first element of $arr1: '11' assigns to $num [per element]
    # e.g. second element of $arr1: '12' assigns to $num [per element]
    # e.g. third element of $arr1: '13' assigns to $num [per element]
}
echo "<br>";
$arr2 = array('Aaron'=> 12, 'Ben' => 23, 'Carol' => 35);
foreach($arr2 as $name => $age) {
    echo $name.' is '.$age.' years old '.'<br>';
}
    # $arr2 as the name of array
    # $name as the key of array
    # $age as the value of array

    # e.g. first element of $arr2: 'Aaron' assigns to $name(key) has $age(value) [per element] 
    # e.g. first element of $arr2: 'Ben' assigns to $name(key) has $age(value) [per element]
    # e.g. first element of $arr2: 'carol' assigns to $name(key) has $age(value) [per element]