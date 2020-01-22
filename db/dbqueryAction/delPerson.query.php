<?php
include_once __DIR__."../../../config.php";

require_once SITE_ROOT . "/db/dbconnection/connect.php";

$con = CreateDb();

if(filter_has_var(INPUT_POST, 'btnDelPerson')) {
  deletePerson();
}

function deletePerson() {
  $id = htmlentities((int)$_POST['btnDelPerson']);

  if($id) {
    $sql = "DELETE FROM persons WHERE id='$id'";

    if(mysqli_query($GLOBALS['con'], $sql)) {
      mysqli_close($GLOBALS['con']);
    }
  }
  
}