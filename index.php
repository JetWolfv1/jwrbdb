<?php
  $servername = "localhost";
  $username = "breweb-client";
  $password = "reihinost1t$";
  $dbname = "jwrbdb";
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
?>