<?php 
		if(!session_start()){
			die("Session could not be resumed!");
		}
		?>
<section>
    <h2 id="block_title">Регистрация</h2>
<!--    <p id="error_message">-->
<!--    <!--                -->
<!--        --><?php
//
//        require_once 'reg_code.php';
//
//        ?>
<!--    </p>-->


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


         <?php

         //require_once 'recaptchalib.php';
         //$publickey = "6Lc-__YSAAAAAAK8fDz0wn2BgHakq16X5sgLXqc4";
         //echo recaptcha_get_html($publickey);

         ?>

         <input type="submit" name="register" id="submit_registration" value="Регистрирай ме">
     </form>
 </section>


<script src="js/formMessage.js" type="text/javascript"></script>
<script>
    document.addEventListener("DOMContentLoaded", changeFieldValidationMessage)
</script>
