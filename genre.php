<h2>Songs by Genre</h2>

<?php

/**
 * Function to query db for songs by genre
 */

try {

  require "config.php";
  require "common.php";
  
  $connection = new PDO($dsn, $username, $password, $options);
  
  $sql = "SELECT * FROM `songs` WHERE `genre` IS NOT NULL ORDER BY `genre`";
  
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