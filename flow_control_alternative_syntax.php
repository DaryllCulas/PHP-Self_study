<?php
/*
This syntax involves changing opening braces to colons ( : ) and the
last closing brace to endif; , endwhile; , endfor; ,
endforeach; , or endswitch; respectively.
Let’s use an if statement to illustrate this. Suppose we want to
display different outputs based on the value of $a , we can use the
following if statement:
*/

/** This is if-else statement section **/
$a = 5;
if($a==5):
    echo '<br>The value of $a is '.$a;
   
else:
    echo 'Not five';
endif;

echo "<br>";
/** This is switch case section**/
switch($a):
    case 1:
        echo 'The value of a is 1';
        break;
    case 2: 
        echo 'The value of a is 2';
        break;
    case 3:
        echo 'The value of a is 3'; 
        break;
    case 4:
        echo 'The value of a is 4';
    case 5: 
        echo 'The value of a is '.$a;
        break;
    default:
        echo 'The value of a is 0';
endswitch;

echo "<br>";

/** This is foreach section **/

$arr1 = array('Phineas' => 'Rocketship', 'Ferb' => 'UFO', 'Perry' => 'Dog\'s bowl');
foreach($arr1 as $varArr1 => $weapon):
    echo $varArr1.' has '.$weapon."<br>";

endforeach;