<section>
    <h2 id="block_title">Вход</h2>


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

<script src="js/formMessage.js" type="text/javascript"></script>
<script>
    document.addEventListener("DOMContentLoaded", changeFieldValidationMessage)
</script>



