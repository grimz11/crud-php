<?php

function CreateDb() {
  $servername = "localhost";
  $username = "admin101!";
  $password = "Hello101!";
  $dbname = "crudphp";

  //connect to db
  $con = mysqli_connect($servername, $username, $password);

  //Check connection
  if(!$con) {
    die("Connection failed".mysqli_connect_error());
  }

  //create Database
  $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

  if(mysqli_query($con, $sql)) {
    $con = mysqli_connect($servername, $username, $password, $dbname);
    $sql = "CREATE TABLE IF NOT EXISTS persons(
        id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        fullname VARCHAR(25) NOT NULL,
        birthday VARCHAR(25),
        address1 VARCHAR(25)
      );
    ";
  
    if(mysqli_query($con,$sql)) {
      return $con;
    }else {
      echo "Cannot create table";
    }
  }else {
    echo "Error".mysqli_error($con);
  }
  mysqli_close($con);
}