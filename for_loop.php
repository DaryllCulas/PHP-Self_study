<?php
/*
Next, let’s move on to the for loop. This control structure executes a
block of code repeatedly until the test condition is no longer valid.
The syntax is as follows:

for (initial value; test condition; modification to value) {
            //Do Some Task
}

*/


for($i = 1; $i < 5; $i++) {
    echo 'The value of i (post increment): '.$i.'<br>';
} # when i = 5 < 5 returns false, the iteration will end

echo "<br>";
for($j=1; $j < 5; ++$j) {
    echo 'The value of j (pre increment): '.$j.'<br>';
} # when j = 5 < 5 returns false, the iteration will end


