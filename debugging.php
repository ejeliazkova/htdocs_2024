<?php
$errors = array();

if(isset($_REQUEST['submitForm'])){
  
  validateField('firstName');
  validateField('lastName');
  
  if(sizeof($errors) == 0){
     saveForm();
  }
}
if(sizeof($errors) > 0){
  echo "<h1>There were errors!</h1>";
}
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
?>
<form action='' method='post'>
  First Name: <input type='text' name='firstName'/><br/>
  Last Name: <input type='text' name='lastName'/><br/>
  <input type='submit' name='submitForm' />
</form>

<?php

function validateField($name){
   global $errors;
   if(!@$_REQUEST[$name]){
      $errors[$name] = 'required';
   }
}

function saveForm(){
    //do something
    die("The form was saved!");
}