<?php

/**
 * Function to query db for songs by title
 */


  $sql = "SELECT * FROM songs ORDER BY title";
} else {
  $alpha = $_GET['l'];



  if($alpha == "123") {
    $sql = "SELECT * FROM songs WHERE title regexp '^[0-9]+' ORDER BY title";
  } else if($alpha == "spc") {
    $sql = "SELECT * FROM songs WHERE title LIKE '.%' or title LIKE '(%' ORDER BY title";
  } else {
    $sql = "SELECT * FROM songs WHERE title LIKE '$alpha%' ORDER BY title";
  }
};
  
try {
  require "config.php";
  require "common.php";
  
  $connection = new PDO($dsn, $username, $password, $options);
  
  $statement = $connection->prepare($sql);
  $statement->execute();

  $result = $statement->fetchAll();
} catch(PDOException $error) {
  echo $sql . "<br />" . $error->getMessage();
}
?>


<?php require "header.php"; ?>

<div class="d-flex justify-content-between filter-bar">
  <div class="filter-alpha">
    <div class="d-flex p-2">
      Song Titles, sort:
    </div>

    <div class="d-flex flex-row mb3">
      <div class="p-2"><a href="title.php">All</a></div>
      <div class="p-2"><a href="title.php?a=a">A</a></div>
      <div class="p-2"><a href="title.php?a=b">B</a></div>
      <div class="p-2"><a href="title.php?a=c">C</a></div>
      <div class="p-2"><a href="title.php?a=d">D</a></div>
      <div class="p-2"><a href="title.php?a=e">E</a></div>
      <div class="p-2"><a href="title.php?a=f">F</a></div>
      <div class="p-2"><a href="title.php?a=g">G</a></div>
      <div class="p-2"><a href="title.php?a=h">H</a></div>
      <div class="p-2"><a href="title.php?a=i">I</a></div>
      <div class="p-2"><a href="title.php?a=j">J</a></div>
      <div class="p-2"><a href="title.php?a=k">K</a></div>
      <div class="p-2"><a href="title.php?a=l">L</a></div>
      <div class="p-2"><a href="title.php?a=m">M</a></div>
      <div class="p-2"><a href="title.php?a=n">N</a></div>
      <div class="p-2"><a href="title.php?a=o">O</a></div>
      <div class="p-2"><a href="title.php?a=p">P</a></div>
      <div class="p-2"><a href="title.php?a=q">Q</a></div>
      <div class="p-2"><a href="title.php?a=r">R</a></div>
      <div class="p-2"><a href="title.php?a=s">S</a></div>
      <div class="p-2"><a href="title.php?a=t">T</a></div>
      <div class="p-2"><a href="title.php?a=u">U</a></div>
      <div class="p-2"><a href="title.php?a=v">V</a></div>
      <div class="p-2"><a href="title.php?a=w">W</a></div>
      <div class="p-2"><a href="title.php?a=x">X</a></div>
      <div class="p-2"><a href="title.php?a=y">Y</a></div>
      <div class="p-2"><a href="title.php?a=z">Z</a></div>
      <div class="p-2"><a href="title.php?a=123">123</a></div>
      <div class="p-2"><a href="title.php?a=spc">!@#</a></div>
    </div>
  </div>
  <div class="filter-vocal">
    <div class="d-flex p-2">
      Vocals filter:
    </div>
    <div class="d-flex flex-row mb3">
      <div class="p-2"><a href="title.php?v=2pt">Two-part</a></div>
      <div class="p-2"><a href="title.php?v=3pt">Three-part</a></div>
    </div>
  </div>
</div>


<?php require "results-table.php"; ?>

<?php require "footer.php"; ?>