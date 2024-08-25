<?php

  $type = (isset($_GET['t'])) ? $_GET['t'] : 'title';
  $letter = (isset($_GET['l'])) ? $_GET['l'] : null;
  $vocals = (isset($_GET['v'])) ? $_GET['v'] : null;

  $urlBuild = array(
    't' => $type,
    'v' => $vocals
  );

  $sqlStart = "SELECT title, artist, genre FROM songs ";
  $sqlEnd = "ORDER BY $type";

  switch ($letter) {
    case null:
      $letterQuery = null;
      break;
    case "123":
      $letterQuery = "WHERE $type regexp '^[0-9]+' ";
      break;
    case "spc":
      $letterQuery = "WHERE $type LIKE '.%' or $type LIKE '(%' ";
      break;
    default:
      $letterQuery = "WHERE $type LIKE '$letter%' ";
      break;
  };

  switch ($vocals) {
    case null:
      $vocalQuery = null;
      break;
    case "2pt":
      $vocalQuery = "WHERE two_part ";
      break;
    case "3pt":
      $vocalQuery = "WHERE three_part ";
      break;
  }

  $sql = $sqlStart . $letterQuery . $vocalQuery . $sqlEnd;

?>