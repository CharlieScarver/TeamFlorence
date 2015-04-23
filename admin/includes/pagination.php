
<div class="container text-center" id="pagination">
        <ul class="pagination">

            <?php if ($_GET['page'] > 1): ?>
                <li><a href="?page=<?= $_GET['page'] - 1; ?>&perPage=<?= $per_page; ?>">&laquo;</a></li>
            <?php else: ?>
                <li class="disabled"><a>&laquo;</a></li>
            <?php endif ?>


            <?php for ($i = 1; $i < $total_pages + 1; $i++): ?>
                <li><a href="?page=<?= $i; ?>&perPage=<?= $per_page; ?>"><?= $i ?></a></li>
            <?php endfor; ?>


            <?php if ($_GET['page'] != $total_pages): ?>            
                <li><a href="?page=<?= $_GET['page'] + 1; ?>&perPage=<?= $per_page; ?>">&raquo;</a></li>
            <?php else: ?>
                <li class="disabled"><a>&raquo;</a></li>
                <?php endif; ?>

        </ul>
    </div>

