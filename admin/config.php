<?php
session_start();

$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = "";
$dbname = 'blog';

$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

if (!$conn) {
    echo '<h2>Database Connection Failure</h2>';
    die();
}