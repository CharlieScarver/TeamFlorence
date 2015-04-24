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
            <h2 id="block_title">Нова тема</h2>


            <form method="post">
                <article>
                    <label for="title">Заглавие:</label>
                    <input type="text" name="title" id="title" required="required" />
                </article>
                <article>
                    <label for="category">Категория:</label>
                    <select name="category" id="category" required="required">
                        <option selected disabled>Категория</option>
                        <option value="1">Категория 1</option>
                        <option value="2">Категория 2</option>
                        <option value="3">Категория 3</option>
                    </select>
                </article>
                <article>
                    <label for="content">Съдържание:</label>
                    <textarea name="content" id="content" required="required" ></textarea>
                </article>



                <?php

                //require_once 'recaptchalib.php';
                //$publickey = "6Lc-__YSAAAAAAK8fDz0wn2BgHakq16X5sgLXqc4";
                //echo recaptcha_get_html($publickey);

                ?>

                <input type="submit" name="register" id="submit_registration" value="Създай тема">
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


<script src="js/formMessage.js" type="text/javascript"></script>
<script>
    document.addEventListener("DOMContentLoaded", changeFieldValidationMessage)
</script>


</body>
</html>