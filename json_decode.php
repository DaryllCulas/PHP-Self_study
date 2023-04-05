<?php
/*
    Reading files - we define a list of books. So far, we have only three books, but you can guess that if we want to make this
    application useful, the list will grow way more. Storing the information inside your code is not practical at all,
    so we have to start thinking about externalizing it.

    -There is no need to keep using a PHP arrays to define the book. Using a less language-restrictive system will allow people who
      who do not know PHP to edit the content of the file. There are many solutions for this, like CSV or XML files, but 
      nowadays, one of the most used systems to represent data in web application is JSON

    - PHP allows you to convert arrays to JSON and vice versa using just a couple of functions. -> json_encode and json_decode.
*/


# we are able to store all the content from the JSON file in a variable as a string.
# with the function, we transform this JSON string into an array. 
# The second argument in json_decode tells PHP to transform it to an array, 
# otherwise it would use objects, which we have not covered as yet
$bookJson = file_get_contents('./books.json');
$books = json_decode($bookJson, true);

print_r($books);
echo "<br>";
echo "<br>";

print_r($books[1]);
echo "<br>";
echo "<br>";

print_r($books);

# use print_r instead echo to display the output.





?>



