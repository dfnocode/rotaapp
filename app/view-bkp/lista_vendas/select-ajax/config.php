<?php

$host = "localhost:10040"; /* Host name */
$user = "root"; /* User */
$password = "root"; /* Password */
$dbname = "tutorial"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}