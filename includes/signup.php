<?php
    require "header.php";
?>

    <main>
        <div class="wrapper-main">
            <section class="section-default">
                <h1>Register</h1>
                <form action="signup.inc.php" method="post"> <!--class="form-signup"-->
                    <input type="text" name="uid" placeholder="Username">    
                    <input type="text" name="mail" placeholder="E-mail">    
                    <input type="password" name="pwd" placeholder="Password">    
                    <input type="password" name="pwd-repeat" placeholder="Repeat password">    
                    <button type="submit" name="signup-submit">Sign Up</button>
                </form>
                <p>Already have an account? Login here</p>
            </section>
        </div>
    </main>

<?php
    require "footer.php";
?>