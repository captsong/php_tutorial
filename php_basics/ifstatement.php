<?php 
    //title needs to be declared before the page includes the header
    $title = "If Statements";
    include 'includes/header.php' 
?>

<body>
    <?php
        //an if statement that will carry out an action based on the value of the variable
        echo '<h2>If Statement</h2>';
        $grade = 49;
        //==, ===, >, <, >=, <=,
        if($grade >= 50){
            echo '<h3 style="color:green">You have PASSED</h3>';
        }else{
            echo '<h3 style="color:red">You have FAILED</h3>';
        }
        //not recommended, for sample purpose lang
        $grade = 'A';
        if($grade == 'A'){
            echo '<h3 style="color:green">You are a superstar!</h3>';
        }else if($grade == 'B'){
            echo '<h3 style="color:yellow">You did well!</h3>';
        }else{
            echo '<h3 style="color:red">You have FAILED</h3>';
        }

    ?>
<?php require 'includes/footer.php' ?>