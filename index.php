<?php
  $host = "127.0.0.1"
  $user = "breweb-client";
  $password = "reihinost1t$";
  $database = "jwrbdb";
  $table = "songs";

  echo "<h5>Working on it!</h5>";

  try {
    $db = new PDO("mysql:host=$host;dbname=$database", $user, $password);
    echo "<h2>Songs</h2><ol>";
    foreach($db->query("SELECT title FROM $table") as $row) {
      echo "<li>" . $row['title'] . "</li>";
    }
    echo "</ol>";
  } catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br />";
    die();
  }
?>
