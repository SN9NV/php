<div class="login-form blue">
    <div class="form-cont">
        <form action="php/login.php" method="post" class="log-form" onsubmit="return submitForm(this)">
            <h6>Enter Your Details:</h6>
			<div class="welcome"></div>
            <input class="field" type="text" name="login" placeholder="username">
            <br/>
            <br/>
            <input class="field" type="password" name="passwd" placeholder="password">
            <br/>
            <br/>
            <input class="button" type="submit" name="submit" value="OK">
            <?php
            if (isset($_SESSION['login_message'])) {
                echo "<br/>" . $_SESSION['login_message'] . "<br/>\n";
            }
            ?>
            <a class="cr-acc" href="createuser.php"><h6 class="create-acc">No Account? Click Here To Create One</h6></a>
        </form>
    </div>
</div>