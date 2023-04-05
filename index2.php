<?php require_once 'functions.php'; 
?>
<!DOCTYPE html>
<html lang = "en">
<head>
<title>function using type hinting and return types</title>
</head>
<body>
    <ul>
    <?php foreach ($books as $book): ?>
        <li> <?php echo printableTitle($book); ?> </li>
    <?php endforeach; ?>
    </ul>
</body>

</html>