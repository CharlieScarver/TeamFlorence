<?php
require_once '../includes/db_holder.php';
require_once '../includes/functions.php';
require_once '../includes/head.php';


if ((isset($_POST['submit']))) {


    $pl = addNews($con, $_POST);

    $last_id = $pl['last_id'];
    foreach ($_POST['tags'] as $tag) {
        addMap($con, $last_id, $tag);
    }
    header("Location: http://localhost/TeamFlorence-master/admin/news/index.php");
}
?>


<body>      

    <div class="col-md-offset-3 container col-md-6">

        <form class="form-signin alert-info" action="http://<?php echo $_SERVER['HTTP_HOST']; ?>/TeamFlorence-master/admin/news/add.php" method="POST" role="form" enctype="multipart/form-data">
            <h2 class="well form-signin-heading alert">Add News</h2>
            <input  type="text" name="title"   placeholder="News Title" class="form-control login" required autofocus>
            <textarea  type="text" name="text" class="form-control login" placeholder="Text"></textarea>
            <h4> Tags:</h4>
            <select name="tags[]" class="form-control login " multiple="multiple">
<?php foreach (selectAllCategories($con) as $cat): ?>
                    <option value="<?php echo $cat['cat_id'] ?>"><?php echo $cat['cat_name'] ?></option>
                <?php endforeach; ?>
            </select>
            <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/TeamFlorence-master/admin/news/index.php" class="btn btn-link">Back</a>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">ADD</button>
        </form>


    </div>
</body>
</html>
<?php require '../includes/footer.php'; ?>