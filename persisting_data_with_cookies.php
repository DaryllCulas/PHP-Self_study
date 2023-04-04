<?php
 $lookingForBook = isset($_POST['title']) &&
 isset($_POST['author']);

 $lookingForBook = !empty($_POST);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset = "UTF">
<title>Persisting data with cookies</title>
</head>
<body>
    <p> You are <?php 
    echo $_COOKIE['user_name']; ?> 
    </p>
    <p> Are you looking for a book? <?php echo (int) $lookingForBook ?></p>
    <p> The book you are looking for is </p>
    <ul>
        <li><b>Title</b>: <?php 
            echo $_COOKIE['title']; ?></l.i>

        <li><b>Author</b>: <?php 
            echo $_COOKIE['author']; ?> </li>
    </ul>

</body>



</html>