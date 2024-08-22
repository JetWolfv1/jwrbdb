<?php
$user = "example_user";
$password = "reihinostits";
$database = "example_database";
$table = "todo_list";
$host = "http://64.23.150.91";

try {
  $db = new PDO("mysql:host=$host;dbname=$database", $user, $password);
  echo "<h2>TODO</h2><ol>";
  foreach($db->query("SELECT content FROM $table") as $row) {
    echo "<li>" . $row['content'] . "</li>";
  }
  echo "</ol>";
} catch (PDOException $e) {
  print "Error!: " . $e->getMessage() . "<br />";
  die();
}