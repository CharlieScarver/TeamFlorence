<?php
require_once '../includes/db_holder.php';
require_once '../includes/functions.php';
require '../includes/head.php';
require '../includes/header.php';
?>
<?php if (selectAllNews($con) == null): ?>
    <h1 class="alert-warning">They are no news</h1>
<?php else: ?>
    <?php
    $per_page = 20;

    $all_categories = countCats($con)[0]["COUNT(cat_id)"];

    if (!isset($_GET['page'])) {
        $_GET['page'] = 1;
    }
    if (isset($_GET['perPage'])) {
        $per_page = $_GET['perPage'];
    } else {
        $_GET['perPage'] = $per_page;
    }

    $show_page = $_GET['page'];
    $start = ($show_page - 1) * $per_page;
    $end = $start + $per_page;
    $total_pages = ceil($all_categories / $per_page);
    ?>   

    <div class="container well">
        <div class="navbar-header">           
            <a class="navbar-category" href="index.php">All categories</a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
            <ul class="nav navbar-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-sort-by-order"></span><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="?page=1&perPage=30">By 30</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="?page=1&perPage=50">By 50</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="?page=1&perPage=100">By 100</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="?page=1&perPage=<?= $all_categories ?>">Show all</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>  
    <table id="table" class="table table-hover">
        <thead>
        <th>Title</th>
        <th>Date added</th>
        <th>Tags</th>
        <th>Actions</th>
    </thead>
    <?php foreach (selectNewsByPage($con, $start, $per_page) as $news) : ?>
        <tbody>
        <td><?= $news['title']; ?></td>
        <td><?= $news['date']; ?></td>
        <td>
             <select  class="form-control login ">
                 <option disabled>Click to view tags</option> 
            <?php foreach (selectTagsByNewsId($con, $news['id']) as $cat): ?>
        <option  disabled value="<?php echo $cat['cat_name'] ?>"><?php echo $cat['cat_name'] ?></option> 
            <?php endforeach; ?>
             </select>
        </td>

        <td>
            <a class="btn btn-primary actions" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/TeamFlorence-master/admin/news/edit.php?id=<?= $news['id'] ?>"> <span class="glyphicon glyphicon-edit"></span></a>
            <a class="btn btn-danger actions delete" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/TeamFlorence-master/admin/news/delete.php?id=<?= $news['id'] ?>"> <span class="glyphicon glyphicon-trash"></span></a>

        </td>

    <?php endforeach; ?>

    </tbody>
    </table>
    </div>
<?php endif; ?>

<?php require '../includes/footer.php'; ?>
<?php require_once '../includes/pagination.php'; ?>