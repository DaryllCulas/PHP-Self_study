<?php
$looking = isset($_POST['title']) &&
isset($_POST['author']);

?>
<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8">
<title>Bookstore</title>
</head>
<body>
<form action = "authenticate.php" method = "post">
<p>You lookin'? <?php echo (int)$looking; ?>
</p>
<p>The book you are looking for is</p>
<ul>

<li><b>Title</b>: <input type ="text" name = "title">

</li>
<li><b>Author</b>: <input type ="text" name = "author">
<br/></li>
</ul>


<br/>
<br/>

<p>Enter your details to login: </p>

    <label> Username </label>
    <input type="text" name ="user_name"/>
    <label> Password </label>
    <input type = "password" name ="pass_word"/>
    <input type ="submit" value = "Login"/>
</form>
</body>
</html>