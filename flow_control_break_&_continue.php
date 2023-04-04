<?php
/*
 we can use the break
statement in a loop. A break statement ends the execution of the
loop it is in. Let’s look at an example:
*/
for($i = 0; $i < 50; $i++) { 
    echo "The value of i: "."$i<br>"; # display here and proceed to the next block for conditioning
if($i==4) { # when i = 4 == 4 returns true then the break statement will activate and the program execution will stop
    break;
}
}
echo "<br>";

/*
we have the continue statement. This statement does not
cause a loop to end prematurely. Instead, it causes the rest of the
loop to be skipped for that particular iteration . Let’s look at an
example:
*/
for($i = 0; $i < 6; ++$i){
    echo "i = ".$i.' ,';

    if($i == 4) 
        continue; # continue statement caused the program to skip the statements
        echo 'first.';
        echo 'Second<br>';
    
    
}