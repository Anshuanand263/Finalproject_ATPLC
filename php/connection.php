<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "foodexpress";

// Create a database connection
$con = mysqli_connect($server, $username, $password, $db);
if ($con) {
    ?>
    <script>console.log("Connection to DB Successfull.")</script>
    <?php
} else {
    ?>
    <script>console.log("Connection to DB Failed.")</script>
    <?php
}



?>