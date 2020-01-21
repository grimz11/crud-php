<?php

// require_once("../db/dbqueryAction/displayPerson.query.php");
require_once("/var/www/html/crud-php/db/dbqueryAction/displayPerson.query.php");

function displayPerson() {
  return ulGroup();
}

function ulGroup() {
  if(isset($_POST['btnDisplay'])) {
      $res = getPersons();
      if($res) {
        while($row = mysqli_fetch_assoc($res)) {
          ?> 
            <div class="card card-body mb-3">
              <h4>
                <?php echo $row['fullname']?>
                <i class="fas fa-caret-down"></i>
                <i class="fas fa-times" ></i>
                <a href="">
                  <i class="fas fa-pencil-alt"></i>
                </a>
              </h4>
            <ul class="list-group">
            <li class="list-group-item">Birthday: <?php echo $row['birthday']?> </li>
            <li class="list-group-item">Address:  <?php echo $row['address1']?></li>
          </ul>
          </div>
          <?php
        }
      }
  }
    
}