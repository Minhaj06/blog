<?php include "message.php" ?>

<div class="card">
    <div class="card-header">
        <h4 class="float-start">All Categories</h4>
        <a class="btn btn-primary mb-2 float-end" href="add-category.php">+ Add Category</a>
    </div>
    <div class="card-body fs-5">
        <table class="table table-striped table-hover">
            <thead class="bg-dark">
                <tr>
                    <th>ID</th>
                    <th>Category Name</th>
                    <th>Category Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = mysqli_query($conn, "SELECT * FROM `categories`");

                if (mysqli_num_rows($query) > 0) {
                    foreach ($query as $row) {
                ?>

                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td>
                        <?php
                                if ($row['status'] == '1') {
                                    echo "Published";
                                } else {
                                    echo "Unpublished";
                                }
                                ?>
                    </td>
                    <td>
                        <a href="edit-category.php?id=<?= $row['id'] ?>" class="btn btn-warning">Edit</a>
                    </td>
                    <td>
                        <a href="delete-category.php?id=<?= $row['id'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>

                <?php }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>