<?php 
    //title needs to be declared before the page includes the header
    $title = "While/Do While Loop";
    include 'includes/header.php' 
?>

<body>
    <h1>While Loop</h1>
    <?php
        $grade = 0;
        //pre condition loop
        while($grade < 10){
            echo '<p>I am less than 10</p>';
            $grade++;
        }
    ?>

    <h1>Do While Loop</h1>
    <?php
        $grade = 0;
        //post condition
        do{
            echo '<p>I am do while loop</p>';
            $grade++;
        }while($grade < 10);
    ?>

<!-- If file cannot be found, the page wil crasj -->
<?php require 'includes/footer.php' ?>