<?php

require_once("/var/www/html/crud-php/db/dbconnection/connect.php");
require_once("/var/www/html/crud-php/components/displayperson.component.php");
// require_once __DIR__ . "../connect.php";
// require_once __DIR__ . "/components/displayperson.component.php";

$con = CreateDb();

// if(isset($_POST['btnDisplay'])) {
//   getPersons();
// }

function getPersons() {
  $sql = "SELECT * FROM persons";
  $res = mysqli_query($GLOBALS['con'], $sql);

  if(mysqli_num_rows($res) > 0 ) {
    return $res;
  }
}