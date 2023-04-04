<!DOCTYPE html>

<!---PHP form handling-->
<html>
<head>
<title>PHP Form handling </title>
</head>
<body>
<form action = "" method ="get">Enter Name<br>
<!--- The action attributes specifies the file that we want to use to assign the path of the file to the action attribute -->
<!--We assign an empty string to it. This means that we want to use the current file e.g. form.php to process the form--->

<input type ="text" name = "studentName" value ="Your Name: ">


<br><br> Favorite Subject(s)<br>
<input type ="checkbox" name = "subj[]" value = "EL"> English
<input type ="checkbox" name = "subj[]" value = "MA"> MATH
<input type ="checkbox" name = "subj[]" value = "PG"> Programming 

<input type ="radio" name = "Gender" value = "M"> Male
<input type ="radio" name = "Gender" value = "F"> Female
<br><br>
<input type = "submit" name = "submit_Button" value = "Submit Form">

<!-----get and $_GET------->
<!------- Here, we use the isset() function to check if $_GET['sm'] is set.
Before we click on the “Submit Form” button (named “sm”),
$_GET['sm'] is considered to be unset. ------------>
<?php
    if(isset($_GET['submit_Button']))
        print_r($_GET);
?>
<!--when the if blocks (GET method executes, the url will change and the query string will present at url bar)---->
</body>




</html>