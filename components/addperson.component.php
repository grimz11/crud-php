<?php

function addPersonComponent() {
  ?> 
    <div className="card mb-3">
      <div className="card-body">
        <form>
          <div className="form-group">
            <label for="fullname">Name</label>
            <input type="text" class="form-control form-control-lg" placeholder="Enter Name..." name="fullname" >
          </div>
          <div className="form-group">
            <label for="birthday">Birthday</label>
            <input type="text" class="form-control form-control-lg" placeholder="Enter Birthday..." name="birthday" >
          </div>
          <div className="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control form-control-lg" placeholder="Enter Address..." name="address1" >
          </div>
        </form>
      </div>
    </div>
  <?php
}