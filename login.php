<!-- Insert html and php  -->

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="This is an example of a meta description. This will often show up in search results.">
        <link rel="stylesheet" href="style.css">
        <title>Phone Book: Sign-In</title>

    </head>

    <main>
        <div class="wrapper-main">
            <section class="section-default">
                <h1>Sign-In</h1>
                <?php
                    if(isset($_SESSION['userId'])){
                        echo '<form action="includes/logout.inc.php" method="post">
                        <button type="submit" name="logout-submit">Logout</button>
                        </form>';
                    } else {
                        //CREATE AN INCLUDES FOLDER IN MAIN LOGIN PROJECT FOLDER
                        echo '<form class="form-signup" action="includes/login.inc.php" method="post">
                        <input type="text" name="mailuid" placeholder="UserName/E-mail">
                        <input type="password" name="pwd" placeholder="Password">
                        <button type="submit" name="login-submit">Login</button>
                    </form>';
                    }
                ?>

                <p class="home-switchentry">Don't have an account? Click <a href="signup.php">Here</a>.</p>

            </section>
        </div>
    </main>

    <?php
        require "footer.php";
    ?>

</html>