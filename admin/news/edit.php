<?php
require_once '../includes/db_holder.php';
require_once '../includes/functions.php';
require_once '../includes/head.php';
$con = dbHolder();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    header("Location:  http://localhost/TeamFlorence-master/admin/news/index.php");
}

if (isset($_POST) && sizeof($_POST) > 0) {
    deleteMap($con, $id);
    editNews($con, $_POST);

   
    foreach ($_POST['tags'] as $tag) {
        addMap($con, $id, $tag);
    }
    header("Location:  http://localhost/TeamFlorence-master/admin/news/index.php");
}
?> <br>
<form class="form-signin" action="http://<?php echo $_SERVER['HTTP_HOST']; ?>/TeamFlorence-master/admin/news/edit.php?id=<?= $id; ?>" method="POST" role="form"> 
    <div class="col-md-offset-3 container col-md-6 well">


        <?php foreach (getNewsId($con, $id) as $news) : ?>   

            <h2 class="form-signin-heading alert-info">Edit <?= $news['title']; ?></h2>
            <input value="<?= $news['title']; ?>" type="text" name="title" class="form-control login"  placeholder=" name" required autofocus>
            <textarea  type="text" name="text" class="form-control login" placeholder="Text"><?= $news['text']; ?></textarea>
            <h4> Tags:</h4>

            <?php foreach (selectTagsByNewsId($con, $id) as $i => $cat): ?>
                <a href=""> <?php echo $cat['cat_name']; ?></a>
            <?php endforeach; ?>

        <?php endforeach; ?>
        <h4>Add Tags:</h4>
        <select name="tags[]" class="form-control login " multiple="multiple">
            <?php foreach (selectAllCategories($con) as $cat): ?>
                <option value="<?php echo $cat['cat_id'] ?>"><?php echo $cat['cat_name'] ?></option>
            <?php endforeach; ?>
        </select>
        <div class="row col-md-offset-5">
            <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/TeamFlorence-master/admin/news/index.php" class="btn btn-link">Back</a>
            <button class="btn btn-lg btn-primary" type="submit">Save changes</button>
        </div>
    </div>



</form>
<?php require '../includes/footer.php'; ?> 