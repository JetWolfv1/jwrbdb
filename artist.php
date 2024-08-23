<?php

/**
 * Function to query db for songs by title
 */

try {

  require "config.php";
  require "common.php";
  
  $connection = new PDO($dsn, $username, $password, $options);
  
  $sql = "SELECT * FROM songs ORDER BY artist";
  
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
    <p>Trying to get some vars here?</p>
    <p>Connection: <?php echo escape($connection); ?></p>
    <p>Query: <?php echo escape($sql); ?></p>
    <p>Statement (executed): <?php echo escape($statement); ?></p>
    <p>Result: <?php echo escape($result); ?></p>
    
    <?php
  } ?>


<h2>Songs by Artist</h2>

<?php require "templates/footer.php"; ?>