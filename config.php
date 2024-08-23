<?php

/**
 * dB configuration variables
 */

$host     = "localhost";
$username = "root";
$password = "";
$dbname   = "jwrbdb";
$dsn      = "mysql:host=$host;dbname=$dbname";
$options  = array(
              PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );
