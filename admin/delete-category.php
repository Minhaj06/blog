<?php
include_once "config.php";

$id = $_GET['id'];

$query = mysqli_query($conn, "DELETE FROM `categories` WHERE id = '$id'");

if ($query) {
    $_SESSION['message'] = "Category successfylly deleted";
    header("Location: display-category.php");
} else {
    $_SESSION['message'] = "Something went wrong!";
    header("Location: display-category.php");
}