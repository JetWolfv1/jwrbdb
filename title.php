<h2>Songs by Title</h2>

<?php

/**
 * Function to query db for songs by title
 */

try {
  require "config.php";
  require "common.php";
  
  $connection = new PDO($dsn, $username, $password, $options);
  
  $sql = "SELECT * FROM songs ORDER BY title";
  
  $statement = $connection->prepare($sql);
  $statement->execute();

  $result = $statement->fetchAll();
} catch(PDOException $error) {
  echo $sql . "<br />" . $error->getMessage();
}
?>

<?php require "templates/header.php"; ?>

<?php

if ($result && $statement->rowcount() > 0) { ?>

  <h4>Results</h4>

  <table>
    <thead>
      <tr>
        <th>Title</th>
        <th>Artist</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($result as $row) { ?>
        <tr>
          <td><?php echo escape($row["title"]); ?></td>
          <td><?php echo escape($row["artist"]); ?></td>
        </tr>
        <?php } ?>
    </tbody>
  </table>
  <?php } else { ?>
    <h1>UH OH</h1>
    <?php
  } ?>

<?php require "templates/footer.php"; ?>