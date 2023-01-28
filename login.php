<?php
    include_once 'header.php';
?>


    <section class="signup-form">
        
        <div class="signup-form-form">

            <h2>Login</h2>
            <form action="includes/login.inc.php" method="post">

                <input type="text" name="uid" placeholder="Email/Username...">
                <br>
                <input type="password" name="pwd" placeholder="Password...">
                <br>
                <button type="submit" name="submit">Log in</button>
            </form>

        </div>

        <?php
            if(isset($_GET["error"])) {

                if ($_GET['error'] == "emptyinput") {

                    echo "<p>Fill in all fields!</p>";
                }
                else if ($_GET["error"] == "wronglogin") {
                    echo "<p>Incorrect username or password!</p>";

                }

            }

        ?>
        
       
    </section>


<?php
    include_once 'footer.php';
?>