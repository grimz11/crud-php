<?php

require_once("/var/www/html/crud-php/db/dbconnection/connect.php");
require_once("/var/www/html/crud-php/components/displayperson.component.php");
// require_once __DIR__ . "../connect.php";
// require_once __DIR__ . "/components/displayperson.component.php";

$con = CreateDb();

if(isset($_POST['btnAdd'])) {
  addPerson();
}

function addPerson() {
  $sql = "SELECT * FROM persons";

  if(mysqli_query($GLOBALS['con'], $sql)) {
    echo "Successfuly fetched";
  }
}