<?php

function editPersonComponent() {
  ?> 
    <div className="card mb-3">
      <div className="card-body">
        <form method="POST">
          <div className="form-group">
            <label for="fullname">Name</label>
            <input type="text" class="form-control form-control-lg" placeholder="Enter Name..." name="editName" >
          </div>
          <div className="form-group" style="margin-top: 3px;">
            <label for="birthday">Birthday</label>
            <input type="text" class="form-control form-control-lg" placeholder="Enter Birthday..." name="editBirthday" >
          </div>
          <div className="form-group" style="margin-top: 3px;">
            <label for="address">Address</label>
            <input type="text" class="form-control form-control-lg" placeholder="Enter Address..." name="editAddress" >
          </div>
        </form>
      </div>
    </div>
  <?php
}