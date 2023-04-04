<?php
/*
    This loop performs a task repeatedly while a specific condition remains valid. The syntax is as follows:

        while (condition is true) {
            //do A
        }

*/
$d = 1; #initialize the variable $d assigns 1
while($d < 5) {  # the $d will start at 1 then it iterates until $d = 4 which it returns true only
    echo "The value of d: ".$d."<br>"; #display according to the condition meets true returns
    $d++; # as the condition meets, the value of $d will increase by 1 then repeat as it returns true
}
# when $d = 5 < 5 it returns false and the condition is not met then it will stop its looping  