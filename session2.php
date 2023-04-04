<?php


    session_start();
    echo '<br> Food: '.$_SESSION['myFavFood'];
    echo '<br> Drink: '.$_SESSION['myFavDrink'];

    echo 'color: '.$_SESSION['myFavColor']; 
    # Notice that we get an undefined index notice for "myFavColor"? This is because $_SESSION['myFavColor'] was destroyed
    # using the unset() function in session1.php 




?>