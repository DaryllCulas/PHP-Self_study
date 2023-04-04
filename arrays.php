<?php

# Common array
$firstArr = array();
$secondArr = array(11, 16, 4, 9, 12);
echo "The index of second variable is ".$secondArr[3]; // The index of 4th elements of second variable is 9
$secondArr[3] =20;
echo "<br/>"."The index of updated second variable is ".$secondArr[3]; // The index of updated 4th elements of second variable is 20
# $secondArr becomes $secondArr = array(11, 16, 4, 20, 12);

# in addition to storing numbers, arrays can be used to store other data types like string
$fruitsArr = array('Apple', 'Banana', 'Coconut');
echo "<br/>"."The index of 2nd elements of array is ".$fruitsArr[1];

# We can create associative arrays. An associative array is one where each value in the array is associated with a key
$assocArr = array(
    'Peter' => 11,
    'Jane' => 16,
    'Paul' => 12
);
echo "<br/>"."The index of 3rd element of array is ".$assocArr['Paul']; //The index of 3rd element of array is 12

# arrays can be used to store arrays. This is known as a multidimensional array

$simpleMDArr = array(
    array(1, 2, 3, 4, 5),
    array(0, 5, 1, 3, 4),
    array(4, 1, 7, 8, 9)
);
echo "<br/>"."The index of 2nd row and 3rd column elements is ".$simpleMDArr[2][3]; // The index of 2nd row and 3rd column elements is 8

# Associative arrays can be used to store arrays.
$assocMDArr = array(
    "First Array" => array(1, 2, 3, 6, 1, 3), 
    "Second Array" => array(3, 5, 1, 8, 9),
    "Third Array" => array(1, 0, 9, 4, 7)
);
echo "<br/>"."The index of elements of first array key is ".$assocMDArr["First Array"][2]; //The index of elements of first array key is 3

# We can use an associative array to store associative arrays.

$anotherAssocMDArr = array(
    "First Player" => array("name"=>"John", "Age" => 25),
    "Second Player" => array("name" => "Tim", "Age" => 35),
    "Third Player" => array("name"=> "Juan", "Age" => 56)
);
echo "<br/>"."The index of elements of anotherAssocMDArr is ".$anotherAssocMDArr["Second Player"]["Age"]; //The index of elements of anotherAssocMDArr is 35
echo "<br/>";


