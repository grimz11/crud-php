<?php

function displayPersonComponent() {
  return ulGroup();
}

function ulGroup() {
  if(filter_has_var(INPUT_POST, 'btnDisplay')) {
      $res = getPersons();
      if($res) {
        while($row = mysqli_fetch_assoc($res)) {
          ?> 
            <div class="card card-body mb-3" id="personData">
              <h4>
                <?php echo $row['fullname']?>
                <!-- <i class="fas fa-caret-down"></i> -->
                <button type="submit" value="<?php echo $row['id'];?>" class="btn btn-danger"name="btnDelPerson" style="float: right;">Delete</button>

                <button value="<?php echo $row['id'];?>" class="btn btn-secondary"name="btnEditPerson" style="float: right;margin-right: 1rem;" type="submit">Edit</button>
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