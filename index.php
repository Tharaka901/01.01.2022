    <?php 
        $title = "Index";
        include "includes/header.php"
    ?>

<title>Index</title>
    <?php
        echo "Hello PHP !";
        echo "<br/>";
        echo "Second Line ";
        echo "<br/>";
    ?>
    <?php
        $name = "Tharaka";
        $age = 31;
        echo $name;
        echo "<h1>My Name is : $name <br/> My age: $age</h1>"
    ?>
    <button type="button" class="btn btn-primary">CLICK ME!</Button>
     
    <?php require "includes/footer.php" ?> 