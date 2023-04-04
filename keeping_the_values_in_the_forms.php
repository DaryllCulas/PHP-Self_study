<!DOCTYPE html>

<!---PHP form handling-->
<html>
<head>
<title>PHP Form handling </title>
</head>
<body>
<form action = "" method ="post"></i>Enter Name<br>
<!--For text boxes we use echo statement to modify the value attribute.
 This attribute allows us to prefill a textbox with text.
In form.php, we prefilled the textbox with the text "Name: ". Alternatively,
We can use PHP to prefill the textbox with user-entered data.
To do that.-->
<input type ="text" name = "studentName"
 value ="<?php
if(isset($_GET['studentName']))
echo $_GET['studentName'];
?>">


<br><br> Favorite Subject(s)<br>
<input type ="checkbox" name = "subj[]" value = "EL" 
<?php

# To prefill this element like checkboxes, radio buttons, and dropdown lists. To prefill these elements, we need to know
# which option has been selected and use PHP to select these options dynamically. Let's look at an example using the checkboxes
        if(isset($_POST['subj']) && in_array('EL', $_POST['subj']))
                echo "checked";
?>> English
<input type ="checkbox" name = "subj[]" value = "MA"
<?php
        if(isset($_POST['subj']) && in_array('MA', $_POST['subj']))
                echo "checked";
?>> MATH
<input type ="checkbox" name = "subj[]" value = "PG"
<?php
        if(isset($_POST['subj']) && in_array('PG', $_POST['subj']))
                echo "checked";
?>> Programming 
<input type ="radio" name = "Gender[]" value = "M"
<?php
        if(isset($_POST['Gender']) && in_array('M', $_POST['Gender']))
                echo "checked";
?>> Male
<input type ="radio" name = "Gender[]" value = "F"
<?php
        if(isset($_POST['Gender']) && in_array('F', $_POST['Gender']))
                echo "checked";
?>
> Female
<br><br>
<input type = "submit" name = "submit_button" value = "Submit Form">
<?php

# The POST method is similar to the get method, except that form data is not appended to the URL. This makes the post method suitable
# for sending sensitive information to the server, as information wil not be visible to the URL
 echo"<br>"; 
if(isset($_POST['submit_button']))
        print_r($_POST);
?>

</body>




</html>