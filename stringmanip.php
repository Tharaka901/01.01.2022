    <?php
         $title = "String Manipulation"; 
        include "includes/header.php"
    ?>
    
    <?php
        $phrase1 = "student who came late";
        $phrase2 = "in class, stand with Rock";
        $name = "jayawardena agencies";
        echo $phrase1 ." ". $phrase2;
        echo "<br>";
        echo "<br>";

        //String tansformation
        echo "Uppercase first letter : " . ucfirst($name)."</br>";
        echo "Uppercase first letter of each word : " . ucwords($name)."</br>";
        echo "Upper case :" . strtoupper($name)."</br>";
        echo "Lower case :" . strtolower($name)."</br>";
        echo "<br>";
        echo "Repeast String :" .str_repeat($name,10). "</br>";
        echo "Repeast String - Nested Function :" .strtoupper(str_repeat($name,10)). "</br>";
        echo "Get a Substring :" .substr($name, 11, 20)."</br>";
        echo "<br>";
        echo "Get position of string :".strpos($name,"r")."</br>";
        // Returns NULL
        
        echo "Find Character r :" .strchr($name, "r")."</br>";
        echo "Find Character y :" .strchr($name, "y")."</br>";
        echo "Find Character g :" .strchr($name, "g")."</br>";
        echo "<br>";

        echo "Find length of String :" .strlen($name) ."</br>";

        echo "Without Trim : ". "A" . " B C D ". "E". "</br>";
        echo "Trim space on both sides :" . "A" . trim(" B C D ") . "E". "</br>";
        echo "Trim space to the left :" . "A" . ltrim(" B C D ") . "E". "</br>";
        echo "Trim space to the left :" . "A" . rtrim(" B C D ") . "E". "</br>";
        echo "<br>";

        echo "Replace string with another : " .str_replace("stand", "sit", $phrase2) ."</br>";
    ?>
    
    <?php require "includes/footer.php" ?>