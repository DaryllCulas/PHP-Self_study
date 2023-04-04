<?php
/* 
To define our own functions, we use the syntax below:

function functionName(list of parameters) {
//code to be executed;
//return statements, if any


}
*/
#This function has no arguments and this is just a default
function displayGreetings() {
    echo 'Hello';
}
displayGreetings(); # This is invocation of function displayGreetings()
echo '<br>';
echo '<br>';



#####################################################################################
#This function has 2 arguments so called 2 parameters (parameter = 1 arg)
function displayGreetings2($name, $message) {
    echo "Hello $name, $message";
}
displayGreetings2('Jamie', 'good morning'); #This is proper invocation of function(value of param1, value of param2)
echo '<br>';
echo '<br>';


######################################################################################
#This function is able to have multiple function calls and it sets to default when the function call has 1 arg then it omits the second argument
function displayGreetings3($name1, $message1 ='have a nice nice day') {
    echo "Hello $name1, $message1";
}
displayGreetings3('jose'); # when we call this function, we omitted the second argument then this is default function call
echo '<br>';
echo '<br>';
displayGreetings3('jamie', 'how are you doing?'); #function call has 2 params  
echo '<br>';
echo '<br>';

#take note
/*
When we declare functions with default values for parameters, note
that parameters with default values must come after parameters
without default values. If we declare a function as

function redundantDefault($a = 1, $b){
    //some code
}

the default value for $a will not work as it comes before $b (which
does not have a default value); we’ll still need to provide two
arguments when calling the function.the default value for $a will not work as it comes before $b (which
does not have a default value); we’ll still need to provide two
arguments when calling the function.
*/

######################################################################################
function addNumbers($num1, $num2, $num3) {
    return $num1 + $num2 + $num3;
    echo 'HELLO'; #This will not display, once a return statement is executed. the function exits, and any statements after the return statement is not executed
}
echo 'The sum of addNumbers() is '.addNumbers(6, 6, 6);
echo '<br>';
echo '<br>';

