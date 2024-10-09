<?php
$servername = "localhost";
$username = "u434134546_lu1";
$password = "K@dvc1971";
$db = "u434134546_crud";

$conn = mysqli_connect($servername, $username, $assword, $db);
if (!$conn){
    die("Connection failed; " . mysqli_connect_error());
}
?>
