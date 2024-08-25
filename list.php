<?php

require "config.php";
require "common.php";
require "scripts.php";

try {
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
  <div class="filter-letter">
    <div class="d-flex p-2">

      <?php
        switch ($type) {
          case "title":
            echo "Song Titles, sort:";
            break;
          case "artist":
            echo "Artist, sort:";
            break;
          case "genre":
            echo "Genre, sort:";
            break;
        };
      ?>

    </div>

    <div class="d-flex flex-row mb3">
      <div class="p-2"><?php echo '<a href="list.php?' . http_build_query($urlBuild) . '">All</a>'
        ?>
      </div>      
      <div class="p-2">
        <?php echo '<a href="list.php?l=a&' . http_build_query($urlBuild) . '">A</a>'
        ?>
      </div>
      <div class="p-2">
        <?php echo '<a href="list.php?l=b&' . http_build_query($urlBuild) . '">B</a>'
        ?>
      </div>
      <div class="p-2">
        <?php echo '<a href="list.php?l=c&' . http_build_query($urlBuild) . '">C</a>'
        ?>
      </div>
      <div class="p-2">
        <?php echo '<a href="list.php?l=d&' . http_build_query($urlBuild) . '">D</a>'
        ?>
      </div>
      <div class="p-2">
        <?php echo '<a href="list.php?l=e&' . http_build_query($urlBuild) . '">E</a>'
        ?>
      </div>
      <div class="p-2">
        <?php echo '<a href="list.php?l=f&' . http_build_query($urlBuild) . '">F</a>'
        ?>
      </div>
      <div class="p-2">
        <?php echo '<a href="list.php?l=g&' . http_build_query($urlBuild) . '">G</a>'
        ?>
      </div>
      <div class="p-2">
        <?php echo '<a href="list.php?l=h&' . http_build_query($urlBuild) . '">H</a>'
        ?>
      </div>
      <div class="p-2">
        <?php echo '<a href="list.php?l=i&' . http_build_query($urlBuild) . '">I</a>'
        ?>
      </div>
      <div class="p-2">
        <?php echo '<a href="list.php?l=j&' . http_build_query($urlBuild) . '">J</a>'
        ?>
      </div>
      <div class="p-2">
        <?php echo '<a href="list.php?l=k&' . http_build_query($urlBuild) . '">K</a>'
        ?>
      </div>
      <div class="p-2">
        <?php echo '<a href="list.php?l=l&' . http_build_query($urlBuild) . '">L</a>'
        ?>
      </div>
      <div class="p-2">
        <?php echo '<a href="list.php?l=m&' . http_build_query($urlBuild) . '">M</a>'
        ?>
      </div>
      <div class="p-2">
        <?php echo '<a href="list.php?l=n&' . http_build_query($urlBuild) . '">N</a>'
        ?>
      </div>
      <div class="p-2">
        <?php echo '<a href="list.php?l=o&' . http_build_query($urlBuild) . '">O</a>'
        ?>
      </div>
      <div class="p-2">
        <?php echo '<a href="list.php?l=p&' . http_build_query($urlBuild) . '">P</a>'
        ?>
      </div>
      <div class="p-2">
        <?php echo '<a href="list.php?l=q&' . http_build_query($urlBuild) . '">Q</a>'
        ?>
      </div>
      <div class="p-2">
        <?php echo '<a href="list.php?l=r&' . http_build_query($urlBuild) . '">R</a>'
        ?>
      </div>
      <div class="p-2">
        <?php echo '<a href="list.php?l=s&' . http_build_query($urlBuild) . '">S</a>'
        ?>
      </div>
      <div class="p-2">
        <?php echo '<a href="list.php?l=t&' . http_build_query($urlBuild) . '">T</a>'
        ?>
      </div>
      <div class="p-2">
        <?php echo '<a href="list.php?l=u&' . http_build_query($urlBuild) . '">U</a>'
        ?>
      </div>
      <div class="p-2">
        <?php echo '<a href="list.php?l=v&' . http_build_query($urlBuild) . '">V</a>'
        ?>
      </div>
      <div class="p-2">
        <?php echo '<a href="list.php?l=w&' . http_build_query($urlBuild) . '">W</a>'
        ?>
      </div>
      <div class="p-2">
        <?php echo '<a href="list.php?l=x&' . http_build_query($urlBuild) . '">X</a>'
        ?>
      </div>
      <div class="p-2">
        <?php echo '<a href="list.php?l=y&' . http_build_query($urlBuild) . '">Y</a>'
        ?>
      </div>
      <div class="p-2">
        <?php echo '<a href="list.php?l=z&' . http_build_query($urlBuild) . '">Z</a>'
        ?>
      </div>
      <div class="p-2">
        <?php echo '<a href="list.php?l=123&' . http_build_query($urlBuild) . '">123</a>'
        ?>
      </div>
      <div class="p-2">
        <?php echo '<a href="list.php?l=spc&' . http_build_query($urlBuild) . '">!@#</a>'
        ?>
      </div>
    </div>
  </div>
  <div class="filter-vocal">
    <div class="d-flex p-2">
      Vocals filter:
    </div>
    <div class="d-flex flex-row mb3">
      <div class="p-2">
        <a href="list.php?v=2pt">Two-part</a>
      </div>
      <div class="p-2">
        <a href="list.php?v=3pt">Three-part</a>
      </div>
    </div>
  </div>
</div>

<?php require "results-table.php"; ?>

<?php require "footer.php"; ?>