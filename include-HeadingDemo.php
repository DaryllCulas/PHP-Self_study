<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="style/css">
    <title>Document</title>
</head>
<body>
    <?php
    /*
    When PHP sees this statement, it goes to heading.html , “copies”
    the code inside, and “pastes” it into include-Headingdemo.php for us
    automatically. This saves us the trouble of having to copy and paste
    the code ourselves.
    */
    include 'heading.html';

        #additionally,if heading.html stored in another folder
        # (say in a folder called "includes2" inside the htdocs), we need use the statement below:
        # include 'includes2/heading.html';
    ?>
</body>

</html>
