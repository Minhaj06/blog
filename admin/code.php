<?php
// Add Category Code
if (isset($_POST['add_category_btn'])) {
    $category_name = $_POST['category_name'];

    if (isset($_POST['category_status'])) {
        $category_status = '1';
    } else {
        $category_status = '0';
    }

    echo $category_name;
    echo $category_status;
}