    <?php
        $title = "For Loop"; 
        include "includes/header.php"
    ?>
    <title>For Loop</title>

    <h1>For Loops</h1>

    <?php
        for($count =0; $count <10; $count++){
            echo"<p>Jayawardena Agencies</p>";
        }

        for($count=0; $count <10; $count++){
            echo "<p>The Count is : $count</p>"; 
        }
    ?>
    
    <?php require "includes/footer.php" ?>