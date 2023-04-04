<!DOCTYPE html>

<!---PHP form handling-->
<html>
<head>
<title>PHP Form handling </title>
</head>
<body>
<form action = "" method ="post"></i>Enter Name<br>
<!--- The action attributes specifies the file that we want to use to assign the path of the file to the action attribute -->
<!--We assign an empty string to it. This means that we want to use the current file e.g. form.php to process the form --->

<input type ="text" name = "studentName" value ="Name: ">


<br><br> Favorite Subject(s)<br>
<input type ="checkbox" name = "subj[]" value = "EL"> English
<input type ="checkbox" name = "subj[]" value = "MA"> MATH
<input type ="checkbox" name = "subj[]" value = "PG"> Programming 

<input type ="radio" name = "Gender" value = "M"> Male
<input type ="radio" name = "Gender" value = "F"> Female
<br><br>
<input type = "submit" name = "sm" value = "Submit Form">


<?php

# The POST method is similar to the get method, except that form data is not appended to the URL. This makes the post method suitable
# for sending sensitive information to the server, as information wil not be visible to the URL
 echo"<br>"; 
if(isset($_POST['sm']))
        print_r($_POST);
?>

</body>




</html>