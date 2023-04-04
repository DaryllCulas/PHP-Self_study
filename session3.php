<?php

/*
Beside creating and storing data in a session, we can destroy a session. We commonly do that when users log out of our site.
To destroy a session, we use another built-in function called session_destroy().

*/
    session_start();
    session_destroy();
/*
As shown in the code above, we need to call the session_start() function to resume an existing session before destroying it.
Next, load session3.php in your browser; this destroys the current session.
Finally, load session2.php in your session2.php in your browser again.
You'll get an output says indexes "myFavFood", "myFavDrink", and "myFavColor" are all undefined.
This indicates that the session no longer exists.



*/

?>