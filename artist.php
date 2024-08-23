<h2>Songs by Artist</h2>

<?php

/**
 * Function to query db for songs by title
 */

try {

  require "config.php";
  require "common.php";
  
  $connection = new PDO($dsn, $username, $password, $options);
  
  $sql = "SELECT * FROM `songs` ORDER BY `artist`";
  
  $statement = $connection->prepare($sql);
  $statement->execute();

  $result = $statement->fetchAll();
} catch(PDOException $error) {
  echo $sql . "<br />" . $error->getMessage();
}
?>

<?php require "templates/header.php"; ?>

<?php require "results-table.php"; ?>

<?php require "templates/footer.php"; ?>