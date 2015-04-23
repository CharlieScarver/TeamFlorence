<?php
require_once '../includes/db_holder.php';
require_once '../includes/functions.php';
require_once '../includes/head.php';
$con = dbHolder();


if ((isset($_POST['submit']))) {
    $pl = addCat($con, $_POST);
    header("Location:  http://localhost/TeamFlorence-master/admin/categories/index.php");
}
?>


<body>       

    <div class="col-md-offset-3 container col-md-6">

        <form class="form-signin alert-info" action="http://<?php echo $_SERVER['HTTP_HOST'];?>/TeamFlorence-master/admin/categories/add.php" method="POST" role="form" enctype="multipart/form-data">
            <h2 class="form-signin-heading alert-info">Add new Category</h2>
            <input  type="text" name="cat_name" class="form-control login"  placeholder="Category name" required autofocus>

            <a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/TeamFlorence-master/admin/categories/index.php" class="btn btn-link">Back</a>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">ADD</button>
        </form>


        <h2 class="form-signin-heading alert-info text-center">All categories</h2>

        <table id="table" class="table table-hover ">
            <thead>
            <th>Name</th>

            <th>Actions</th>
            </thead>

            <?php foreach (selectAllCategories($con) as $cat) : ?>
                <tbody>
                <td><?= $cat['cat_name']; ?></td>

                <td>
                    <a class="btn btn-primary actions" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/TeamFlorence-master/admin/categories/edit.php?id=<?= $cat['cat_id'] ?>"> <span class="glyphicon glyphicon-edit"></span></a>
                    <a class="btn btn-danger actions delete" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/TeamFlorence-master/admin/categories/delete.php?id=<?= $cat['cat_id'] ?>"> <span class="glyphicon glyphicon-trash"></span></a>

                </td>

            <?php endforeach; ?>

            </tbody>
        </table>

    </div>
</body>
</html>
<?php require '../includes/footer.php'; ?>