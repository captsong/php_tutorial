<?php 
    //title needs to be declared before the page includes the header
    $title = "Switch Statements";
    include 'includes/header.php' 
?>

<body>
    <h1>Switch Statements</h1>
    <?php
        $grade = 'C';
        switch($grade){
            case 'A': {
                echo '<h3 style="color:green">You are a superstar!</h3>';
                break;
            }
            case 'B': {
                echo '<h3 style="color:yellow">You did well!</h3>';
                break;
            }
            default: {
                echo '<h3 style="color:red">You have FAILED</h3>';
                break;
            }
        }
    ?>
    
    <?php require 'includes/footer.php' ?>