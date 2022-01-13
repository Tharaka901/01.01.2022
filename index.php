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
    <button type="button" class="btn btn-dark">CLICK ME!</Button>
    <button type="button" class="btn btn-primary">CLICK ME!</Button>
    <button type="button" class="btn btn-success">CLICK ME!</Button>
    <a href ="https://www.heroku.com">Heroku.com</a>
     
    <?php require "includes/footer.php" ?> 