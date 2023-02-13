<?php 
    //title needs to be declared before the page includes the header
    $title = "For Loop";
    include 'includes/header.php' 
?>

<body>
    <h1>For Loop</h1>

    <?php
        //for loop does something in an exact number of times
        for($count = 0; $count < 10; $count++){
            echo '<p>Hello World</p>';
        }
        for($count = 0; $count < 10; $count++){
            echo "<p>Value of count is: $count</p>";
        }
    ?>
    
    <?php require 'includes/footer.php' ?>