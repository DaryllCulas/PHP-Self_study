<?php
    /*
    -A cookie is another way of storing information that can be accessed across multiple pages on the site. It is essentially a small
    text file that stores data on the user's computer (as opposed to a session that stores data on the server.)

    -As cookies are stored on the user's computer, you should not use cookies to use to store sensitive data, as a malicious user 
    could potentially manipulate it. Also, cookies may be disabled on the user's browser. Hence, if the information to be stored 
    is crucial or sensitive, you should use sessions instead.

    To create a cookie, we use the set_cookie() function.
    */

    # We commonly provide the first three arguments to the function, namely the name of the cookie, the value of the cookie 
    # and the expiry date in UNIX timestamp format. 

    setcookie('userName', 'joy', time() + 120); #for the first cookie, (userName), its value and expiry date are 'joy' and time() + 120 respectively. 
    # time() is a built in function that gives us the current UNIX timestamp; time() + 120 means the cookie will expire 120 seconds.



    #modifying a cookie 
    setcookie('userAge', 25, time() + 3600);
    setcookie('userAge', 26, time() + 3600);

    #deleting a cookie 
    setcookie('userLevel', 3, time(), + 3600);
    setcookie('userLevel', 3, time() - 3600);

    # Here, we set three cookies - userName, userAge and userLevel 




?>