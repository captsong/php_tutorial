<?php 
    //title needs to be declared before the page includes the header
    $title = "String Manipulation";
    include 'includes/header.php' 
?>
<body>
    <h1>String Manipulation</h1>
    <?php
        //concatenation of strings
        $phrase1 = "student who came late";
        $phrase2 = "in class, stand with Rock";
        echo $phrase1 .", named Tiffany, ". $phrase2;
        echo '<br />';
        echo '<hr />';

        //string transformation
        $name = "gelwhyn abad";
        echo 'Uppercase first letter: ' . ucfirst($name) . '<br/>';
        echo 'Uppercase first letter of each word: ' . ucwords($name) . '<br/>';
        echo 'Upper case: ' . strtoupper($name) . '<br/>';
        echo 'LoweR case: ' . strtolower("THIS IS WAS ALL UPPER CASE") . '<br/>';
        echo '<hr />';

        echo 'Repeat string: ' . str_repeat('a', 10) . ' <br />';
        echo 'Repeat string: ' . strtoupper(str_repeat('a', 10)) . ' <br />';
        //get the letter AFTRER the 5th letter until the 10th letter
        //spaces count
        echo 'Get a substring: ' . substr($name, 5, 10) . ' <br />';
        echo 'Get position of string: ' . strpos($name, 'w') . ' <br />';

        //case sensitive, finds the first apperance of the letter
        //returns the letter and the following characters of the string
        echo 'Find Character "R": ' . strchr($name, 'L') . ' <br />';
        echo 'Find Character "r": ' . strchr($name, 'l') . ' <br />';
        echo 'Find Character "n": ' . strchr($name, 'n') . ' <br />';
        echo 'Find Character "v": ' . strchr($name, 'v') . ' <br />';

        echo 'Find Length of String: ' . strlen($name) . ' <br />';
        echo 'Without Trim: ' . "A" . " B C D ". " E ". ' <br />';
        //trim spaces on both sides (left and right)
        echo 'Trim spaces ON BOTH SIDES: ' . "A" . trim(" B C D ") . "E". ' <br />';
        echo 'Trim spaces ON Left Side: ' . "A" . ltrim(" B C D ") . "E". ' <br />';
        echo 'Trim spaces ON Rigth Side: ' . "A" . rtrim(" B C D ") . "E". ' <br />';

        echo 'Replace string with another: ' . str_replace('stand', 'sit', $phrase2) . ' <br />';
    ?>
<?php require 'includes/footer.php' ?>