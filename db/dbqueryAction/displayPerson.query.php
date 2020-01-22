<?php
include __DIR__."../../../config.php";

require_once SITE_ROOT . "/db/dbconnection/connect.php";
require_once SITE_ROOT . "/components/displayperson.component.php";

$con = CreateDb();

if(filter_has_var(INPUT_POST, 'btnEditPerson')) {
  session_start(); 
  echo "Hello";
  // $_SESSION['name'] = $_POST['fullname'];
  // $_SESSION['birthday'] = $_POST['birthday'];
  // $_SESSION['address'] = $_POST['address'];
  $_SESSION['id'] = $_POST['btnEditPerson'];
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
