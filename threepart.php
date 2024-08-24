<h2>Songs With Three-Part Vocals</h2>

<?php

/**
 * Function to query db for songs with three-part vocals
 */

try {

  require "config.php";
  require "common.php";
  
  $connection = new PDO($dsn, $username, $password, $options);
  
  $sql = "SELECT * FROM `songs` WHERE `three_part` ORDER BY `title`";
  
  $statement = $connection->prepare($sql);
  $statement->execute();

  $result = $statement->fetchAll();
} catch(PDOException $error) {
  echo $sql . "<br />" . $error->getMessage();
}
?>

<?php require "header.php"; ?>

<?php require "results-table.php"; ?>

<?php require "footer.php"; ?>