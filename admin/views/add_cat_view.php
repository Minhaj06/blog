<?php include "message.php" ?>

<div class="card">
    <div class="card-header">
        <h4 class="float-start">Add Category Form</h4>
        <a class="btn btn-warning mb-2 float-end" href="display-category.php">Back</a>
    </div>
    <div class="card-body">
        <form action="code.php" method="POST">
            <div class="form-group">
                <label for="category_name">Category Name</label>
                <input type="text" class="form-control" id="category_name" name="category_name"
                    placeholder="Type category name" required>
            </div>

            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="category_status" name="category_status">
                <label class="form-check-label" for="category_status">
                    Category Status
                </label>
            </div>

            <button class="btn btn-primary" name="add_category_btn" type="submit">Add Category</button>
        </form>
    </div>
</div>