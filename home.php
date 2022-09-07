<?php
    require "header.php";
?>

    <main>
        <div class="wrapper-main">
            <section class="section-default">
            <h1>Dashboard</h1>

                <?php 
                    if(isset($_SESSION['userId'])){
                        echo '<p class="login-status">You are logged in!</p>';
                    } //else {
                        //echo '<p class="login-status">You are logged out!</p>';
                    //} //remove else statement 
                
                ?>


                <?php 

                    //INSERT SELECT SQL HERE 
                    //$record = require "create.inc.php";
                    if(true){
                        echo "<table>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Notes</th>
                                <th>Operations</th>
                            </tr>

                            <?php
                                require_once 'dbh.inc.php';
                                $count = 1;
                                $query = 'SELECT * FROM contacts ORDER BY first_name';
                                $result = mysql_query($query);
                                
                                while($row = @mysql_fetch_assoc($result)){
                            ?>
                            
                            <tr>
                                <td><?php echo $count;?></td>
                                <td><?php echo $row["first_name"];?></td>
                                <td><?php echo $row["last_name"];?></td>


                            </tr>

                        </table>";
                    } else {
                        echo "<p class='login-status'>You currently have no records</p>"; //change styling 
                    }
                ?>


            </section>
        </div>
    </main>

<?php
    require "footer.php";
?>