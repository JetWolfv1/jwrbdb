<?php

/**
 * dB configuration variables
 */

$host     = "big-rock-ending";
$username = "breweb-client";
$password = "reihinost1t$";
$dbname   = "jwrbdb";
$dsn      = "mysql:host=$host;dbname=$dbname";
$options  = array(
              PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );
