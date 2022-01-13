    <?php
        $title = "While/Do-while Loops";  
        include "includes/header.php"
    ?>
    
    <h1>While Loop</h1>
    <?php
        $grade = 0;
        //while($grade < 10){
        //    echo"<p> I AM LESS THAN 10!</P>";
        //}

        while($grade < 10){
            echo "<p>I AM LESS THAN 10!</p>";
            $grade++;   
        }
        
        echo "Exit Loop";
    ?>

    <h1>DO-While Loop</h1>
    <?php 
        //Post-Condition Loop
        
        do{
            echo"<p> I AM DO WHILE LOOP </p>";
            $grade++;
        }while($grade < 10);
        echo "Exit Loop";
        
    ?>
<?php require "includes/footer.php" ?>