<!DOCTYPE html>
<html>
    <body>
        <?php

            /*
            As the names suggest, the include_once and require_once
            statements only “copy and paste” the code into the file once. These
            statements are useful in cases where the same file may be included
            more than once accidentally (for instance, when the script is so long
            you have lost track of whether you have included the file previously).
            */
            
            include_once 'heading.html';
           
            #require_once 'heading.html';
        ?>
    </body>
</html>