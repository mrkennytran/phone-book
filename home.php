<?php
    require "header.php";
?>

    <main>
        <div class="wrapper-main">
            <section class="section-default">
                <?php 
                    if(isset($_SESSION['userId'])){
                        echo '<p class="login-status">You are logged in!</p>';
                    } //else {
                        //echo '<p class="login-status">You are logged out!</p>';
                    //} //remove else statement 

                    if(true){
                        echo "<p>You currently have no records</p>";
                    } else {
                        
                    }
                ?>
            </section>
        </div>
    </main>

<?php
    require "footer.php";
?>