<?php
/*
The first is the if statement. This statement allows the program to
evaluate if a certain condition is met and perform an appropriate
action based on the result of the evaluation.

if (condition 1 is met)
{
    //Do task A
}
elseif (condition 2 is met)
{
    //Do task B
}
elseif (condition 3 is met)
{
    //Do task C}
else
{
    //Do task D
}

*/
$a =7;
if($a < 0) {
    echo 'if block<br>';
    echo '$a is smaller than 0';
} // returns false

else if($a < 5) {
    echo 'First else if block';
}
//returns false

else if($a < 10) {
    echo'Second else if block';
} // returns true and this will display only this block if the condition is met

else {
    echo 'else block';
} 


