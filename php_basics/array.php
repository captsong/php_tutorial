<?php 
    //title needs to be declared before the page includes the header
    $title = "Array";
    include 'includes/header.php' 
?>
<body>
    <h1>Arrays</h1>
    <?php
        //allowed to store more than 1 data
        $numbers = array(1, 2, 3, 4,  5, 6, 7, 8, 9, 10);

        //print a certain vlaue
        echo "<p>$numbers[5]</p>";

        //getting the size of the array
        $size = count($numbers);
        echo "<p>Size of the array: $size</p>";

        //print all the values
        for($index = 0; $index < $size; $index++){
            echo "<p>$numbers[$index]</p>";
        }
    ?>
    
    <?php require 'includes/footer.php' ?>