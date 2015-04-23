<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Photography Addicted</title>
    <link rel="stylesheet" type="text/css" href="styles/CSS-Reset.css">
    <link rel="stylesheet" type="text/css" href="styles/Style.css">
    <link rel="stylesheet" type="text/css" href="styles/style_register.css">
    <link href='http://fonts.googleapis.com/css?family=Lobster+Two:700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lobster&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="wrapper">
    <header>
        <h1><a href="index.php">Photography Addicted</a></h1>
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
                <a href="login.php"><p>Вход<p></a>
                <a href="register.php"><p>Регистрация<p></a>
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


        <section>
            <h2 id="block_title">Вход</h2>
<!--            <p id="error_message">-->
<!--                --><?php
//				require 'reg_code.php';
//				?>
<!--            </p>-->


            <form method="post">
                <article>
                    <label for="username">Потребителско име:</label>
                    <input type="text" name="username" id="username" maxlength="50" required="required" class="non_submit_input" />
                </article>
                <article>
                    <label for="password">Парола:</label>
                    <input type="password" name="password" id="password" maxlength="20" required="required" class="non_submit_input" />
                </article>
                <a href="#">Забравена парола</a>

                <input type="submit" name="register" id="submit_registration" value="Вход">
            </form>
        </section>



        <aside class="photos">
            <h2>Последно от Албуми</h2>
            <div>
                <a href="#">
                    <img>Img 1...</img>
                    <p>Автор<p>
                </a>
            </div>
            <div>
                <a href="#">
                    <img>Img 2...</img>
                    <p>Автор<p>
                </a>
            </div>
            <div>
                <a href="#">
                    <img>Img 3...</img>
                    <p>Автор<p>
                </a>
            </div>
            <div>
                <a href="#">
                    <img>Img 4...</img>
                    <p>Автор<p>
                </a>
            </div>
            <div>
                <a href="#">
                    <img>Img 5...</img>
                    <p>Автор<p>
                </a>
            </div>
        </aside>
    </main>

    <footer>
        <p>Some text, eventually</p>
    </footer>
</div>

<script src="scripts/formMessage.js" type="text/javascript"></script>
<script>
    document.addEventListener("DOMContentLoaded", changeFieldValidationMessage)
</script>

</body>
</html>