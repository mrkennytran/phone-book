<!-- Insert html and php  -->

<<html>
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
                    if(isset($_GET["error"])){
                        if($_GET["error"] == "emptyfields"){
                            echo '<p class="signuperror">Fill in all fields!</p>';

                        } else if($_GET["error"] == "invaliduidmail"){
                            echo '<p class="signuperror">Invalid username and e-mail!</p>';

                        } else if($_GET["error"] == "invaliduid"){
                            echo '<p class="signuperror">Invalid username!</p>';

                        } else if($_GET["error"] == "invalidmail"){
                            echo '<p class="signuperror">Invalid e-mail!</p>';

                        }else if($_GET["error"] == "passwordcheck"){
                            echo '<p class="signuperror">Your passwords do not match!</p>';

                        }else if($_GET["error"] == "usertaken"){
                            echo '<p class="signuperror">Username is already taken!</p>';
                        }
                    } else if(isset($_GET["signup"])){
                        echo '<p class="signupsuccess">Signup successful!</p>';
                    }
                ?>
                <form class="form-signup" action="includes/signup.inc.php" method="post"> 
                    <input type="text" name="uid" placeholder="Username">    
                    <input type="password" name="pwd" placeholder="Password">    
                    <button type="submit" name="signup-submit">Sign in</button> <!-- signup button here --> 
                </form>

            </section>
        </div>
    </main>

    <?php
        require "footer.php";
    ?>

</html>