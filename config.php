<?php
$DB_USERNAME = 'root';
$DB_PASSWORD = 'root';
$DB_HOST = 'localhost';
$DB_DATABASE = 'Travelicious';

  $mysqli = new mysqli($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);

  if (mysqli_connect_error()) {
    die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
  }

//   echo 'Connected successfully.';

//   $mysqli->close();
