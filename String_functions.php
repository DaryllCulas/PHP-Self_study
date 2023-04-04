<?php 
date_default_timezone_set('Asia/Manila');

    $str1 = 'Good day!';
    $str2 = 'Hello World';
    $str3 = strtolower($str2);
    $str4 = strtoupper($str2);
    $str5 = ' is ';
    $str6 = '**Hello**World***';
    $str7 = 'ABCDEF';
    $str8Todate = "next monday"; 




    echo "Output: ".strlen($str1)." "."Length of string"; // length of string
    
    echo "<br/>";

    echo "<br/>"."Output: ".$str2." => String"; //Printing out the string

    echo "<br/>"."Output: ".$str3." => String to lowercase"; //String to lowercase

    echo "<br/>"."Output: ".$str4." => String to uppercase"; //String to uppercase

    echo "<br/>"."Output: "."PHP ".trim($str5).' fun<br/>'; //removes whitespace in string from the front and end 

    echo "<br/>"."Output: ".trim($str6,"*"); //remove '*' from front and end 

    echo "<br/>".substr($str7, 2).'<br/>'; //Position in strings starts at 0, not 1 

    echo substr($str7,-3).'<br/>';//Position can also be negative, if it is negative, it is counted from the back of the string. in 'ABCDEF', 'F' is at position -1, 'E' is at position -2 etc
    
    echo substr($str7, 2, 1); //specify the desired length of the substring by passing a third optional argument to substr()
    
    echo "<br/>".strtotime($str8Todate); //it accepts a string describing a specific date and (and time) and tries to convert, it parses the string and returns the 'UNIX timestamp'
    
    echo "<br/>".date('d-M-Y', strtotime(" + 10 hrs")); # 01 - Jan - 1970
    
    echo "<br/>".date_default_timezone_get(); # Asia/Manila


