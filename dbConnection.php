<?php
$databaseHost = 'localhost';
$databaseName = 'test';
$databaseUsername = 'root';
$databasePassword = '';

// Open a new connection to the MySQL server
$mysqli = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);
