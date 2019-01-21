<?php
  $db = mysqli_connect('db', 'projectuser', 'supersecretpassword', "project");
  if ($db) {
    mysqli_close($db);
    echo 'Successful mysqli connection, replace files in the www directory with your project files';
  } else {
    echo 'Could not connect';
  }
