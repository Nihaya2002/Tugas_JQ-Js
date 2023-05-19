<?php
include_once("koneksi3.php");

$id = $_GET["id"];

$result = mysqli_query($koneksi, "DELETE FROM customer WHERE id='$id';");

error_reporting(E_ALL);
ini_set('display_errors', 1);

header("Location:index3.php");
?>