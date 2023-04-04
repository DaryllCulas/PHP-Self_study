<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Displaying html with php code</title>
</head>
<?php
/*
This technique is easy to use and works well with simple html code. However, it can get cumbersome if we have more complicated
HTML code to output, especially if the code uses lots of single and double quotation marks. For instance, if we want to output
the following HTML code.
*/
?>
<body>
    <p>This is php with echo statement</p>
<?php
for($i = 0; $i <3; $i++):
    echo '<h1>Hello</h1>';
endfor;
?>

<br/>
    <p>This is php with no echo statement (recommended)</p>
<?php
    for($i = 0; $i < 3; ++$i): ?>
        <h2><i>World</i></h2>
<?php endfor;
?>

</body>
</html>