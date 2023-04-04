<?php
    /*
    To use the header() function, we need to pass the word “Location”,
    followed by a colon and the redirect URL to the function. Using a
    function is also known as calling the function.
    To call the header() function, add the following code to the start of
    includedemo.php (before the <!DOCTYPE html> tag):
     */

    header('Location: https://google.com');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="style/css">
    <title>Redirecting User</title>
</head>
<body>
    <?php
    include 'heading.html';

        #additionally,if heading.html stored in another folder
        # (say in a folder called "includes2" inside the htdocs), we need use the statement below:
        # include 'includes2/heading.html';
    ?>
</body>

</html>
