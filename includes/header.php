<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="This is an example of a meta description. This will often show up in search results.">
        <title></title>
        <!--<link rel="stylesheet" href="style.css"--> 

    </head>
    <body>
        <header>
            <nav>
                <a href="#">
                    <!--add img tag here-->
                </a>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">About Me</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <form action="includes/login.inc.php" method="post">
                    <!--CREATE AN INCLUDES FOLDER IN MAIN LOGIN PROJECT FOLDER-->
                    <input type="text" name="mailuid" placeholder="UserName/E-mail...">
                    <input type="password" name="pwd" placeholder="Password...">
                    <button type="submit" name="login-submit">Login</button>
                </form>
                <a href="signup.php">Signup</a>

                <form action="includes/logout.inc.php" method="post">
                    <button type="submit" name="logout-submit">Logout</button>
                </form>
            </nav>

        </header>


