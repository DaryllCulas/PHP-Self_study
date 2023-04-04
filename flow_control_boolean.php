<?php
/*
In PHP, most values can be converted to true or false (i.e., converted to the bool data type).
Values that convert to false include:

- numbers that represent zero (such as 0 and 0.0 )
- the empty string (such as '' , which is made up of two single
quotes with no text enclosed)
- the string "0"
- an array with zero elements, and
- a special value called NULL.
*/

if("hello") { # this is because the string "hello" is converted to true. For any control structure as long as condition evaluates to true
    echo 'if block'; # display here first since the condition is true
}
else {
    echo 'else block';
}