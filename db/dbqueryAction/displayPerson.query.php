<?php
include __DIR__."../../../config.php";

require_once SITE_ROOT . "/db/dbconnection/connect.php";

$con = CreateDb();

if(filter_has_var(INPUT_POST, 'btnEditPerson')) {
  ?> session_start(); <?php
  echo "Hello";
  // $_SESSION['name'] = 
  header('Location: pages/edit.php');
}

function getPersons() {
  $sql = "SELECT * FROM persons";
  $res = mysqli_query($GLOBALS['con'], $sql);

  if(mysqli_num_rows($res) > 0 ) {
    mysqli_close($GLOBALS['con']);
    return $res;
  }
}
