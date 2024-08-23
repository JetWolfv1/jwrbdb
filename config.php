<?php

/**
 * dB configuration variables
 */

$host     = "localhost";
$username = "jetwolf";
$password = "9909-stratos-SQ";
$dbname   = "jwrbdb";
$dsn      = "mysql:host=$host;dbname=$dbname";
$options  = array(
              PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );
