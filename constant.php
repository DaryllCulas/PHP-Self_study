<!DOCTYPE html>
<html>
<head>
    <title> PHP CONSTANT</title>
</head>
<body>
    
    <h1> PHP constant </h1>
    <h4>Once we define the constant, we are not allowed to change its value</h4>
    <?php  


# Constant - we can define our own constant in PHP and give them names for easy reference.
# To do that, we use a built-in function called define(). Once we define a constant, we are not allowed to change its value.

            # Const Name,       Value
       define("Basic_Member", 1112020);
        echo Basic_Member." => This is used by define() function";
        echo "<br/>";

        define("Basic_Member2",16932);
        echo Basic_Member2." => This is used by define() function";
        echo "<br/>";

        const Basic_Member3 = 88932;
        echo Basic_Member3." => This is used by const";
    ?>
</body>


</html>


