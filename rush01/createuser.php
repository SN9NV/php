<?php
include "php/create.php"
?>

<div class="login-form red">
    <div class="form-cont">
        <form action="createuser.php" method="post" class="log-form">
            <h6>Create Account:</h6>
            <input class="field" type="text" name="login" placeholder="username">
            <br/>
            <br/>
            <input class="field" type="password" name="passwd" placeholder="password">
            <br/>
            <br/>
            <input class="button" type="submit" name="submit" value="OK">
            <?php
            if (isset($_SESSION['login_message'])) {
                echo "<br>" . $_SESSION['login_message'] . "";
            }
            ?>
        </form>
    </div>
</div>
