<?php
/*
switch (variable used for switching) {
    case firstCase:
        Task A;
        break;
    case secondCase:
        Task B;
        break;
    default:
        Default task;
}
*/
$b = 20;
switch($b) {
    case 10:
        echo 'chocolate<br>';
        break;
    case 20:    //case satisfied
        echo 'lemon<br>'; //display according to case satisfied
    case 25: // continue until...
        echo 'strawberry<br';
        break; // end of block 
    default:
        echo 'None of the above<br>';
       
}
