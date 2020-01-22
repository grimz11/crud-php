<?php
include_once __DIR__."../../../config.php";

require_once SITE_ROOT . "/db/dbconnection/connect.php";

$con = CreateDb();

if(filter_has_var(INPUT_POST, 'btnEditPerson')) {
  editPerson();
  header('Location: ../index.php');
}


function editPerson() {
  session_start();
  $id = $_SESSION['id'];
  $fullname = htmlentities($_POST['editName']);
  $birthday = htmlentities($_POST['editBirthday']);
  $address1 = htmlentities($_POST['editAddress']);

  if($fullname && $birthday && $address1 && $id) {
    $sql = "UPDATE persons SET fullname = '$fullname', birthday = '$birthday', address1 = '$address1' WHERE id = '$id' ";
    
    if(mysqli_query($GLOBALS['con'], $sql)) {
        mysqli_close($GLOBALS['con']);
        session_destroy();
        // echo "successfully updated";
    }else {
      echo "Faild to update";
    }  
  }else {
    echo "All Fields must be filled out!";
  }
}