<?php
require_once '../includes/db_holder.php';
require_once '../includes/functions.php';
require_once '../includes/head.php';
$con = dbHolder();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    header("Location:  http://localhost/TeamFlorence-master/admin/categories/index.php");
}

if (isset($_POST) && sizeof($_POST) > 0) {

    editCat($con, $_POST);
    header("Location:  http://localhost/TeamFlorence-master/admin/categories/index.php");
}
?> <br>
<form class="form-signin" action="http://<?php echo $_SERVER['HTTP_HOST']; ?>/TeamFlorence-master/admin/categories/edit.php?id=<?= $id; ?>" method="POST" role="form"> 
    <div class="col-md-offset-3 container col-md-6 well">


        <?php foreach (getCatId($con, $id) as $row) : ?>   

            <h2 class="form-signin-heading alert-info">Edit <?= $row['cat_name']; ?></h2>
            <input value="<?= $row['cat_name']; ?>" type="text" name="cat_name" class="form-control login"  placeholder=" name" required autofocus>

        <?php endforeach; ?>

        <div class="row col-md-offset-5">
            <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/TeamFlorence-master/admin/categories/index.php" class="btn btn-link">Back</a>
            <button class="btn btn-lg btn-primary" type="submit">Save changes</button>
        </div>
    </div>



</form>
<?php require '../includes/footer.php'; ?> 