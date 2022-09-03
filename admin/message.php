<?php
if (isset($_SESSION['message'])) {
?>
<div class="my-3 fs-5 p-3 alert alert-warning alert-dismissible fade show" role="alert">
    <div>
        <strong>Hey!</strong> <?= $_SESSION['message'] ?>
    </div>
    <div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
<?php
    unset($_SESSION['message']);
}
?>