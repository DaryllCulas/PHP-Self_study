<!DOCTYPE html>
<html>
    <body>
        <?php
            /*
            The difference between the two is that require
            produces a fatal error and stops the script if PHP fails to find the file
            required.
            include , on the other hand, will only produce a warning without
            stopping the script
            */
            #require -it produces a fatal error and stops the script if PHP fails to find the file required. 
            require 'heading.html';
        ?>
     

    </body>
</html>