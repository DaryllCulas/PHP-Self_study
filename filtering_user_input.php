<?php
/* Sanitization is the process of removing invalid characters from the input.
For instance, sanitizing an integer involves removing all characters except digits, plus and minus signs from the input */

# Validation - on the other hand, is the process of checking if the input satisfies certain criterias.

$_num = '12.5abc';
echo filter_var($_num, FILTER_SANITIZE_NUMBER_INT);

/* For instance,  if the input is suppposed to be an email address,
 we can use the validation process to check if it is indeed an email 
 address (such as whether it contains the "@" character. */

 /* if we want to validate whether an email address is valid, we can use the FILTER_VALIDATE_EMAIL filter. If we pass a valid email
 to the function, it returns the email address. Else, it returns false*/
 echo "<br>";

 $email ='abc123@gmail';
 var_dump(filter_var($email, FILTER_VALIDATE_EMAIL)); # It will return false since '.com' is missing!

 # as "abc@gmail" is not valid email address(.com is missing)

 # these are correct codes of email validation process

 echo "<br>";
 $email1 ='abc@gmail.com';
 var_dump(filter_var($email1, FILTER_VALIDATE_EMAIL));


?>