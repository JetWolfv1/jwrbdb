<?php

/**
 * dB configuration variables
 */

$host     = "dolphin-app-ql8i3.ondigitalocean.app";
$username = "breweb-client";
$password = "reihinost1t$";
$dbname   = "jwrbdb";
$dsn      = "mysql:host=$host;dbname=$dbname";
$options  = array(
              PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );
