<?php

if ($result && $statement->rowcount() > 0) { ?>

  <h4>Results</h4>

  <table>
    <thead>
      <tr>
        <th>Title</th>
        <th>Artist</th>
        <!-- <th>Year</th> -->
        <th>Genre</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($result as $row) { ?>
        <tr>
          <td><?php echo escape($row["title"]); ?></td>
          <td><?php echo escape($row["artist"]); ?></td>
          <!-- <td><?php // echo escape($row["year"]); ?></td> -->
          <td><?php echo escape($row["genre"]); ?></td>
        </tr>
        <?php } ?>
    </tbody>
  </table>
  <?php } else { ?>
    <h1>UH OH</h1>
    <?php
  } ?>