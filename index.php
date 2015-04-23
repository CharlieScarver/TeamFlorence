<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Photography Addicted</title>
    <link rel="stylesheet" type="text/css" href="styles/CSS-Reset.css">
    <link rel="stylesheet" type="text/css" href="styles/Style.css">
    <link rel="stylesheet" type="text/css" href="styles/style_home.css">
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
            <article class="login">
                <a href="login.php"><p>Вход

                    <p></a>
                <a href="register.php"><p>Регистрация

                    <p></a>
            </article>
            <article class="categories">
                <h2>Категории</h2>
                <a href="#">Категория 1</a>
                <a href="#">Категория 2</a>
                <a href="#">Категория 3</a>
                <a href="#">Категория 4</a>
                <a href="#">Категория 5</a>
                <a href="#">Категория 6</a>
                <a href="#">Категория 7</a>
                <a href="#">Категория 8</a>
                <a href="#">Категория 9</a>
                <a href="#">Категория 10</a>
            </article>
        </aside>

        <?php
		if(isset($_GET['page'])) {

			switch ($_GET['page']) {
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