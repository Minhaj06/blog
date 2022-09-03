<?php include "message.php" ?>

<div class="card">
    <div class="card-header">
        <h4 class="float-start">Edit Category Form</h4>
        <a class="btn btn-warning mb-2 float-end" href="display-category.php">Back</a>
    </div>
    <div class="card-body">

        <?php
        $id = $_GET['id'];

        $query = mysqli_query($conn, "SELECT * FROM `categories` WHERE id = '$id'");

        $result = mysqli_fetch_assoc($query);
        ?>

        <form action="code.php" method="POST">
            <div class="form-group">
                <label for="category_name">Category Name</label>
                <input type="text" class="form-control" id="category_name" name="category_name"
                    placeholder="Type category name" value="<?= $result['name'] ?>" required>
            </div>

            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="category_status" name="category_status"
                    <?php
                                                                                                                        $status = $result['status'];
                                                                                                                        if ($status == '1') {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                        ?>>
                <label class="form-check-label" for="category_status">
                    Category Status
                </label>
            </div>

            <input type="hidden" name="category_id" value="<?= $result['id'] ?>">
            <button class="btn btn-primary" name="update_category_btn" type="submit">Update Category</button>
        </form>
    </div>
</div>