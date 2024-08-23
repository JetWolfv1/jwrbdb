<?php

/**
 * dB configuration variables
 */

$host     = "64.23.150.91";
$username = "breweb-client";
$password = "reihinost1t$";
$dbname   = "jwrbdb";
$dsn      = "mysql:host=$host;dbname=$dbname";
$options  = array(
              PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );
