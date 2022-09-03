<?php
include "config.php";

// Add Category Code
if (isset($_POST['add_category_btn'])) {
    $category_name = $_POST['category_name'];

    if (isset($_POST['category_status'])) {
        $category_status = '1';
    } else {
        $category_status = '0';
    }


    $sql = "INSERT INTO `categories` (name, status) VALUES ('$category_name', '$category_status')";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        $_SESSION['message'] = "Category succesfylly inserted";
        header("Location: add-category.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Something went wrong!";
        header("Location: add-category.php");
        exit(0);
    }
}

// Edit Category Code
if (isset($_POST['update_category_btn'])) {
    $category_id = $_POST['category_id'];
    $category_name = $_POST['category_name'];

    if (isset($_POST['category_status'])) {
        $category_status = '1';
    } else {
        $category_status = '0';
    }


    $sql = "UPDATE `categories` SET name = '$category_name', status = '$category_status' WHERE id = '$category_id'";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        $_SESSION['message'] = "Category succesfylly upated";
        header("Location: display-category.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Something went worng!";
        header("Location: display-category.php");
        exit(0);
    }
}