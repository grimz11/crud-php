<?php
include_once __DIR__."../../../config.php";

require_once SITE_ROOT . "/db/dbconnection/connect.php";

$con = CreateDb();

if(filter_has_var(INPUT_POST, 'btnAdd')) {
  addPerson();
}

function addPerson() {
  $fullname = htmlentities($_POST['fullname']);
  $birthday = htmlentities($_POST['birthday']);
  $address1 = htmlentities($_POST['address1']);
  $email = htmlentities($_POST['email']);
  $password = htmlentities($_POST['password']);

  if($fullname && $birthday && $address1) {
    $sql = "INSERT INTO persons(fullname,birthday,address1, email, pass)
           VALUES ('$fullname', '$birthday', '$address1', '$email', '$password')";
 
   if(mysqli_query($GLOBALS['con'], $sql)) {
      mysqli_close($GLOBALS['con']);
   }else {
     echo "Failed to add";
   }  
  }else {
    echo "All Fields must be filled out!";
  }
  
}