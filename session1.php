<?php
/*
- a session way of storing information that can be accessed across multiple pages; 
this information is stored in the $_SESSION superglobal

- the $_SESSION superglobal is an associative array
*/
    session_start();

    $_SESSION['myFavFood'] = 'Pizza';
    $_SESSION['myFavDrink'] = 'Cola';
    $_SESSION['myFavColor'] = 'Orange';

    # updating a session variable
    $_SESSION['myFavDrink'] = 'Beer';


    # deleting a session variable
    unset($_SESSION['myFavColor']);



?>