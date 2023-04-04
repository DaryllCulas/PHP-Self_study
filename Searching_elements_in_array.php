<?php
/*
    in_array = This function takes two values, the value that you want to search for and the array. The function returns true if the
    value is in the array and false otherwise. This is very useful, because a lot of times what you want to know from a list or map 
    is if contains an element, rather than knowing that it does or its location.

    Even more useful sometimes is array_search. This function works in the same way except that instead of returning a boolean,
    it return the key where the value is found, or false
    otherwise. Let's see both functions: 
*/
    $names = ['Harry', 'Ron', 'Hermione'];
    $containsHermione = in_array('Hermione', $names);
    var_dump($containsHermione); //bool(true)
    echo "<br>";

    $containsSnape = in_array('Snape', $names);
    var_dump($containsSnape); //bool(false)
    echo "<br>";

    $whereRon = array_search('Ron', $names);
    var_dump($whereRon); // int (1)
    echo "<br>";

    $whereVoldemort = array_search('Voldemort', $names);
    var_dump($whereVoldemort); //bool(false)





?>