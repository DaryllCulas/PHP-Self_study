<?php

// Setting cookies for 'persisting_data_with_cookies.php'


setcookie('user_name', $_POST['user_name']);
setcookie('title', $_POST['title']);
setcookie('author', $_POST['author']);


$submitted = !empty($_POST);

?>
<!DOCTYPE html>
<html lang ="en">
    <head>
        <meta charset = "UTF-8">
        <title>BOOKSTORE</title>
    </head>
<body>
    <p>Form Submitted? <?php
        echo (int) $submitted; ?>
     </p>
<ul>
    
    <li><b>Title</b>: <?php 
    if(isset($_POST['title']))

    echo $_POST['title']; ?> </li>

    <li><b>author</b>: <?php 
    if(isset($_POST['author']))
    echo $_POST['author']?> </li>
</ul>
     <p>Your Login info is </p>
     <ul>
        <li><b> username</b>: <?php
        echo $_POST['user_name']; ?></li>
        <li><b>password</b>: <?php
        echo $_POST['pass_word'];
        ?>
    </li>
</ul>



</body>





</html>



