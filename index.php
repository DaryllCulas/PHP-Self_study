
<!DOCTYPE html>
<html lang="en">
<head>

<title> Function method using return statement</title>
</head>
<body>
<?php include 'functions.php'; ?>
  <form method ="get">
    <label>Username: </label>
    <input type="text" name = "user_name"/>
    <label> school: </label>
    <input type="text" name ="school"/>
    <input type ="submit" name="sm_Button" value = "Login"/>
<?php 

if(isset($_GET['sm_Button'])) {

 echo loginMessage(); 
}
 ?>
  </form>
        
</body>


</html>