<?php

function navBarComponent() {
  ?> 
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark mb-3">
      <a class="navbar-brand" href="/crud-php/index.php">CRUD</a>
      <div>
        <ul class="nav navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/crud-php/index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/crud-php/pages/add.php" name="btnAdd">Add</a>
          </li>
        </ul>
      </div>
    </nav>
  <?php
}