<?php

// $type = (isset($_GET['t'])) ? $_GET['t'] : null;
$type = "title";
$letter = null;
$filter = null;
// $letter = (isset($_GET['l'])) ? $_GET['l'] : null;
// $filter = (isset($_GET['f'])) ? $_GET['f'] : null;


// echo "type $type, letter $letter, filter $filter";

// $letterQuery = null;

if(!$letterQuery && !$vocalQuery) {
  $sqlWhere = null;
  $sqlAnd = null;
} elseif ((!$letterQuery && $vocalQuery) || ($letterQuery && !$vocalQuery)) {
  $sqlAnd = null;
};

echo "sqlWhere $sqlWhere, sqlAnd $sqlAnd";

// $filter2 = 

$sqlStart = "SELECT title, artist, genre FROM songs ";

$sqlEnd = "ORDER BY $type";

// $sql = $sqlStart . $filterQuery . $sqlEnd;

// echo $sql;



?>