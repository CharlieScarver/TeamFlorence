<!DOCTYPE html>
<html>
<<<<<<< HEAD

	<head>
		<title> Register </title>
		<meta charset="UTF-8">

		<?php 
		if(session_start())
			;
		else
			die("Session could not be resumed!");
		
		?>


	</head>

	<body>


		<br>

		<div id="main_block" >
			<p id="block_title">
				Register New User
			</p>

			<br/>
			<p id="error_message">
				<?php 
				require 'reg_code.php';
				?>
			</p>
			<br/>
			
			<form method="post">
				<label for="username">Username:</label>
				<input type="text" name="username" maxlength="50" required="required" class="non_submit_input" /><br/>
				<label for="password">Password:</label>
				<input type="password" name="password" maxlength="20" required="required" class="non_submit_input" /><br/>
				<label for="realname">Real name:</label>
				<input type="text" name="realname" maxlength="50" required="required" class="non_submit_input" /><br/>
				<label for="email">Email:</label>
				<input type="email" name="email" maxlength="50" required="required" class="non_submit_input" /><br/>
				<br/>
				<label for="squestion">Secret Question:</label>
				<input id="squestion" name="squestion" maxlength="50" type="text" class="non_submit_input" /><br>
				<label for="sanswer">Secret Answer:</label>
				<input id="sanswer" name="sanswer" maxlength="50" type="text" class="non_submit_input" /><br>
				<?php

				//require_once 'recaptchalib.php';
				//$publickey = "6Lc-__YSAAAAAAK8fDz0wn2BgHakq16X5sgLXqc4";
				//echo recaptcha_get_html($publickey);

				?>	
				<br/>
				<input type="submit" name="register" id="submit_registration" value="Register User">
			</form>


			<p id="block_footer">
				Created on 20.04.2015, 02:39 AM<br>
					by CharlieScarver
			</p>
		</div>

	</body>

</html>
=======
<head>
    <meta charset="UTF-8" />
    <title>Pretty Website</title>
    <link rel="stylesheet" type="text/css" href="styles/CSS-Reset.css">
    <link rel="stylesheet" type="text/css" href="styles/Style.css">
    <link rel="stylesheet" type="text/css" href="styles/style_register.css">
    <link href='http://fonts.googleapis.com/css?family=Lobster+Two:700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lobster&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="wrapper">
    <header>
        <h1><a href="index.html">Photography Addicted</a></h1>
        <nav>
            <ul>
                <li><a href="#">Форум</a></li><!--
                 --><li><a href="#">Албуми</a></li><!--
                 --><li><a href="#">Конкурси</a></li><!--
                 --><li><a href="#">Новини</a></li><!--
                 --><li><a href="#">Потребители</a></li>
            </ul>
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
            <h2 id="block_title">Регистрация</h2>
            <p id="error_message">
            <!--                -->
                <?php
                
                require_once 'reg_code.php';
                
                ?>
            </p>


            <form method="post">
                <article>
                    <label for="username">Потребителско име<span>*</span>:</label>
                    <input type="text" name="username" id="username" maxlength="50" required="required" class="non_submit_input" />
                </article>
                <article>
                    <label for="password">Парола<span>*</span>:</label>
                    <input type="password" name="password" id="password" maxlength="20" required="required" class="non_submit_input" />
                </article>
                <article>
                    <label for="passwordValidation">Повтори паролата<span>*</span>:</label>
                    <input type="password" name="passwordValidation" id="passwordValidation" maxlength="20" required="required" class="non_submit_input" />
                </article>
                <article>
                    <label for="realName">Име и фамилия<span>*</span>:</label>
                    <input type="text" name="realName" id="realName" maxlength="60" required="required" class="non_submit_input" />
                </article>
                <article>
                    <label for="gender">Пол<span>*</span>:</label>
                    <select name="gender" id="gender" required="required">
                        <option value="1">Мъж</option>
                        <option value="2">Жена</option>
                        <option value="3">Друг</option>
                    </select>
                </article>
                <article>
                    <label for="age">Възраст<span>*</span>:</label>
                    <input type="number" name="age" id="age" min="1" required="required">
                </article>
                <article>
                    <label for="email">Email<span>*</span>:</label>
                    <input type="email" name="email" id="email" maxlength="50" required="required" class="non_submit_input"
                           pattern="[a-zA-Z0-9-_\.]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]+" title="Невалиден email"/>
                </article>
                <article class="break">
                    <label for="secretQuestion">Таен въпрос:</label>
                    <input type="text" id="secretQuestion" name="secretQuestion" class="non_submit_input" />
                </article>
                <article>
                    <label for="secretAnswer">Таен отговор:</label>
                    <input type="text" id="secretAnswer" name="secretAnswer" maxlength="20" class="non_submit_input" />
                </article>

                <!--<script src="scripts/formMessage.js" type="javascript"></script>-->
                <!--The script above (a message for the required fields in cyrillic) as external file doesn't work. No idea why!-->
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        var elements = document.getElementsByTagName("INPUT");
                        for (var i = 0; i < elements.length; i++) {
                            elements[i].oninvalid = function(e) {
                                e.target.setCustomValidity("");
                                if (!e.target.validity.valid) {
                                    e.target.setCustomValidity("Полето е задължително");
                                }
                            };
                            elements[i].oninput = function(e) {
                                e.target.setCustomValidity("");
                            };
                        }
                    })
                </script>

                <?php

                //require_once 'recaptchalib.php';
                //$publickey = "6Lc-__YSAAAAAAK8fDz0wn2BgHakq16X5sgLXqc4";
                //echo recaptcha_get_html($publickey);

                ?>

                <input type="submit" name="register" id="submit_registration" value="Регистрирай ме">
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
</body>
</html>
>>>>>>> 49715e746a045795f1a6b896ad443167f49d2370
