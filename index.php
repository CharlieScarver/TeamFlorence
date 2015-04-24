<?php
require_once 'admin/includes/db_holder.php';
$con = dbHolder();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Photography Addicted</title>
    <link rel="stylesheet" type="text/css" href="styles/CSS-Reset.css">
    <link rel="stylesheet" type="text/css" href="styles/Style.css">
    <link rel="stylesheet" type="text/css" href="styles/style_home.css">
    <link rel="stylesheet" type="text/css" href="styles/style_register.css">
    <link href='http://fonts.googleapis.com/css?family=Lobster+Two:700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lobster&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="wrapper">
    <header>
        <h1><a href="index.PHP">Photography Addicted</a></h1>
        <nav>
            <form method="get" id="menu">
                <input type="submit" name="page" value="Форум"/><!--
                --><input type="submit" name="page" value="Албуми"/><!--
                --><input type="submit" name="page" value="Конкурси"/><!--
                --><input type="submit" name="page" value="Новини"/><!--
                --><input type="submit" name="page" value="Потребители"/>
            </form>
        </nav>
    </header>

    <main>

        <aside>
            <form method="get" id="login">
                <input type="submit" name="page" value="Вход"/>
                <input type="submit" name="page" value="Регистрация"/>
            </form>

            <article class="categories">
                <h2>Категории</h2>
                <?php foreach (selectAllCategories($con) as $cat):; ?>
                    <a href="#"><p><?php echo $cat['cat_name']; ?><p></a>
                <?php endforeach; ?>
            </article>
        </aside>

        <?php
        if (isset($_GET['page'])) {

            switch ($_GET['page']) {
                case 'Вход':
                    require_once 'login.php';
                    break;
                case 'Регистрация':
                    require_once 'register.php';
                    break;
                case 'Албуми':
                    require_once 'Gallery/gallery.php';
                    break;
                case 'Конкурси':
                    require_once 'About/about.php';
                    break;
                case 'Новини':
                    require_once 'Thanks/thanks.php';
                    break;
                case 'Потребители':
                    require_once 'Thanks/thanks.php';
                    break;
                case 'Форум':
                default:
                    require_once 'home.php';
                    break;
            }
        } else {
            require_once 'home.php';
        }
        ?>


        <aside class="photos">
            <h2>Последно от Албуми</h2>

            <div>
                <a href="#">
                    <img>Img 1...</img>
                    <p>Автор

                    <p>
                </a>
            </div>
            <div>
                <a href="#">
                    <img>Img 2...</img>
                    <p>Автор

                    <p>
                </a>
            </div>
            <div>
                <a href="#">
                    <img>Img 3...</img>
                    <p>Автор

                    <p>
                </a>
            </div>
            <div>
                <a href="#">
                    <img>Img 4...</img>
                    <p>Автор

                    <p>
                </a>
            </div>
            <div>
                <a href="#">
                    <img>Img 5...</img>
                    <p>Автор

                    <p>
                </a>
            </div>
        </aside>
    </main>

    <footer>
        <p>Some text, eventually</p>
    </footer>
</div>
</body>
</html>
