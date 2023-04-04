<!DOCTYPE html>

<!---PHP Cross site scripting-->

<html>
<head>
<title>Cross_site_scripting </title>
</head>
<?php
/*
Cross site scripting occurs when a user enters undesirable scripting code into our PHP form and submits the code.
 If our site then stores this code (for instance, in a database) and displays it to another user, the malicious code will be 
 executed in the other user's browser


*/
?>
<body>

<form action = "" method ="post"></i>Enter Name<br>

<input type ="text" name = "studentName"
 value ="Name: " 
 <?php

if(isset($_POST['studentName']))
echo $_POST['studentName'];
?>>


<br><br> Favorite Subject(s)<br>
<input type ="checkbox" name = "subj[]" value = "EL" 
<?php


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
?>> Female
<br><br>
<input type = "submit" name = "sm" value = "Submit Form">

<?php
 echo"<br>"; 
if(isset($_POST['sm']))
        print_r($_POST);
        echo "<br>";
?>
<?php
/* into the text field now, you'll see that the alert no longer pops out when you submit the form.
Instead, you get the following output below the form:

        <script> alert('crossed'); </script> into the textfield
        
*/
if(isset($_POST['studentName']))
    echo 'You entered '.htmlspecialchars($_POST['studentName']);

/* if you right-click on your webpage and select "View page source", you'll see the line*/
/* OUTPUT(View page source):

<br>You entered Name: &lt;script&gt; alert(&quot;hacked&quot;); &lt;/script&gt;</form>


*/
?>
</form>


</body>

</html>