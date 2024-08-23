<h2>Songs by Year</h2>

<?php

/**
 * Function to query db for songs by year
 */

try {

  require "config.php";
  require "common.php";
  
  $connection = new PDO($dsn, $username, $password, $options);
  
  $sql = "SELECT * FROM `songs` WHERE `year` IS NOT NULL ORDER BY `year` ASC";
  
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